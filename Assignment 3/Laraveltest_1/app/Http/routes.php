<?php
Route::get('/', 'WelcomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);


Route::group(['middleware' => 'auth'] , function() {
		Route::get('home', function(){
		$user = Auth::user();
		return view('home', ['user' => $user]);
	});
	Route::post('home', 'CodeController@saveAndExec');
	Route::get('/codes', function(){
		$user = Auth::user();
		if ($user->role != 'Moderator') {
			return Redirect::to('/home');
		}

		$codes = App\Code::all();
		
		return view('codes', ['codes' => $codes]);
	});

	Route::get('/codes/{user_id}', function($user_id) {
		$user = Auth::user();
		if ($user->role != 'Moderator') {
			return Redirect::to('/home');
		}

		$code = App\Code::where('user_id', '=', $user_id)->first();
		return view('code', ['code' => $code->code]);
	});

    
});