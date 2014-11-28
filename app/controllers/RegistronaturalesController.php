<?php

class RegistronaturalesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		if (Auth::check())
{
    
   $datos = Input::all();

		$reglas = [
			'nombre' => 'required|alpha',
			'apellido' => 'required|alpha',
			'sexo' => 'required',
			'direccion' => 'required',
			'dni' => 'required|integer|digits:8',
			'eap' => 'required',
			'ciclo' => 'required|integer|max:12',
			'telefono' => 'integer',
			'email' => 'required|email'
		];

		$mensajes = [
			'required' => 'Este campo es necesario',
			'alpha' => 'Este campo debe ser alfabetico',
			'integer' => 'Este campo debe ser numerico',
			'boolean' => 'Debe seleccionar una Eap',
			'email' => 'Formato de correo incorrecto',
			'digits' => 'Tamaño de campo debe ser 8',
			'max' => 'Solo existe hasta el ciclo 12'
		];

		$validacion = Validator::make($datos, $reglas, $mensajes);

		if ($validacion->fails()) {
			return Redirect::to('/registro/estudiantes')->withErrors($validacion)->withInput();
		}


		$persona = new Persona();
		$persona->nombre = Input::get('nombre');
		$persona->direccion = Input::get('direccion');
		$persona->telefono = Input::get('telefono');
		$persona->email = Input::get('email');
		$persona->usuario_id = Auth::id();
		$persona->save();

		$naturale = new Naturale();
		$naturale->apellido = Input::get('apellido');
		$naturale->sexo = Input::get('sexo');
		$naturale->dni = Input::get('dni');
		$naturale->ciclo = Input::get('ciclo');
		$naturale->eap_id = Input::get('eap');
		$naturale->persona_id = $persona->id;
		$naturale->save();

		 return View::make('registropersonas.registro-curriculum', compact('naturale'));
		}
		else
			return View::make('/login')->with([
			'mensaje' => 'no estas autenticado',
			'tipo' => 'danger'
			]);
	
	}

	public function getformulario1(){
		if(Auth::check()){
			$nropersonas = Persona::where('usuario_id', '=', Auth::User()->id)->count();
			if($nropersonas>0){
				return Redirect::to('/estudiantes/modificarDatos');
			}
			$eaps = Eap::all();
			return View::make('registropersonas.formulario1', compact('eaps'));	
		}
		return Redirect::to('/principal')->with([
			'mensaje' => 'no estas autenticado',
			'tipo' => 'danger'
			]);
	}

	public function getformulario2(){
		if(Auth::check()){
			$nropersonas = Persona::where('usuario_id', '=', Auth::User()->id)->count();
			if($nropersonas>0){
				return Redirect::to('/organizaciones/modificarDatos');
			}
			
			
		return View::make('registropersonas.formulario2');
		}
		return Redirect::to('/principal')->with([
			'mensaje' => 'no estas autenticado',
			'tipo' => 'danger'
			]);
	}

public function getModificarDatos(){
	return View::make('naturales.modificarNatu');
}

public function getModificarDatosO(){
	// la persona
	// la organización
	$usuario = Usuario::with(['persona', 'persona.organizacion'])->where('usuarios.id', '=', Auth::user()->id)->first();
	// Nombre de persona:
	// $usuario->persona->nombre

	// Razón social
	// $usuario->persona->organizacion->razonsocial

	return View::make('organizacion.modificarOrga', compact('usuario'));
}

public function postActualizarOrga()
{
	$usuario = Usuario::with(['persona', 'persona.organizacion'])->where('usuarios.id', '=', Auth::user()->id)->first();
	$persona = $usuario->persona;
	$organizacion = $usuario->persona->organizacion;

	$persona->fill(Input::all());
	$persona->save();

	$organizacion->fill(Input::all());
	$organizacion->save();
	return Redirect::to('organizaciones/principal')->with([
		'mensaje' => 'Se han modificado los datos correctamente',
		'tipoMensaje' => 'info'
		]);
}

	public function organizaciones()
	{
		$datos = Input::all();


		$reglas = [
			'nombre' => 'required|alpha',
			'direccion' => 'required',
			'telefono' => 'integer',
			'email' => 'required|email',
			'ruc' => 'required|integer',
			'razon_social' => 'required',
			'contacto' => 'required',
			'rubro' => 'required'
		];

		$mensajes = [
			'required' => 'Este campo es necesario',
			'alpha' => 'Este campo debe ser alfabetico',
			'integer' => 'Este campo debe ser numerico',
			'email' => 'Formato de correo incorrecto'
		];

		$validacion = Validator::make($datos, $reglas, $mensajes);

		if ($validacion->fails()) {
			return Redirect::back()->withErrors($validacion)->withInput();
		}



		$persona = new Persona();
		$persona->nombre = Input::get('nombre');
		$persona->direccion = Input::get('direccion');
		$persona->telefono = Input::get('telefono');
		$persona->email = Input::get('email');
		$persona->usuario_id = Auth::User()->id;
		$persona->save();

		$orga = new Organizacione();
		$orga->ruc = Input::get('ruc');
		$orga->razonsocial = Input::get('razon_social');
		$orga->contacto = Input::get('contacto');
		$orga->rubro = Input::get('rubro');
		$orga->persona_id = $persona->id;
		$orga->save();

		 return Redirect::to('/organizaciones/principal')->with([
		'mensaje' => 'Se han registrado los datos correctamente',
		'tipoMensaje' => 'info'
		]);
	
	}

	public function getPrincipalOrga(){
		if(Auth::check()){
			$count = Persona::where('usuario_id', '=', Auth::User()->id)->count();
			$exitepersona = '1';
			if($count == '1'){
			
			$orgaid = Organizacione::where('persona_id', '=', Auth::User()->persona->id)->get();

			return View::make('organizacion.principalOrga', compact('orgaid'), compact('exitepersona'));
			}
			else{
				$exitepersona = '2';
				return View::make('organizacion.principalOrga', compact('exitepersona'));		
			}

		}
		return View::make('organizacion.principalOrga');
	}

	public function getPrincipalEstu(){
		$anuncios = Aviso::all();
		$personaorganuncio = DB::table('personas')
            ->join('organizaciones', 'personas.id', '=', 'organizaciones.persona_id')
            ->join('avisos', 'organizaciones.id', '=', 'avisos.organizacione_id')
            ->get();
		return View::make('naturales.principalNatu', compact('personaorganuncio'));
	}

// SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'eap_id' cannot be null (SQL: insert into `naturales` (`apellido`, `sexo`, `dni`, `ciclo`, `eap_id`, `persona_id`, `updated_at`, `created_at`) values (diaz, masculino, 1, 8, , 9, 2014-11-18 22:11:37, 2014-11-18 22:11:37))
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function mostrarPostulaciones(){
		$usuario = Usuario::with(['persona', 'persona.natural'])->where('usuarios.id', '=', Auth::user()->id)->first();
		$natural = $usuario->persona->natural->id;


		$personaorgaviso = DB::table('personas')
            ->join('organizaciones', 'personas.id', '=', 'organizaciones.persona_id')
            ->join('avisos', 'organizaciones.id', '=', 'avisos.organizacione_id')
            ->join('aviso_naturale',function($join)
        {	
        	$usuario = Usuario::with(['persona', 'persona.natural'])->where('usuarios.id', '=', Auth::user()->id)->first();
			$natural = $usuario->persona->natural->id;

            $join->on('aviso_naturale.aviso_id', '=', 'avisos.id')
                 ->where('aviso_naturale.naturale_id', '=', $natural);
        })
            ->get();


		return View::make('naturales.verPostulaciones', compact('personaorgaviso'));

	}
	public function GuardarPostulacion($idanuncio)
	{
		
		$usuario = Usuario::with(['persona', 'persona.natural'])->where('usuarios.id', '=', Auth::user()->id)->first();
		$persona = $usuario->persona;
		$natural = $usuario->persona->natural;
		$aviso = Aviso::find($idanuncio);
		$aviso->naturales()->attach($natural->id, array('estado' => 'recibido' ));
		// $avisonat = new Avisonatural();
		// $avisonat->aviso_id = $idanuncio;
		// $avisonat->naturale_id = $natural->id;
		// $avisonat->estado = 'recibido';
		// $avisonat->save();

		return Redirect::to('estudiantes/principal')->with([
		'mensaje' => 'la empresa ha recibido tu postulacion',
		'tipoMensaje' => 'info'
		]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
