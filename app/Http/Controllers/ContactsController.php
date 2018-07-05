<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //
    public function index()
    {
    	return Contacts::all();
    }

    public function create()
    {
    	
    }

    public function store()
    {
    	$input = Input::json();

    	Contacts::create(array(
    		'first_name' => $input->first_name,
    		'last_name' => $input->last_name,
    		'email_adress' => $input->email_adress,
    		'description' => $input->description
    	));
    	
    }

    public function show()
    {
    	return Contacts::find($id);	
    }

    public function edit()
    {
    	
    }

    public function update($id)
    {
    	$contact = Contacts::find($id);
    	$input = Input::json();

    	$contact->first_name = $input->first_name;
    	$contact->last_name = $input->last_name;
    	$contact->description = $input->description;
    	$contact->email_adress = $input->email_adress;

    	$contact->save();
    }

    public function destroy($id)
    {
    	return Contact::find($id)->delete();
    }
}
