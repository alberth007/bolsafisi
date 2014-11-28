<?php

class Idioma extends \Eloquent {
	protected $fillable = ['nombre', 'nivel', 'naturale_id'];

	public function natural() {
		return $this->belongsTo('Naturale');
	}
}