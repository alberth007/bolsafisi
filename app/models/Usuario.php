<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Usuario extends Eloquent implements UserInterface, RemindableInterface {
	protected $fillable = ['username', 'password', 'tipo'];
    protected $table = 'usuarios';
    protected $hidden = array('password');
	
	public function persona()
	{
		return $this->hasOne('Persona');
	}

	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = Hash::make($value);
	}

	public function getAuthPassword()
	{
		return $this->password;
	}

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getRememberToken()
	{
		 return $this->remember_token;
	}

	public function setRememberToken($value)
	{
		  return $this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
		
		 return 'remember_token';
	}

	
}