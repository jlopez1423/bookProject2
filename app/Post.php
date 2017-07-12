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


	//Post belongs to a user, can now do $post->user->( user_field )
	public function user()
	{

		return $this->hasMany( User::class );
	
	}


	public function addComment( $body )
	{

		$this->comments()->create( compact( 'body' ) );
	
	}

}
