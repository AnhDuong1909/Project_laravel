<?php
use Carbon\Traits\Rounding;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[
    'as'=>'trangchu',
    'uses'=>'PageController@getIndex'
]);

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'UsersController@index');

    Route::resource('/bills', 'BillsController');
    Route::resource('/phone', 'PhoneController');
    Route::resource('/accessory', 'AccessoryController');
    Route::resource('/product_colors', 'Product_colorsController');
    Route::resource('/product_images', 'Product_imagesController');
    Route::resource('/colors', 'ColorsController');
    Route::resource('/images', 'ImagesController');
    Route::resource('/news', 'NewsController');
    Route::resource('/users','UsersController');
});
