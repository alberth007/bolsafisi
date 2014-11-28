<?php

class Experiencia extends \Eloquent {
	protected $fillable = ['puesto', 'fecha_i', 'fecha_f', 'empresa_n', 'area', 'descripcion', 'natural_id'];

	public function natural () {
		return $this->belongsTo('Naturale');
	}
}