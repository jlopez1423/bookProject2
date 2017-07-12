<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	protected $fillable = [ 'body', 'post_id' ];

    // $comment->post
    public function post()
    {

    	return $this->belongsTo( Post::class ); 
    
    }

   // Comment belongs to a user
    public function user() //Now can do $comment->user->(user_field)
    {

    	return $this->belongsTo( User::class ); 
    
    }
}
