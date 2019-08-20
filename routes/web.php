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

Route::get('/abc', function () {
    return view('test');
});

//Route::get('/login', 'LoginController@index');
Route::get('/login', ['as'=>'login.index','uses'=>'LoginController@index']);
Route::get('/forget', ['as'=>'login.forget','uses'=>'LoginController@forget']);
Route::post('/forget', ['uses'=>'LoginController@update']);
Route::post('/login', ['uses'=>'LoginController@verify']);
Route::get('/signup', ['as'=>'login.index2','uses'=>'LoginController@index2']);
Route::post('/signup', 'HomeController@create');

Route::group(['middleware'=>['sess']], function(){

	Route::get('/home', 'HomeController@index')->name('home.index');
	Route::get('/home/profile/{sid}', 'HomeController@profile')->name('home.profile');
	/*Route::get('/home/profile/support/{sid}', 'HomeController@profile2')->name('home.profile2');*/
	Route::post('/home/profile/{sid}', 'HomeController@active');
	Route::get('/home/profile/user/{sid}', 'HomeController@user')->name('home.user');
	Route::post('/home/profile/user/{sid}', 'HomeController@userUpdate');
	Route::get('/home/profile/notifications/{sid}', 'HomeController@notification')->name('home.notifications');
	Route::get('/home/profile/notifications/{sid}/{sid2}', 'HomeController@notification2')->name('home.notifications2');
	Route::post('/home/profile/notification/{sid}', 'HomeController@notificationUpdate');
	Route::get('/home/profile/job/{sid}', 'HomeController@tables')->name('home.tables');
	Route::post('/home/profile/job/{sid}', 'HomeController@jobPost');
	Route::get('/home/add', 'HomeController@add')->name('home.add');
	Route::post('/home/add', 'HomeController@create');
	Route::get('/home/delete/{sid}', 'HomeController@delete')->name('home.delete');
	Route::post('/home/delete/{sid}', 'HomeController@destroy');
	Route::get('/home/stdList', 'HomeController@show')->name('home.stdlist');
	Route::post('/home/stdList', 'HomeController@search');
	Route::get('/home/edit/{sid}', 'HomeController@edit')->name('home.edit');
	Route::post('/home/edit/{sid}', 'HomeController@update');
	Route::get('/home/details/{sid}', 'HomeController@details')->name('home.details');
	Route::get('/home/freelancers/{sid}', 'HomeController@freelancers')->name('home.freelancers');
	Route::get('/home/search', 'HomeController@searchLaunch')->name('home.search');
	Route::post('/home/search', 'HomeController@search');
	Route::get('/home/freelancers/profile/{sid}', 'HomeController@freelancersPrf')->name('home.freelancersPrf');
	Route::post('/home/freelancers/profile/{sid}', 'HomeController@freelancersPrfSave');

	Route::group(['middleware'=>['type']], function(){
	
	});
});

	Route::get('/emp', 'EmpController@index')->name('emp.index');
	Route::get('/emp/profile', 'EmpController@profile')->name('emp.profile');
	Route::post('/emp/profile', 'EmpController@upload');
	Route::get('/emp/add', 'EmpController@add')->name('emp.add');
	Route::post('/emp/add', 'EmpController@create');
	Route::get('/emp/delete/{sid}', 'EmpController@delete')->name('emp.delete');
	Route::post('/emp/delete/{sid}', 'EmpController@destroy');
	Route::get('/emp/stdList', 'EmpController@show')->name('emp.stdlist');
	Route::get('/emp/edit/{sid}', 'EmpController@edit')->name('emp.edit');
	Route::post('/emp/edit/{sid}', 'EmpController@update');
	Route::get('/emp/details/{sid}', 'EmpController@details')->name('emp.details');


Route::get('/logout', 'logoutController@index');

//Route::resource('accounts', 'AccountController');




