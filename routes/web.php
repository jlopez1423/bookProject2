<?php

Route::get( '/', 'PostsController@index' )->name( 'home' );


Route::get( '/posts/create', 'PostsController@create' ); 

Route::post( '/posts', 'PostsController@store' );

Route::get( '/posts/{post}',  'PostsController@show' );


Route::post( '/posts/{post}/comments', 'CommentsController@store' );




//Creating custom authentication:
Route::get( '/register', 'RegistrationController@create' );

Route::post( '/register', 'RegistrationController@store' );

Route::get( '/login', 'SessionsController@create' );



//For tasks such as these we would need a:

//Controller => PostsController

//Eloquent Model => Post

//Migration => create_posts_table


