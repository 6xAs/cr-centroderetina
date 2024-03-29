<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

########## PÁGINAS DO WEB SITE ###########
// Raiz do Web Site
Route::get('/', function () {
    
    $banner = \CR\Banner::All();
    //$notice = \App\Notice::orderBy('id','created_at', 'desc')->paginate(3);
    return view('template-site.index', compact('banner'));
});

// Pag-Quem Somos
Route::get('/Quemsomos', function () {
    return view('pages-site.Quemsomos');
});
#
// Pag-RafaelCardoso
Route::get('/Dr.RafaelCardoso', function () {
    return view('pages-site.drRafael');
});
#
// Pag-Equipe
Route::get('/Equipe', function () {
    return view('pages-site.equipe');
});
#
// Pag-Estrutura
Route::get('/Estrutura', function () {
    return view('pages-site.estrutura');
});

############# EXAMES ##############
// Pag-Angiografia-Digital
Route::get('/Angiografia-Digital', function () {

    $date = date('Y');
    $angiografia = \CR\Angiografia::All();
    return view('pages-site.angiografia-digital', compact('date', 'angiografia'));
});

// Pag-Retinografia
Route::get('/Retinografia', function () {
    return view('pages-site.Retinografia');
});

// Pag-Oct
Route::get('/Oct', function () {
    return view('pages-site.Oct');
});

// Pag-USG
Route::get('/Usg', function () {
    return view('pages-site.Usg');
});

// Pag-Mapeamento-Retina
Route::get('/Mapeamento-Retina', function () {
    return view('pages-site.Mapeamento-Retina');
});

############# CIRURGIAS ##############
// Pag-Retinopexia
Route::get('/Retinopexia ', function () {
    return view('pages-site.Retinopexia ');
});

// Pag-Laserterapia
Route::get('/Laserterapia ', function () {
    return view('pages-site.Laserterapia ');
});

// Pag-Laserterapia
Route::get('/yag-laser ', function () {
    return view('pages-site.yag-laser ');
});

// Pag-Injecao-Intravitrea
Route::get('/Injecao-Intravitrea ', function () {
    return view('pages-site.Injecao-Intravitrea ');
});

// Pag-Vitrectomia
Route::get('/Vitrectomia', function () {
    return view('pages-site.Vitrectomia');
});

################ PRINCIPAIS DOENÇAS ########
// Pag-Deslocamento-Retina
Route::get('/Deslocamento-Retina', function () {
    return view('pages-site.Deslocamento-Retina');
});

// Pag-Dmri
Route::get('/Dmri', function () {
    return view('pages-site.Dmri');
});

// Pag-Oclusoes-Vasculares-Retina
Route::get('/Buraco-Macular', function () {
    return view('pages-site.Buraco-Macular');
});

// Pag-Membrana-Epirretiana
Route::get('/Membrana-Epirretiana', function () {
    return view('pages-site.Membrana-Epirretiana');
});

// Pag-Retinopatia-Diabetica
Route::get('/Retinopatia-Diabetica', function () {
    return view('pages-site.Retinopatia-Diabetica');
});

// Pag-Retinopatia-Prematuridade
Route::get('/Retinopatia-da-Prematuridade', function () {
    return view('pages-site.Retinopatia-Prematuridade');
});

// Pag-Retinopatia-Prematuridade
Route::get('/Uvites-Toxoplasmose', function () {
    return view('pages-site.Uvites-Toxoplasmose');
});

// Pag-a
Route::get('/Oclusoes-Vasculares-Retina', function () {
    return view('pages-site.Oclusoes-Vasculares-Retina');
});

// Pag-a
Route::get('/Coriorretinopatia', function () {
    return view('pages-site.Coriorretinopatia');
});





################ PAGINA CONTATO ########
// Pag-Contato
Route::get('/Contato', function () {
    return view('pages-site.Contato');
});

// contato - Email
Route::resource('mail','contatoController');


Route::get('/home-admin', function () {
    return view('pages-panel.home');
});

Route::get('/forms', function () {
    return view('template-admin.forms');
});
Route::get('/blank-page', function () {
    return view('template-admin.blank-page');
});
Route::get('/simple-table', function () {
    return view('template-admin.simple-table');
});
Route::get('/datatable', function () {
    return view('template-admin.datatable');
});

// Pages Panel
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// ROUTE PANEL ADM - HOME
Route::get('/home-panel', 'HomeController@index')->name('home');

// ##################  ROUTES OF BANNER ################
Route::get('/page-inserir-banner', 'BannerController@index')->name('page-inserir-banner');
Route::get('/page-listar-banner', 'BannerController@listarBanner')->name('page-listar-banner');
Route::post('/input-banner', 'BannerController@insert');
Route::resource('/editbanner', 'BannerController');
Route::resource('/banner', 'BannerController');
Route::resource('/deletarbanner', 'BannerController');

// ##################  ROUTES OF BANNER ################
Route::get('/page-inserir-angio', 'AngioController@index')->name('page-inserir-angio');
Route::get('/page-listar-angio', 'AngioController@listarAngio')->name('page-listar-angio');
Route::post('/input-angio', 'AngioController@insert');
Route::resource('/editangio', 'AngioController');
Route::resource('/angio', 'AngioController');
Route::resource('/deletarangio', 'AngioController');
