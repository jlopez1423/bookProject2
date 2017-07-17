<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    //Create method
    public function create()
    {

    	return view( 'sessions.create' );

    }


    public function store()
    {
    	//Validate form FOR SOME REASON NOT WORKING
    	$this->validate( request(), [
			'name' => 'required',
			'email' 	=> 'required|email',
			'password' => 'required'
		]); 

    	//Create and Save the user
    	$user = User::create( request( [ 'name', 'email', 'password' ] ) );
    	// ddd( $user );
    	//Sign them in
    	auth()->login($user);
    	
    	//Redirect to the homepage
    	return redirect()->home();

    }

}
