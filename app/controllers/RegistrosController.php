<?php

class RegistrosController extends \BaseController {
	public function getRegistroCurriculum()
	{   
	    $persona_id = Auth::User()->persona->natural->id;
		return View::make('registropersonas.registro-curriculum')
		            ->with(compact('persona_id'));
	}

	public function getPrincipal()
	{
		if(Auth::check()){
			Auth::logout();
		}
			$personaorganuncio = DB::table('personas')
            ->join('organizaciones', 'personas.id', '=', 'organizaciones.persona_id')
            ->join('avisos', 'organizaciones.id', '=', 'avisos.organizacione_id')
            ->get();
		//$anuncios = Aviso::all();
		return View::make('principal.principal', compact('personaorganuncio'));
	}

	

	public function getRegistrarIdioma($nombre, $nivel, $natural)
	{
		$idioma= new Idioma();
		$idioma->nombre = $nombre;
		$idioma->nivel = $nivel;
		$idioma->naturale_id = $natural;
		$idioma->save();
		$idiomas = Idioma::where('naturale_id', '=', $natural)->get();
		return View::make('registropersonas.tablaIdiomas', compact('idiomas'));
		
	}

	public function getRegistrarEstudio($estudion, $grado, $estado, $natural)
	{
		$estudio= new Estudio();
		$estudio->estudio = $estudion;
		$estudio->grado = $grado;
		$estudio->estado = $estado;
		$estudio->naturale_id = $natural;
		$estudio->save();
		$estudios = Estudio::where('naturale_id', '=', $natural)->get();
		return View::make('registropersonas.tablaEstudio', compact('estudios'));
		
	}

	public function getRegistrarExperiencia($puesto, $fecha_ini, $fecha_fin, $empresa, $area, $descripcion, $natural)
	{
		$experiencia= new Experiencia();
		$experiencia->puesto = $puesto;
		$experiencia->fecha_i = $fecha_ini;
		$experiencia->fecha_f = $fecha_fin;
		$experiencia->empresa_n = $empresa;
		$experiencia->area = $area;
		$experiencia->descripcion = $descripcion;
		$experiencia->naturale_id= $natural;
		$experiencia->save();
		$experiencias = Experiencia::where('naturale_id', '=', $natural)->get();
		return View::make('registropersonas.tablaExperiencias', compact('experiencias'));
		
	}
}