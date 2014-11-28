<?php

class Estudio extends \Eloquent {
	protected $fillable = ['grado', 'estado', 'estudio', 'naturale_id'];

	public function natural() {
		return $this->belongsTo('Naturale');
	}
}