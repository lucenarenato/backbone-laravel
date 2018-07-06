<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    public function index()
    {
    	return Contacts::all();
    }

    public function create()
    {
    	
    }

    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

    public function store()
    {
    	$input = Input::json();

    	Contacts::create(array(
    		'first_name' => $input->first_name,
    		'last_name' => $input->last_name,
    		'email_address' => $input->email_address,
    		'description' => $input->description
    	));

    	/*return Contact::create(array(
			'first_name' => Input::get('first_name'),
			'last_name' => Input::get('last_name'),
			'email_address' => Input::get('email_address'),
			'description' => Input::get('description')
		));*/
    	
    }
    	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

    public function show()
    {
    	return Contacts::find($id);	
    }

    /**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

    public function edit()
    {
    	
    }

    /**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

    public function update($id)
    {
    	$contact = Contacts::find($id);
    	$input = Input::json();

    	$contact->first_name = $input->first_name;
    	$contact->last_name = $input->last_name;
    	$contact->description = $input->description;
    	$contact->email_address = $input->email_address;

    	$contact->save();

    	/*$contact->first_name = Input::get('first_name');
		$contact->last_name = Input::get('last_name');
		$contact->email_address = Input::get('email_address');
		$contact->description = Input::get('description');*/
    }

    /**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

    public function destroy($id)
    {
    	return Contact::find($id)->delete();
    }
}
