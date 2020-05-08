<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product\product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('image', function()
{
    $img = Image::make('C:\postgres+laravel\crud\public\foo.png')->resize(300, 200);
    $img->save('C:\postgres+laravel\crud\public\bar.jpg');

    // return $img->response('jpg');
    // $img->stream(); // <-- Key point

    //dd();
    // Storage::disk('local')->put('resizefoo.png', $img);
});
Route::post('login', 'ApiController@login');
Route::post('register', 'ApiController@register');
Route::post('refresh','ApiController@refresh');

Route::group(['middleware' => ['jwt.verify']], function() {

Route::get('getVideoDetails','ProductController@youtube');
    
Route::get('products', 'ProductController@index');
 
Route::get('products/{id}', 'ProductController@show');

Route::post('products', 'ProductController@store');

Route::put('products/{id}', 'ProductController@update');

Route::delete('products/{id}','ProductController@delete');
});