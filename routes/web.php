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

//Route::get('/', function () {
//
//    $obj = new  \stdClass();
//    $obj->name ='samuel adel ';
//    $obj->id=54;
//    $obj->gender='male';
//
//    $data=[];
//    $data['id']=22;
//    $data['name']='samuel adel';
//    return view("welcome" , $data,compact('obj'));
//});
//
//Route::get('index','Front\FirstController@getIndex');
//
//Route::get('/samo', function () {
//    return "welcome samo ";
//});
//// route parameters
////required
//Route::get('/samo1/{id}', function ($id) {
//    return $id;
//});
//
////optional
//Route::get('/samo2/{id?}', function () {
//    return "samo";
//});
//
////route name
//Route::get('/show-number/{id}', function ($id) {
//    return $id;
//}) -> name('a');
//
//
//Route::get('/show-string/{id?}', function () {
//    return "samo";
//}) ->name('b');
//naming routing and namespace
//Route::namespace('Front')->group(function (){
////all route only access controller or methods in folder name Front
//    Route::get('users','UserController@showUserName');
//
//});
//Route::group(['prefix' => 'users','middleware'=>'auth'],function (){
//    //set of routes
//    Route::get('/',function (){
//        return "it is work done";
//    });
//    Route::get('show','UserController@showUserName');
//    Route::delete('delete','UserController@showUserName');
//    Route::get('edit','UserController@showUserName');
//    Route::put('update','UserController@showUserName');
//});
//middleware
//Route::get('check',function (){
//    return "middleware";
//})->middleware('auth');
//
//Route::group(['namespace'=>'Admin'],function (){
//
//Route::get('second','SecondController@showString')->middleware('auth');
//    Route::get('second0','SecondController@showString0');
//    Route::get('second1','SecondController@showString1');
//    Route::get('second2','SecondController@showString2');
//});
//Route::get('login',function (){
//    return "<h1> must be login to access this route </h1>";
//
//}) ->name('login');
//
//Route::resource('news','NewsController');
//
//Route::get('/landing',function (){
//    return view('landing');
//});
//Route::get('/about',function (){
//    return view('about');
//});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/',function (){
    return "home";
} );
ROute::get('/dashboard',function (){
    return "dashboard";
});
