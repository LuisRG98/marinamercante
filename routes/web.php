<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes();

Route::resource('/usuarios','UsersController')->names('usuarios');
Route::get('/usuarioss','UsersController@edi')->name('edi');

Route::resource('/embarcaciones','EmbsController')->names('embs');
Route::get('/embarcacioness','EmbsController@edi')->name('edie');
Route::get('/emb','EmbsController@preview')->name('embprev');
Route::post('/emb','EmbsController@preview2')->name('embprev2');

Route::resource('/files','FileController')->names('files');

Route::resource('/embarcos','EmbarcoController')->names('embarcos');

Route::resource('/solicitudes','SolicitudController')->names('soli');
Route::get('/solicitud/{id}/{i}','SolicitudController@asig')->name('solic');

Route::resource('/certs','CertsController')->names('certs');

Route::resource('/search','SearchController')->names('searchs');

Route::resource('/checklists','ChecklistController')->names('checklists');
Route::get('/checklist/{id}','ChecklistController@lista')->name('check');

Route::resource('/historic','HistoricsController')->names('historics');
Route::resource('/report','ReportController')->names('reports');
Route::get('/avanzado','ReportController@avanzado')->name('avanzado');

Route::resource('/archivos','ArchivosController')->names('archivos');

Route::resource('/estadisticas','StatController')->names('stats');

Route::get('/home', 'HomeController@index')->name('home');
