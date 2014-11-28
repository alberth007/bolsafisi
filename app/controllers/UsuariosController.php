<?php

class UsuariosController extends \BaseController {

	/**
	 * Display a listing of usuarios
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuarios = Usuario::all();

		return View::make('usuarios.index', compact('usuarios'));
	}

	/**
	 * Show the form for creating a new usuario
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usuarios.create');
	}

	/**
	 * Store a newly created usuario in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$datos = Input::all();

		$reglas = [
			'clave' => 'confirmed|required',
			'usuario' => 'required|unique:usuarios,username',
			'tipo_usuario' => 'required'
		];

		$mensajes = [
			'confirmed' => 'Los campos no coinciden',
			'required' => 'Este campo es necesario',
			'unique' => 'Este usuario ya existe'
		];

		$validacion = Validator::make($datos, $reglas, $mensajes);

		if ($validacion->fails()) {
			return Redirect::back()->withErrors($validacion)->withInput()->with([
			'mensaje' => 'Existen errores en los datos.',
			'tipo' => 'danger'
			]);
		}

		$usuario = new Usuario();
		$usuario->username = Input::get('usuario');
		$usuario->password = Input::get('clave');
		$usuario->tipo = Input::get('tipo_usuario');
		$usuario->save();

		Auth::login($usuario);
			if(Auth::User()->tipo == 'natural')
				return Redirect::to('/estudiantes/principal');
			return Redirect::to('/organizaciones/principal');
		//return View::make('login', compact('usuario'));

		//if(Input::get('tipo_usuario') == 'natural')
		//	return View::make('registropersonas.formulario1', compact('usuario', 'eaps') );
		//return View::make('registropersonas.formulario2', compact('usuario'));
		// $validator = Validator::make($data = Input::all(), Usuario::$rules);

		// if ($validator->fails())
		// {
		// 	return Redirect::back()->withErrors($validator)->withInput();
		// }

		// $usuario = new Usuario();
		// $usuario->usuario = Input::get('usuario');
		// $usuario->clave = Input::get('clave1');
		// $clave1 = Input::get('clave1');
		// $clave2 = Input::get('clave2');

		// if ($clave1 == $clave2){
		// 	$usuario->save();
		// 	return Redirect::route('usuarios.index');
		// }
		// else{
		// 	return Redirect::back()->withErrors()->withInput();
		// }

		// $eap->save();




		// Usuario::create(Input::all());

		// return Redirect::route('usuarios.index');
	
	}

	/**
	 * Display the specified usuario.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usuario = Usuario::findOrFail($id);

		return View::make('usuarios.show', compact('usuario'));
	}

	/**
	 * Show the form for editing the specified usuario.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usuario = Usuario::find($id);

		return View::make('usuarios.edit', compact('usuario'));
	}

	/**
	 * Update the specified usuario in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usuario = Usuario::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usuario::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usuario->update($data);

		return Redirect::route('usuarios.index');
	}

	/**
	 * Remove the specified usuario from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usuario::destroy($id);

		return Redirect::route('usuarios.index');
	}

}
