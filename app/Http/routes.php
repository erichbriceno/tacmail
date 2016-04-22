<?php






Route::get('/', [
	'as'	=> 'mails.control',
	'uses'	=> 'MailsController@control'
]);

Route::get('/upload', [
		'as'	=> 'mails.upload',
		'uses'	=> 'MailsController@upload'
]);

Route::get('/querySuitcases', [
    'as'	=> 'mails.querySuitcases',
    'uses'	=> 'MailsController@querySuitcases'
]);

Route::get('/queryDocs', [
    'as'	=> 'mails.queryDocs',
    'uses'	=> 'MailsController@queryDocs'
]);



Route::get('/mail/{id}', [

		'as'	=> 'mails.details',
		'uses'	=> 'MailsController@details'

]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
