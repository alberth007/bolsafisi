<?php

class OrganizacionesController extends \BaseController {

	public function MostrarMisAnuncios(){
		$usuario = Auth::user()->persona->organizacion;
		$anuncios = Aviso::where('organizacione_id', '=', $usuario->id)->get();
		return View::make('organizacion.VerrMisAnuncios', compact('anuncios'));
		}


	public function getAnuncio()
	{
		
		return View::make('organizacion.agregarAnuncio');
	}

	public function MostrarPostulantes($idanuncio){


		// $usuario = Avisonatural::with(['naturale'])->where('aviso_naturale.aviso_id', '=', $idanuncio)->first();
		$anuncio = Aviso::find($idanuncio);
		$eaps = Eap::all();
		$cantidad = $anuncio->naturales->count();
		// $naturale = $aviso->naturales;
		$personanatu = DB::table('personas')
            ->join('naturales', 'personas.id', '=', 'naturales.persona_id')
            ->join('aviso_naturale', 'naturales.id', '=', 'aviso_naturale.naturale_id')
            ->where('aviso_naturale.aviso_id', '=', $anuncio->id)->get();
		if($cantidad > 0 ){
			//$aviso = Aviso::find($idanuncio);
			return View::make('organizacion.mostrarPostulantes', compact('personanatu'), compact('cantidad'))
						->with(compact('anuncio'))
						->with(compact('eaps'));
		}
		else{
			$mensaje = 'No hay postulantes en este aviso';
			return View::make('organizacion.mostrarPostulantes', compact('mensaje'), compact('cantidad'))
							->with(compact('anuncio'));;
		}
	}

	public function store()
	{
		$persona_id = Auth::User()->persona->id;
		$organizacion = Organizacione::where('persona_id', '=', $persona_id)->get();
		foreach ($organizacion as $orga) {
				$codigorga = $orga->id;
		}
			//$date = new DateTime();
			//if($date > Input::get('fecha_limite')){
// 				return Redirect::back()->with([
// 		'mensaje' => 'La fecha no puede ser anterior al dia actual',
// 		'tipoMensaje' => 'info'
// 		]);
// 			}

		$aviso = new Aviso();
		$aviso->titulo = Input::get('titulo');
		$aviso->area = Input::get('area');
		$aviso->funciones= Input::get('funciones');
		$aviso->caracteristicas = Input::get('caracteristicas');
		$aviso->departamento = Input::get('departamento');
		$aviso->provincia = Input::get('provincia');
		$aviso->distrito = Input::get('distrito');
		$aviso->salario = Input::get('salario');
		$aviso->tipo = Input::get('tipo');
	
		$aviso->fecha_limite = Input::get('fecha_limite');
		$aviso->organizacione_id = $codigorga;
		$aviso->save();

		 return Redirect::to('/organizaciones/principal');
	
	}

	public function getMostrarAnuncios($orga, $exiteper)

	
	{
		$exite = $exiteper;
		if($exite == "1"){
			$anuncios = Aviso::where('organizacione_id', '=', $orga)->get();
			$count = Aviso::where('organizacione_id', '=',$orga)->count();
			if($count > '0'){
				return View::make('organizacion.avisosdeOrga', compact('anuncios'));
			}
			return "no hay anuncioss";
			
		}
		else{
			if($exite == "2") 
				return "No hay anuncios aun porque no ha rellenado sus datos";
		}
		return "no hay anuncioooos";
		
	}

}