<?php

class HomeController extends BaseController {

	public function index()
	{
		echo Request::getClientIp();exit;
		$departamentos = UbigeoDepartamento::all()->toArray();
		return View::make('index')->with('departamentos', $departamentos);
	}
	
	public function ajaxProvincias()
	{
		$departamento = Input::get('id', 15);
		$provincias = UbigeoProvincia::where('id_departamento', $departamento)->get();
		return $provincias->toJson();
	}
	public function ajaxDistritos()
	{
		$provincia = Input::get('id', 127);
		$distritos = UbigeoDistrito::where('id_provincia', $provincia)->get();
		return $distritos->toJson();
	}
	
	public function ajaxRegistro()
	{
		$messages = array(
			'required'		=> 'El campo :attribute es obligatorio.',
			'email'			=> 'Ingrese su cuenta de email.',
			'string'		=> 'El campo solo permite letras.',
			'digits'		=> 'El campo solo permite números.',
			'dni.unique'	=> 'El dni :value ya está registrado en nuestro sistema.',
			'email.unique'	=> 'El email :value ya está registrado en nuestro sistema.',
			'codigo.unique'	=> 'El código :value ya está registrado en nuestro sistema.',
			'codigo.digits'	=> 'El código debe tener :digits dígitos.',
		);
		$rules = array(
			'dni'		=> 'required|digits:8|unique:registro',
			'nombres'	=> 'required',
			'apellidos'	=> 'required',
			'telefono'	=> 'required',
			'email'		=> 'required|email|unique:registro',
			'distrito'	=> 'required',
			'codigo'	=> 'required|digits:13|unique:registro'
		);

		$validator = Validator::make(Input::all(), $rules, $messages);

		// check if the validator failed -----------------------
		if ($validator->fails()) {
			$messages = $validator->messages();
			$respuesta = array('success' => 'error', 'messages' => $messages);
			return Response::json($respuesta, 200);

			/*return Redirect::to('/')
				->withErrors($validator)
				->withInput(Input::all());*/

		} else {
			$registro = new Registro;
			$registro->dni			= Input::get('dni');
			$registro->nombres		= ucwords(Input::get('nombres'));
			$registro->apellidos	= ucwords(Input::get('apellidos'));
			$registro->telefono		= Input::get('telefono');
			$registro->email		= Input::get('email');
			$registro->distrito		= Input::get('distrito');
			$registro->codigo		= Input::get('codigo');
			$registro->newsletter	= Input::get('newsletter');
			$registro->ip			= Request::getClientIp();

			$registro->save();

			$respuesta = array('success' => 'ok', 'last_insert_id' => $registro->id);
			return Response::json($respuesta, 200);
			//return Redirect::to('/');
		}
	}

}
