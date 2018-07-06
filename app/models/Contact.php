<?php
class Contact extends Eloquent {
	public $timestamps = false;
	public $table = 'contacts';
	protected $fillable = array('first_name', 'last_name', 'email_address', 'description');
}