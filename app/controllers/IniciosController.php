<?php

class IniciosController extends \BaseController {
	public function getBienvenida()
	{
		if(Auth::check()){
			Auth::logout();
		}
		return View::make('principal.Bienvenida');
	}

	}