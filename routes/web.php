<?php
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

Route::get('hello/{name?}',function($name='handsome Hao'){
    return'Hello,'.$name;
});

Route::get('dashboard',function (){
    return 'dashboard';
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function (){
        return'admin dashboard';
    });
});


Route::get('say/{name?}',['as'=>'hello.index', function($name = 'Everybody'){
    return view('welcome');
}]);

Route::get('/',function(){
    returnredirect('welcome');
});
