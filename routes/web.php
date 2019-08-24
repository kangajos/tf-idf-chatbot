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
    return redirect("login");
});
Route::get('/logout', function () {
	Session::flush();
	return redirect('/login');
});

Route::prefix('web')->group(function () {

    Route::get('dashboard', 
		'Dashboard@index'
	);
    Route::get('chat', 
		'Chat@index'
	);

    Route::get('chat/result',
        'Chat@getChat'
    )->name('get_chat');

    Route::post('/post_chat/', 
		'Chat@post_chat'
	);
});

Route::prefix('login')->group(function () {

    Route::get('/', 
		'Login@index'
	);
    Route::post('/post_login/', 
		'Login@post_login'
	);
});

Route::prefix('register')->group(function () {

    Route::get('/', 
		'Register@index'
	);
    Route::post('/post_register/', 
		'Register@post_register'
	);
});

// route admin //
Route::get('/admin', "AdminController@index");
Route::post('/admin/post', "AdminController@post")->name("post");
Route::post('/admin/update', "AdminController@update")->name("post_update");
Route::get('/admin/edit/{id}', "AdminController@edit")->name("post_edit");
Route::get('/admin/delete/{id}', "AdminController@delete")->name("post_delete");

Route::get('/admin/data-chat-bot', "AdminController@dataChatBot");

Route::get('/admin/user', "AdminController@user");
Route::post('/admin/user/post', "AdminController@user_post")->name("user_post");
Route::get('/admin/user/edit/{id}', "AdminController@user_edit")->name("user_edit");
Route::post('/admin/user/update', "AdminController@user_update")->name("user_update");
Route::post('/admin/user/delete/{id}', "AdminController@user_delete")->name("user_delete");


Route::get('/admin-login', "LoginAdminController@login");
Route::post('/admin-login/cek', "LoginAdminController@loginPost")->name("login_post");
Route::get('/admin-login/out', "LoginAdminController@out")->name("login_out");

// end route admin //
