<?php

namespace CR\Http\Controllers;

use Illuminate\Http\Request;
use CR\Http\Requests\BannerRequest;
use Illuminate\Support\Facades\Input;
use App\Banner;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use validador;
use Session;
use Redirect;

class BannerController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $date = date('Y');
       return view('pages-panel.inserir-banner', compact('date'));
   }
   public function insert(BannerRequest $request)
   {
       // Insert DB
       $file_principal                 = Input::file('image_01');
       $destinationPath                = 'images-banner/';
       $fileName_principal             = $file_principal->getClientOriginalName();
       Input::file('image_01')->move($destinationPath, $fileName_principal);
       // Validação dos dados

      $title                           = $request->input('title');
      $subtitle                        = $request->input('subtitle');
      $imag_01                         = $request->file('image_01');
      DB::table('banners')->insert(
          ['title' => $title, 'subtitle' => $subtitle, 'image_01' => $fileName_principal]
      );
      // Post Message
      $request->session()->flash('message', 'Banner Inserido com Sucesso');
      return Redirect::to('page-listar-banner');
   }
   public function listarBanner()
   {
       $date = date('Y');
       $banner = \CR\Banner::All();
       return view('pages-panel.page-listar-banner', compact('banner', 'date'));
   }
   public function edit($id)
   {
       $date = date('Y');
       $banner = \CR\Banner::find($id);
       return view('pages-panel.bannerdetails', compact('banner', 'date'));
   }
   public function update($id, BannerRequest $request)
   {
       // Insert DB
       $file_principal                 = Input::file('image_01');
       $destinationPath                = 'images-banner/';
       $fileName_principal             = $file_principal->getClientOriginalName();
       Input::file('image_01')->move($destinationPath, $fileName_principal);
       // Validação dos dados

      $title                           = $request->input('title');
      $subtitle                        = $request->input('subtitle');
      $imag_01                         = $request->file('image_01');
      // Apagando arquivos existente
      $file_principal                     = DB::table('banners')->where('id',$id)->value('image_01');
      // Deletando arquivos existentes na pasta
      File::delete('images-banner/'.$file_principal);
      DB::table('banners')
           ->where('id',$id)
           ->update(
               ['title' => $title, 'subtitle' => $subtitle, 'image_01' => $fileName_principal]
           );
       File::delete('image-banner/'.$file_principal);
       // Post Message
       $request->session()->flash('message', 'Banner Atualizado com Sucesso');
       return Redirect::to('page-listar-banner');
   }
   public function destroy($id, Request $request)
   {
       // Apagando arquivos existente
       $file_principal                     = DB::table('banners')->where('id',$id)->value('image_01');
       // Deletando arquivos existentes na pasta
       File::delete('images-banner/'.$file_principal);
       \CR\Banner::destroy($id);
       $request->session()->flash('message', 'Banner excluída com sucesso');
       return Redirect::to('page-listar-banner');
   }
}
