<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
        $user = User::find(1);

        $editor = $user->hasRole('Editor');
        $canCreate = $user->can('CreatePages');
        $deleteContent = $user->can('DeleteContent');

		return View::make('hello');
	}

}
