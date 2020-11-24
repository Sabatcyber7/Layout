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

Route::get('/', function () {
    return view('home');
});


Auth::routes();

Route::get('/quem', 'HomeController@quem')->name('quem');

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/Solucoes_TI', 'HomeController@Solucoes_TI')->name('Solucoes_TI');
Route::any('/cad_empresa', 'HomeController@cad_empresa')->name('cad_empresa');
Route::any('/cadastrar_empresa', 'HomeController@cadastrar_empresa')->name('cadastrar_empresa');

Route::get('/Pesquisa_cnpj/{id}', 'HomeController@Pesquisa_cnpj')->name('Pesquisa_cnpj');
Route::any('/Alterar_contrato/{id}', 'HomeController@Alterar_contrato')->name('Alterar_contrato');
Route::get('/Excluir_empresa/{cnpj}', 'HomeController@Excluir_empresa')->name('Excluir_empresa');
Route::any('/Resp_nome/{nome}', 'HomeController@Resp_nome')->name('Resp_nome');


Route::any('/projetos', 'HomeController@projetos')->name('projetos');


Route::any('/cad_numero', 'HomeController@cad_numero')->name('cad_numero');
Route::any('/gravar', 'HomeController@gravar')->name('gravar');
Route::any('/estatistica', 'HomeController@estatistica')->name('estatistica');

Route::any('/atraso', 'HomeController@atraso')->name('atraso');
Route::any('/react', 'HomeController@react')->name('react');

Route::any('/Excel', 'HomeController@Excel')->name('Excel');

Route::any('/Transforma', 'HomeController@Transforma')->name('Transforma');

