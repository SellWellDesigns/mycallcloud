<?php

/**
 * Home Page
 */
Route::get('/', array(
	'as' => 'home',
	function()
	{
		return View::make('index');
	}
));
