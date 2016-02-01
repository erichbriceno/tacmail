<?php






Route::get('/', [

	'as'	=> 'mails.control',
	'uses'	=> 'MailsController@control'

]);

Route::get('/close', [

		'as'	=> 'mails.closed',
		'uses'	=> 'MailsController@closed'

]);

Route::get('/mail/{id}', [

		'as'	=> 'mails.details',
		'uses'	=> 'MailsController@details'

]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
