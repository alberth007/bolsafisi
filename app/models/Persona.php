<?php

class Persona extends \Eloquent {
	protected $fillable = ['nombre', 'direccion', 'telefono', 'email', 'usuario_id'];

	public function usuario() {
		return $this->belongsTo('Usuario');
	}

	public function natural() {
		return $this->hasOne('Naturale');
	}

	public function organizacion()
	{
		return $this->hasOne('Organizacione');
	}
}