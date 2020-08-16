<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/blog', 'PostsController@show')->name('blogHome');
Route::get('/mag', 'PostsController@index')->name('blogHome');
Route::get('/mag/show/{slug}', 'PostsController@show')->name('blogShow');

Route::get('/', function () {
    return view('admin.welcome');
});

Auth::routes();

//Front end  Home route
Route::get('/home', 'HomeController@index')->name('home');

// All  the routes related to the post model
Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/posts/allPosts', 'PostsController@getAll')->name('allPosts');
Route::get('/posts/create', 'PostsController@create')->name('addPost');
Route::post('/posts/store', 'PostsController@store')->name('storePost');
Route::get('/posts/edit/{id}', 'PostsController@edit');
Route::patch('/posts/update/{id}', 'PostsController@update');
Route::delete('/posts/delete/{id}', 'PostsController@destroy');

//All the rotes related to the Categories Model 
Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::get('/categories/create', 'CategoriesController@create')->name('addCategory');
Route::post('/categories/store', 'CategoriesController@store')->name('storeCategory');




