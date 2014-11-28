<?php

class Naturale extends \Eloquent {
	protected $fillable = ['apellido', 'sexo', 'dni', 'ciclo', 'eap_id', 'persona_id'];

	public function eap() {
		return $this->belongsTo('Eap');
	}

	public function experiencias() {
		return $this->hasMany('Experiencia');
	}

	public function idiomas() {
		return $this->hasMany('Idioma');
	}


	public function persona() {
		return $this->belongsTo('Persona');
	}

	public function aviso_naturale() {
		return $this->hasMany('Aviso_naturale');
	}

	public function avisos(){
        return $this->belongsToMany('Aviso', 'aviso_naturale', 'aviso_id', 'naturale_id')
                        ->withPivot('estado');
    }
	// public function avisos()
	// {
	// 	$this->belongsToMany('Aviso', 'aviso_naturale');
	// }
}