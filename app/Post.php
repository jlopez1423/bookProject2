<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
	protected $fillable = [ 'title', 'body' ];

	//Get all comments associated with this post
	public function comments()
	{

		return $this->hasMany( Comment::class );
	
	}


	public function addComment( $body )
	{

		$this->comments()->create( compact( 'body' ) );
	
	}

}
