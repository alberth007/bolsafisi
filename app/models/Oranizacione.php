<?php

class Organizacione extends \Eloquent {
	protected $fillable = ['ruc', 'razonsocial', 'contacto', 'rubro', 'persona_id'];

	public function persona() {
		return $this->belongsTo('Persona');
	}

	public function avisos() {
		return $this->hasMany('Aviso');
	}
}