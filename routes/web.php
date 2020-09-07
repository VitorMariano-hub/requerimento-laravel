<?php

use Illuminate\Support\Facades\Route;


// Home
Route::get('/', 'HomeController@index')->name('home');

//Index do requerimento
Route::get('requerimento', 'RequerimentoController@index')->name('requerimento');
//Show requerimento
Route::get('requerimento/show/{id}', 'RequerimentoController@show')->name('requerimento.show');
//Editando requerimento
Route::get('requerimento/edit/{id}', 'RequerimentoController@edit')->name('requerimento.edit');
//Atualizando requerimento
Route::put('/update/{id}','RequerimentoController@update')->name('requerimento.update');
//Deletando requerimento
Route::get('/delete/{id}', 'RequerimentoController@delete')->name('requerimento.delete');
Route::delete('/destroy/{id}', 'RequerimentoController@destroy')->name('requerimento.destroy');


// Passos do requerimento.
//1
Route::get('requerimento/create-step-one', 'RequerimentoController@createStepOne')->name('requerimento.create.step.one');
Route::post('requerimento/create-step-one', 'RequerimentoController@postCreateStepOne')->name('requerimento.create.step.one.post');
//2  
Route::get('requerimento/create-step-two', 'RequerimentoController@createStepTwo')->name('requerimento.create.step.two');
Route::post('requerimento/create-step-two', 'RequerimentoController@postCreateStepTwo')->name('requerimento.create.step.two.post');
//3
Route::get('requerimento/create-step-three', 'RequerimentoController@createStepThree')->name('requerimento.create.step.three');
Route::post('requerimento/create-step-three', 'RequerimentoController@postCreateStepThree')->name('requerimento.create.step.three.post');
//4  
Route::get('requerimento/create-step-four', 'RequerimentoController@createStepFour')->name('requerimento.create.step.four');
Route::post('requerimento/create-step-four', 'RequerimentoController@postCreateStepFour')->name('requerimento.create.step.four.post');

//Rota para download do pdf
Route::get('pdf/{id}',array('as'=>'pdf','uses'=>'PdfController@pdf'));
       