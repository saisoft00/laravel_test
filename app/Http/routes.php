<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*routing - controller - view - for bigger applications */
Route::get('/laravel_test','PagesController@welcome');
Route::get('/laravel_test/saida','PagesController@saida');


//routing - view  - smaller applications
 /*Route::get('/laravel_test', function ()
{
    return 'foo';
    //return View::make('welcome');
});*/


/* how i can connect with database */
Route::get('/laravel_test', function ()
{
   $posts=DB::table('posts')->get();
   return  $posts;
});


?>
