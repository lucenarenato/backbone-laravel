<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Eloquent 
{
	public $timestamps = false;

	protected $table = 'contacts';
	
	protected $fillable = array('first_name', 'last_name', 'email_address', 'description');
	
}