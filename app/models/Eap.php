<?php

class Eap extends \Eloquent {
	protected $fillable = ['nombre', 'codigo'];

	public function naturales() {
		return $this->hasMany('Naturale');
	}
}