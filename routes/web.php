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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::group(['middleware' => ['auth', 'role:admin']], function() {
      
    Route::resource('performance', 'PerformanceController');
    Route::resource('tracer', 'TracerController');
    Route::resource('overall', 'OverallController');
    Route::resource('executive', 'ExecutiveController');
    Route::resource('teamlead', 'TeamleadController');
    Route::resource('bank', 'BankController');
    Route::resource('fieldexecutive', 'FieldexecutiveController');
    Route::resource('events', 'EventController');
    Route::get('addeventurl', 'EventController@display');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/displaydata', 'EventController@show');
    Route::get('chart', 'ChartController@index');
    Route::get('chart1', 'Chart1Controller@index');
    Route::get('chart3', 'Chart3Controller@index');
    Route::get('executive', 'Chart3Controller@show');
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    
    Route::get('/company', 'HomeController@company')->name('company');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/customer', 'CustomerController@index');
    Route::get('/loaninfo', 'LoaninfoController@index');

    Route::get('/companyrules', 'CompanyrulesController@index');
    Route::get('/about', 'AboutController@index');
    Route::get('/customer/get_datatable', 'CustomerController@get_datatable');
    Route::get('/loaninfo/get_datatable', 'LoaninfoController@get_datatable');
    Route::get('email', 'MailController@email');
    Route::post('send', 'MailController@send');

    Route::get('/index', array('as' => 'index','uses' => 'AlbumsController@getList'));
    Route::get('/createalbum', array('as' => 'create_album_form','uses' => 'AlbumsController@getForm'));
    Route::post('/createalbum', array('as' => 'create_album','uses' => 'AlbumsController@postCreate'));
    Route::get('/deletealbum/{id}', array('as' => 'delete_album','uses' => 'AlbumsController@getDelete'));
    Route::get('/album/{id}', array('as' => 'show_album','uses' => 'AlbumsController@getAlbum'));
   
Route::get('/addimage/{id}', array('as' => 'add_image','uses' => 'ImageController@getForm'));
Route::post('/addimage', array('as' => 'add_image_to_album','uses' => 'ImageController@postAdd'));
Route::get('/deleteimage/{id}', array('as' => 'delete_image','uses' => 'ImageController@getDelete'));
Route::post('/moveimage', array('as' => 'move_image', 'uses' => 'ImageController@postMove'));

Route::get('importExport', 'MaatwebsiteDemoController@importExport');
Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');

Route::get('import', 'MaatwebsiteController@import');
Route::get('downloadEx/{type}', 'MaatwebsiteController@downloadEx');
Route::post('importEx', 'MaatwebsiteController@importEx');

});

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/customer/get_datatable', 'CustomerController@get_datatable');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('events', 'EventController');
Route::get('chart', 'ChartController@index');
    Route::get('chart1', 'Chart1Controller@index');
    Route::get('chart3', 'Chart3Controller@index');
    Route::resource('bank', 'BankController');
    Route::get('executive', 'Chart3Controller@show');
    Route::get('/company', 'HomeController@company')->name('company');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/companyrules', 'CompanyrulesController@index');
    Route::get('/about', 'AboutController@index');
    Route::get('email', 'MailController@email');
    Route::post('send', 'MailController@send');
    Route::get('/index', array('as' => 'index','uses' => 'AlbumsController@getList'));
    Route::get('/album/{id}', array('as' => 'show_album','uses' => 'AlbumsController@getAlbum'));