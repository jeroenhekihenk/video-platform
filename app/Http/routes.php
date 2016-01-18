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

// Homepagina
Route::get('/', 'HomeController@index');

// Ordering of Courses

/*
|------------------------------------|
| A product is in this case a course |
|------------------------------------|
*/

// Salespage for the product
Route::get('bestellen/{slug}', 'ProductController@getBestellen');
Route::post('bestellen/{slug}', 'ProductController@postBestellen');

// Thankyou page after placing an order
Route::get('bedankt', ['uses'=>'ProductController@getBestelBedankt', 'as'=>'bestel.bedankt']);

// Mollie webhook for products
// Necessary for handling with the status of the order at Mollie
// Read more at: https://www.mollie.com/en/docs/overview
Route::any('product/webhook', ['uses'=>'ProductWebhookController@productWebhook', 'as'=>'product.webhook']);


///////////////////
// Admin section //
///////////////////

Route::group(array('prefix'=>'jandje', 'namespace'=>'Admin', 'middleware'=>'is.admin'), function(){

	/*
	|---------------------------------------------------------------------------|
	| There is no admin route for creating, editing and deleting products yet 	|
	|---------------------------------------------------------------------------|
	*/

	// Dashboard
	Route::get('', 'AdminController@index');

	// List of all ebooks
	Route::resource('ebooks', 'AdminEbooksController', ['except'=>['setActive','setDisabled', 'restoreEbook', 'forceDelete']]);
	Route::get('ebook/{id}/activate', 'AdminEbooksController@setActive');
	Route::get('ebook/{id}/disable', 'AdminEbooksController@setDisabled');
	Route::get('ebook/{id}/restore', 'AdminEbooksController@restoreEbook');
	Route::delete('ebook/{id}/delete', 'AdminEbooksController@forceDelete');

	// List of all users to the platform
	Route::resource('users', 'AdminUserController');

	// Create and update a member manually
	Route::get('member/create', 'AdminUserController@createMember');
	Route::post('member/create', 'AdminUserController@postCreateMember');
	Route::get('member/{id}/edit', 'AdminUserController@getEditMember');
	Route::patch('member/{id}/update', 'AdminUserController@postEditMember');

	// List of members per course
	Route::get('cursus/{id}/cursisten', 'AdminCursistenController@index');

	// List of all courses
	Route::resource('cursus', 'AdminCursusController');

	// List of chapters with associated courses
	Route::resource('hoofdstuk', 'AdminHoofdstukController');

	// List of all videos added to courses
	// Can see per course and per chapter
	Route::resource('videos', 'AdminVideosController');

});

Route::group(array('prefix'=>'jandje', 'namespace'=>'Admin'), function(){

	// Login as admin
	Route::get('login', 'AdminController@getLogin');
	Route::post('login', 'AdminController@postLogin');

	// Logout as admin
	Route::get('logout', 'AdminController@getLogout');

	// Register as admin
	// Can only work once!
	// Route::get('registreren', 'AdminController@getRegister');
	// Route::post('registreren', 'AdminController@postRegister');

});

/////////////////////
// Members section //
/////////////////////

Route::group(array('namespace'=>'Member'), function(){

	// Login
	Route::get('login', 'MemberAuthController@getLogin');
	Route::post('login', 'MemberAuthController@postLogin');

	// Logout
	Route::get('logout', 'MemberAuthController@getLogout');

	// Password reset
	Route::controller('password', 'PasswordController');

});

Route::group(array('prefix'=>'member', 'namespace'=>'Member', 'middleware'=>'is.member'), function(){

	// Dashboard
	Route::get('', 'MemberIndexController@index');

	// Edit profile
	Route::get('{id}/profiel', 'MemberProfileController@editProfile');
	Route::post('{id}/profile/update', 'MemberProfileController@updateProfile');

	// Edit password
	Route::get('{id}/wachtwoord', 'MemberProfileController@editPassword');
	Route::patch('{id}/wachtwoord', 'MemberProfileController@updatePassword');

	// Neccesary for 1 particular course
	// Forget this
	Route::resource('benodigdheden', 'MemberBenodigdhedenController');

	// Resource route for all courses
	Route::resource('cursussen', 'MemberCursussenController');

	// Upgrade route (for course id 3)
	// Only works for course 3 at the moment
	Route::get('cursus/{id}/upgrade', 'MemberCursussenUpgradeController@create');
	Route::post('cursus/upgrade', 'MemberCursussenUpgradeController@store');

	// niet zeker of deze wordt gebrukt..
	Route::any('cursus/upgrade/webhook', 'MemberCursussenUpgradeController@mollieWebhook');

});

// Subscribe route for Webinar
Route::get('{webinarslug}', ['uses'=> 'WebinarController@getAanmelden','as'=>'webinar.aanmelden']);
Route::post('{webinarslug}', 'WebinarController@postAanmelden');

// Thanks for subscribing to the webinar
Route::get('{webinarslug}/bedankt', 'WebinarController@getAanmeldBedankt');

// Once the webinar is live, log in to the webinar here
Route::get('{webinarslug}/login', 'WebinarController@getLogin');
Route::post('{webinarslug}/login', 'WebinarController@postLogin');

// The webinar
Route::get('{webinarslug}/live', 'WebinarController@getWebinar');

// If webinar has a replay, log in to the replay of the webinar here
Route::get('{webinarslug}/herhaling/login', 'WebinarController@getHerhalingLogin');
Route::post('{webinarslug}/herhaling/login', 'WebinarController@postHerhalingLogin');

// The replay of the webinar
Route::get('{webinarslug}/herhaling', 'WebinarController@getHerhaling');