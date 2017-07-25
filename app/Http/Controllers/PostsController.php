<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Post;

use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct()
    {

        $this->middleware( 'auth' )->except( [ 'index', 'show' ] );
    
    }

    //Homepage Landing
    public function index() 
    {

        $posts = Post::latest()
                ->filter( request([ 'month', 'year' ] ) )
                ->get();

        $archives = Post::selectRaw( 'year(created_at) year, monthname(created_at) month, count(*) published')
                    ->groupBy('year', 'month')
                    ->orderByRaw('min(created_at) desc')
                    ->get()
                    ->toArray();

    	return view( 'posts.index', compact( 'posts', 'archives' ) );
    }

    //Show all posts
    public function show( Post $post )
    {

    	return view( 'posts.show', compact( 'post' ) );

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

    		'body' 	=> request( 'body' ),

            'user_id' => auth()->id() 
    	] );

    	//And re-direct to the home page.
    	return redirect( '/' );
    }

}
