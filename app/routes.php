<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('holi', function()
{
	return View::make('ejemplos.hello');
});

// Route::get('/eaps/create', function()
// {
// 	return "holi";
// });

// Route::post('/eaps/create', function()
// {
// 	return Input::get('mensaje');
// });

Route::resource('eaps', 'EapsController');
//Route::resource('usuarios', 'UsuariosController');

Route::get('/usuarios/create', 'UsuariosController@create');
Route::post('/registro/estudiantes', 'UsuariosController@store');
Route::get('/registro/estudiantes', 'RegistronaturalesController@getformulario1');
Route::get('/registro/organizaciones', 'RegistronaturalesController@getformulario2');
Route::get('/estudiantes/modificarDatos', 'RegistronaturalesController@getModificarDatos');
Route::get('/organizaciones/modificarDatos', 'RegistronaturalesController@getModificarDatosO');
Route::post('/organizaciones/modificarDatos', 'RegistronaturalesController@postActualizarOrga');
Route::post('/registro/estudiante', 'RegistronaturalesController@store');
Route::post('/estudiantes/modificarDatos', 'RegistronaturalesController@ActualizarNatu');
//Route::post('/organizaciones/principal', 'OrganizacionesController@store');
Route::post('/organizaciones/principal', 'RegistronaturalesController@organizaciones');
Route::get('/estudiantes/postular/{idanuncio}', 'RegistronaturalesController@GuardarPostulacion' );
Route::get('/organizaciones/postulantes/{anunciouni}', 'OrganizacionesController@MostrarPostulantes');
Route::get('/registro/estudiante', 'RegistrosController@getRegistroCurriculum');
Route::get('/estudiantes/postulaciones', 'RegistronaturalesController@mostrarPostulaciones');
Route::get('/organizaciones/misAnuncios', 'OrganizacionesController@MostrarMisAnuncios');
Route::get('/estudiantes/modificarEstudios', 'RegistronaturalesController@ModificarCurriculum');
//Route::post('/organizaciones/principal', 'OrganizacionesController@getAnuncio');
Route::get('/principal', 'RegistrosController@getPrincipal');
Route::get('/organizaciones/crearAnuncio', 'OrganizacionesController@getAnuncio');
Route::post('/organizaciones/crearAnuncio', 'OrganizacionesController@store');
Route::get('/organizaciones/principal', 'RegistronaturalesController@getPrincipalOrga');
Route::get('/estudiantes/principal', 'RegistronaturalesController@getPrincipalEstu');
Route::get('/verAnuncio/{idanuncio}', 'AnunciosController@VerAnuncio');
Route::get('/estudiante/idioma/{nombre}/{nivel}/{natural}', 'RegistrosController@getRegistrarIdioma');
Route::get('/estudiante/estudio/{estudio}/{grado}/{estado}/{natural}', 'RegistrosController@getRegistrarEstudio');
// Route::controller('', 'RegistrosController' );
Route::get('/estudiante/experiencia/{puesto}/{fecha_ini}/{fecha_fin}/{empresa}/{area}/{descripcion}/{natural}', 'RegistrosController@getRegistrarExperiencia');
Route::get('/organizacion/anuncios/{orga}/{exiteper}', 'OrganizacionesController@getMostrarAnuncios');
Route::get('/', 'IniciosController@getBienvenida');
Route::post('login', 'UsuariosLoginController@usuarios');
Route::post('logout', 'UsuariosLoginController@Cerrar_Logout');

Route::get('/login', 'UsuariosLoginController@iniciologin');