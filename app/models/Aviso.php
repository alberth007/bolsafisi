<?php

class Aviso extends \Eloquent {
	protected $fillable = ['titulo', 'area', 'funciones', 'caracteristicas', 
		'departamento', 'provincia', 'distrito', 'salario', 'tipo', 'fecha_limite',
		'organizacione_id'];

	public function organizacion() {
		return $this->belongsTo('Organizacione');
	}

	 public function naturales(){
        return $this->belongsToMany('Naturale', 'aviso_naturale', 'aviso_id', 'naturale_id')
                        ->withPivot('estado');
    }

	public function aviso_naturale() {
		return $this->hasMany('Aviso_naturale');
	}
}