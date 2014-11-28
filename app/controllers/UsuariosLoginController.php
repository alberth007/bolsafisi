<?php

class UsuariosLoginController extends BaseController {



	public $restful = true;

	public function usuarios(){

		$datos = Input::all();

		$reglas = [
			'clave' => 'required',
			'usuario' => 'required'
		];

		$mensajes = [
			'required' => 'Este campo es necesario'
		];

		$validacion = Validator::make($datos, $reglas, $mensajes);

		if ($validacion->fails()) {
			return Redirect::back()->withErrors($validacion)->withInput()->with([
			'mensaje' => 'Existen errores en los datos.',
			'tipo' => 'danger'
			]);
		}

	$userdata = ['username' => Input::get('usuario'), 'password' => Input::get('clave')];
	

	if (Auth::attempt($userdata)){
		if(Auth::User()->tipo == 'natural'){
			return Redirect::to('/estudiantes/principal');
		}
		else{
			return Redirect::to('/organizaciones/principal');
		}
	}
	return Redirect::to('/login')->with([
			'mensaje' => 'Usuario o contraseña invalida.',
			'tipo' => 'danger'
			]);;
	
}

	public function iniciologin(){
		return View::make('login');
	}

	 public function Cerrar_Logout()
    {
        //Desconctamos al usuario
        Auth::logout();
        //Redireccionamos al inicio de la app con un mensaje
        return Redirect::to('/principal')->with('msg', 'Gracias por visitarnos!.');
    }
}
?>