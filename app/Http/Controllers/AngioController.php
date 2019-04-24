<?php
namespace CR\Http\Controllers;

use Illuminate\Http\Request;
use CR\Http\Requests\ContentRequest;
use Illuminate\Support\Facades\Input;
use App\Angiografia;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use validador;
use Session;
use Redirect;


class AngioController extends Controller
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

       return view('pages-panel.page-inserir-angio', compact('date'));
   }
   public function insert(ContentRequest $request)
   {
       // Destino do arquivo
       $destinationPath                   = 'images-pages/';
       // Verificando se existe arquivo
       if ($request->hasFile('image_01')) {
           $file_principal = $request->file('image_01');
           $fileName_principal                = $file_principal->getClientOriginalName();
           // Inserindo na pasta
           Input::file('image_01')->move($destinationPath, $fileName_principal);
       }
       else{
           $fileName_principal                = $request->input('image_01');
       }
       // Verificando se existe arquivo
       if ($request->hasFile('image_02')) {
           $image_02 = $request->file('image_02');
           $fileName_principal_02                = $image_02->getClientOriginalName();
           // Inserindo na pasta
           Input::file('image_02')->move($destinationPath, $fileName_principal_02);
       }
       else{
           $fileName_principal_02                = $request->input('image_02');
       }
       // Verificando se existe arquivo
       if ($request->hasFile('image_03')) {
           $image_03 = $request->file('image_03');
           $fileName_principal_03                = $image_03->getClientOriginalName();
           // Inserindo na pasta
           Input::file('image_03')->move($destinationPath, $fileName_principal_03);
       }
       else{
           $fileName_principal_03                = $request->input('image_03');
       }
       // Validação dos dados
      $title                              = $request->input('title');
      $subtitle                           = $request->input('subtitle');
      $data                               = $request->input('data');
      $description                        = $request->input('description');
      $observacao                        = $request->input('observacao');
      $video                              = $request->input('video');
      DB::table('angiografias')->insert(
          ['title' => $title, 'subtitle' => $subtitle,
           'data' => $data, 'description' => $description, 'observacao' => $observacao, 'video' => $video,
           'image_01' => $fileName_principal, 'image_02' => $fileName_principal_02, 'image_03' => $fileName_principal_03]
      );
      // Post Message
      $request->session()->flash('message', 'Conteúdo Inserido com Sucesso');
      return Redirect::to('page-listar-angio');
   }

   public function listarAngio()
   {
       $angiografia = \CR\Angiografia::All();
       return view('pages-panel.page-listar-angio', compact('angiografia', 'date'));
   }
   public function edit($id)
   {
       $date = date('Y');
       $angiografia = \CR\Angiografia::find($id);
       return view('pages-panel.angiodetails', compact('angiografia', 'date'));
   }
   public function update(Request $request, $id)
   {
       // Destino do arquivo
       $destinationPath                   = 'images-pages/';
       // Apagando arquivos existente
       $fileName_principal                 = DB::table('angiografias')->where('id',$id)->value('image_01');
       $fileName_principal_02              = DB::table('angiografias')->where('id',$id)->value('image_02');
       $fileName_principal_03              = DB::table('angiografias')->where('id',$id)->value('image_03');
       // Deletando arquivos existentes na pasta
       File::delete('images-pages/'.$fileName_principal);
       File::delete('images-pages/'.$fileName_principal_02);
       File::delete('images-pages/'.$fileName_principal_03);
       // Verificando se existe arquivo no file
       if ($request->hasFile('image_01')) {
           $file_principal = $request->file('image_01');
           $fileName_principal                = $file_principal->getClientOriginalName();
           // Inserindo na pasta
           Input::file('image_01')->move($destinationPath, $fileName_principal);
       }
       else{
           $fileName_principal                = $request->input('image_01');
       }
       // Verificando se existe arquivo
       if ($request->hasFile('image_02')) {
           $image_02 = $request->file('image_02');
           $fileName_principal_02                = $image_02->getClientOriginalName();
           // Inserindo na pasta
           Input::file('image_02')->move($destinationPath, $fileName_principal_02);
       }
       else{
           $fileName_principal_02                = $request->input('image_02');
       }
       // Verificando se existe arquivo
       if ($request->hasFile('image_03')) {
           $image_03 = $request->file('image_03');
           $fileName_principal_03                = $image_03->getClientOriginalName();
           // Inserindo na pasta
           Input::file('image_03')->move($destinationPath, $fileName_principal_03);
       }
       else{
           $fileName_principal_03                = $request->input('image_03');
       }
      // Validação dos dados
      $title                              = $request->input('title');
      $subtitle                           = $request->input('subtitle');
      $data                               = $request->input('data');
      $description                        = $request->input('description');
      $observacao                        = $request->input('observacao');
      $video                              = $request->input('video');
      DB::table('angiografias')
           ->where('id',$id)
           ->update(
               ['title' => $title, 'subtitle' => $subtitle,
                'data' => $data, 'description' => $description, 'observacao' => $observacao, 'video' => $video,
                'image_01' => $fileName_principal, 'image_02' => $fileName_principal_02, 'image_03' => $fileName_principal_03]
           );
       // Post Message
       $request->session()->flash('message', 'Conteúdo Atualizado com Sucesso');
       return Redirect::to('page-listar-angio');
   }
   public function destroy($id, Request $request)
   {
       // Apagando arquivos existente
       $file_principal                     = DB::table('angiografias')->where('id',$id)->value('image_01');
       File::delete('images-pages/'.$file_principal);
       $fileName_principal_02              = DB::table('angiografias')->where('id',$id)->value('image_02');
       File::delete('images-pages/'.$fileName_principal_02);
       $fileName_principal_03              = DB::table('angiografias')->where('id',$id)->value('image_03');
       // Deletando arquivos existentes na pasta
       File::delete('images-pages/'.$fileName_principal_03);
       \CR\Angiografia::destroy($id);
       $request->session()->flash('message', 'Conteúdo excluído com sucesso');
       return Redirect::to('page-listar-angio');
   }
}
