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
    //$notice = \App\Notice::orderBy('id','created_at', 'desc')->paginate(3);
    return view('template-site.index');
});

// Pag-Quem Somos
Route::get('/Quemsomos', function () {
    return view('htmlSite.Quemsomos');
});
#
// Pag-RafaelCardoso
Route::get('/Dr.RafaelCardoso', function () {
    return view('htmlSite.drRafael');
});
#
// Pag-Equipe
Route::get('/Equipe', function () {
    return view('htmlSite.equipe');
});
#
// Pag-Estrutura
Route::get('/Estrutura', function () {
    return view('htmlSite.estrutura');
});

############# EXAMES ##############
// Pag-Angiografia-Digital
Route::get('/Angiografia-Digital', function () {
    return view('htmlSite.angiografia-digital');
});

// Pag-Retinografia
Route::get('/Retinografia', function () {
    return view('htmlSite.Retinografia');
});

// Pag-Oct
Route::get('/Oct', function () {
    return view('htmlSite.Oct');
});

// Pag-USG
Route::get('/Usg', function () {
    return view('htmlSite.Usg');
});

// Pag-Mapeamento-Retina
Route::get('/Mapeamento-Retina', function () {
    return view('htmlSite.Mapeamento-Retina');
});

############# CIRURGIAS ##############
// Pag-Retinopexia
Route::get('/Retinopexia ', function () {
    return view('htmlSite.Retinopexia ');
});

// Pag-Laserterapia
Route::get('/Laserterapia ', function () {
    return view('htmlSite.Laserterapia ');
});

// Pag-Laserterapia
Route::get('/yag-laser ', function () {
    return view('htmlSite.yag-laser ');
});

// Pag-Injecao-Intravitrea
Route::get('/Injecao-Intravitrea ', function () {
    return view('htmlSite.Injecao-Intravitrea ');
});

// Pag-Vitrectomia
Route::get('/Vitrectomia', function () {
    return view('htmlSite.Vitrectomia');
});

################ PRINCIPAIS DOENÇAS ########
// Pag-Deslocamento-Retina
Route::get('/Deslocamento-Retina', function () {
    return view('htmlSite.Deslocamento-Retina');
});

// Pag-Dmri
Route::get('/Dmri', function () {
    return view('htmlSite.Dmri');
});

// Pag-Oclusoes-Vasculares-Retina
Route::get('/Buraco-Macular', function () {
    return view('htmlSite.Buraco-Macular');
});

// Pag-Membrana-Epirretiana
Route::get('/Membrana-Epirretiana', function () {
    return view('htmlSite.Membrana-Epirretiana');
});

// Pag-Retinopatia-Diabetica
Route::get('/Retinopatia-Diabetica', function () {
    return view('htmlSite.Retinopatia-Diabetica');
});

// Pag-Retinopatia-Prematuridade
Route::get('/Retinopatia-da-Prematuridade', function () {
    return view('htmlSite.Retinopatia-Prematuridade');
});

// Pag-Retinopatia-Prematuridade
Route::get('/Uvites-Toxoplasmose', function () {
    return view('htmlSite.Uvites-Toxoplasmose');
});

// Pag-a
Route::get('/Oclusoes-Vasculares-Retina', function () {
    return view('htmlSite.Oclusoes-Vasculares-Retina');
});

// Pag-a
Route::get('/Coriorretinopatia', function () {
    return view('htmlSite.Coriorretinopatia');
});





################ PAGINA CONTATO ########
// Pag-Contato
Route::get('/Contato', function () {
    return view('htmlSite.Contato');
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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
