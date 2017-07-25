<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Post extends Model
{
    //
	protected $fillable = [ 'title', 'body', 'user_id' ];

	//Get all comments associated with this post
	public function comments()
	{

		return $this->hasMany( Comment::class );
	
	}


	//Post belongs to a user, can now do $post->user->( user_field )
	public function user()
	{

		return $this->belongsTo( User::class );
	
	}


	public function addComment( $body )
	{

		$this->comments()->create( compact( 'body' ) );
	
	}

	public function scopeFilter( $query, $filters )
	{

		if( $month = $filters[ 'month' ] )
		{

			$query->whereMonth( 'created_at', Carbon::parse($month)->month );

		}

		if( $year = $filters[ 'year' ] )
		{

			$query->whereYear( 'created_at', $year );

		}



	}

}
