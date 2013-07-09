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


/**
 * Contact Form Submission
 */
Route::post('contact', array(
	'as' => 'contact.submit',
	function()
	{
		Mail::send('emails.contact.system', Input::all(), function($message)
		{
		    $message->to('sales@mycallcloud.com', 'MyCallCloud Sales')->subject('[MyCallCloud.com Contact Form]');
		});
	}
));