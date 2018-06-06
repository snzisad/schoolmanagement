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
    return redirect('/login');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addStudent','StudentController@AddStudentView');

Route::post('/addStudent',[
	'uses'=>'StudentController@AddStudent',
	'as'=>'addStudent'
]);

Route::post('/customlogin',[
	'uses'=>'Auth\CustomLoginController@login',
	'as'=>'custom.login'
]);

Route::get('/teacher',function(){
	return "Hello Teacher";
})->middleware('teacher');


Route::middleware('admin')->group(function (){
	Route::get('/dashboard','AdminController@viewDashboard');
	
	Route::get('/institution','InstitutionController@InstitutionDetailsView');

	Route::post('/editinstitution',[
		'uses'=>'InstitutionController@editInstitutionDetails',
		'as'=> 'edit.institution'
	]);

	Route::get('/noticelist','NoticeController@viewNoticeList');

	Route::post('/addnotice',[
		'uses'=>'NoticeController@addNewNotice',
		'as'=> 'addnotice'
	]);

	Route::get('/noticelist/makecurrent/{id}','NoticeController@makeCurrentNotice');
	Route::get('/noticelist/remove/{id}','NoticeController@removeNotice');

	Route::post('/editnotice',[
		'uses'=>'NoticeController@editNotice',
		'as'=> 'editnotice'
	]);

	Route::post('/addcatagory',[
		'uses'=>'AdminController@addCatagory',
		'as'=> 'addcatagory'
	]);

	Route::get('/feecollection','AdminController@feeCollectionView');

	Route::post('/feecollection',[
		'uses'=>'AdminController@collectFee',
		'as'=> 'feecollection'
	]);

});
