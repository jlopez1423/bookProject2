<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Post;

class PostsController extends Controller
{


    //Homepage Landing
    public function index() 
    {

    	return view( 'posts.index' );
    }

    //Show all posts
    public function show()
    {

    	return view( 'posts.show' );

    }

    //Create a post
   public function create()
    {

    	return view( 'posts.create' );

    }

    //Store a post to the DB
    public function store()
    {
    	//Create a new post using the request data
    	// dd( request( 'title' ) );

    	// $post = new Post;

    	//Doing some validation
    	$this->validate( request(), [
    			'title' => 'required',
    			'body' 	=> 'required'
    		]);

    	//Creates and stores new entry to db
    	Post::create( [ 
    		'title' => request( 'title' ), 

    		'body' 	=> request( 'body' ) 
    	] );

    	//And re-direct to the home page.
    	return redirect( '/' );
    }

}
