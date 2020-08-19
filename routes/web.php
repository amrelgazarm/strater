<?php






/*
|--------------------------------------------------------------------------
after I user command for login and register View
|--------------------------------------------------------------------------

|
*/






Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//


Route::get('/',function(){

    return "Home Page ";
});



Route::get('/dashboard',function(){

    return "dashboard";
});


























/*
|--------------------------------------------------------------------------
|test from me
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/amro', function () {
//    return "this is first route to me without paramter";
//});
//
//
//
//Route::get('/amro2/{id}', function ($id) {
//    return $id;
//})->name('a');
//
//
//Route::get('/amro3/{id?}', function () {
//    return  "amro";
//})->name('b');
//
//
//
//
//Route::group([],function (){
//
//
//    Route::get('fronto','front\UserControler@showAdminName');
//
//
//});
//
//
//Route::group(['namespace'=>'admin'],function(){
//
//    Route::get('fristo','SecondCon@a')->middleware('auth');
//});
//
//Route::get('login',function (){
//
//    return 'there is not login page until now ';
//})->name('login');
//
//
//
//
//Route::Resource('news','NewsController');
//
//
//Route::get('index','front\UserControler@getindex');
//
//
//Route::get('/landing',function (){
//
//    return view('landing');
//});
//
//Route::get('/about',function (){
//
//    return view('about');
//});
