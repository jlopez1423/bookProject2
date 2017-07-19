<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    //Create method
    public function create()
    {

    	return view( 'registration.create' );

    }


    public function store()
    {
        
    	//Validate form FOR SOME REASON NOT WORKING
    	$this->validate( request(), [
			'name' => 'required',
			'email' 	=> 'required|email',
			'password' => 'required|confirmed'
		]); 


    	//Create and Save the user
    	$user = User::create([ 
            'name' => request( 'name' ),
            'email' => request( 'email' ),
            'password' => bcrypt(request( 'password' ) )
        ]);


    	//Sign them in
    	auth()->login( $user );
    	
    	//Redirect to the homepage
    	return redirect()->home();

    }

}
