<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
class SessionsController extends Controller
{

    public function __construct(){

        $this->middleware( 'guest', [ 'except' => 'destroy' ] );

    }
    
    //Create method
    public function create()
    {
    	
        return view( 'sessions.create' );

    }



    public function store()
    {
        // dd( auth()->attempt( request( [ 'email', 'password' ] ) ) );

        if( ! auth()->attempt( request( [ 'email', 'password' ] ) ) ){

            return back()->withErrors([
                    'message' => 'Please check your credentials and try again'
                ]);
        }


        //Redirect to homepage
        return redirect()->home();

    }

    //Logout
    public function destroy()
    {

    	auth()->logout();

    	return redirect()->home();

    }



}
