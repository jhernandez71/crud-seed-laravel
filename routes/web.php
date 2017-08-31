<?php

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Backend'], function(){
  Route::get('tasks','TasksController@getIndex')->name('tasks.index');
  // Routas para la creacion de nuevas tareas, el get para mostrar el formulario
  // y el post para enviar ell formulario, validar y almacenar la Tarea en la B.D.
  Route::get('tasks/create','TasksController@getCreate')->name('tasks.create');
  Route::post('tasks/store','TasksController@postStore')->name('tasks.store');
  // Ruta para Editar una Tarea.
  Route::post('tasks/edit','TasksController@postEdit')->name('tasks.edit');
  // Ruta para el metodo de eliminar tarea.
  Route::get('tasks/destroy/{id}/','TasksController@Destroy')->name('tasks.destroy');

  Route::resource('user','UserController');
});
