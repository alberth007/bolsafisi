<?php

class AnunciosController extends \BaseController {
	public function VerAnuncio($idanuncio)
	{
		$nun = $idanuncio;
		$anuncioo = DB::table('personas')
            ->join('organizaciones', 'personas.id', '=', 'organizaciones.persona_id')
            ->join('avisos', 'organizaciones.id', '=', 'avisos.organizacione_id')
            ->where('avisos.id', '=', $nun)->first();
		
		return View::make('Anuncios.verAnuncio', compact('anuncioo'));
	}
}