<?php

class Avisonatural extends \Eloquent {
	protected $table = 'aviso_naturale';
	protected $fillable = ['aviso_id', 'naturale_id', 'estado'];

	public function aviso() {
		return $this->belongsTo('Aviso');
	}

	public function naturale() {
		return $this->belongsTo('Naturale');
	}
}