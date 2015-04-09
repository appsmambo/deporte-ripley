<?php

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@index'));

Route::post('/registro', array('as' => 'registro', 'uses' => 'HomeController@ajaxRegistro'));

/*
Route::post('/registro', function()
{
	$messages = array(
		'required'		=> 'El campo :attribute es obligatorio.',
		'email'			=> 'Ingrese su cuenta de email.',
		'string'		=> 'El campo solo permite letras.',
		'digits'		=> 'El campo solo permite números.',
		'email.unique'	=> 'El email :value ya está registrado en nuestro sistema.',
		'codigo.unique'	=> 'El código :value ya está registrado en nuestro sistema.',
		'codigo.digits'	=> 'El código debe tener :digits dígitos.',
	);
	$rules = array(
		'dni'		=> 'required|digits:8',
		'nombres'	=> 'required|string',
		'apellidos'	=> 'required|string',
		'telefono'	=> 'required',
		'email'		=> 'required|email|unique:registro',
		'distrito'	=> 'required',
		'codigo'	=> 'required|digits:13|unique:registro'
	);

	$validator = Validator::make(Input::all(), $rules, $messages);

	// check if the validator failed -----------------------
	if ($validator->fails()) {

		// get the error messages from the validator
		$messages = $validator->messages();

		// redirect our user back to the form with the errors from the validator
		return Redirect::to('/')
			->withErrors($validator)
			->withInput(Input::all());

	} else {
		$registro = new Registro;
		$registro->dni			= Input::get('dni');
		$registro->nombres		= Input::get('nombres');
		$registro->apellidos	= Input::get('apellidos');
		$registro->telefono		= Input::get('telefono');
		$registro->email		= Input::get('email');
		$registro->distrito		= Input::get('distrito');
		$registro->codigo		= Input::get('codigo');
		$registro->newsletter	= Input::get('newsletter');

		$registro->save();

		return Redirect::to('/');
	}
});

*/
