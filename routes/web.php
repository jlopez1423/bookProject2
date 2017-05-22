<?php

Route::get( '/', 'PostsController@index' );


Route::get( '/posts/create', 'PostsController@create' ); 

Route::post( '/posts', 'PostsController@store' );

// Route::get( '/posts/{post}',  'PostsController@show' );

//For tasks such as these we would need a:

//Controller => PostsController

//Eloquent Model => Post

//Migration => create_posts_table


