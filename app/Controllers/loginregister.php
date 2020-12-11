<?php namespace App\Controllers;
use App\Models\clienteModel;
class loginregister extends BaseController
{
	public function login()
	{
		$request = \Config\Services::request();
		$nombre = $request->getPost('name');
		$apellido = $request->getPost('lastname');
		$contraseña = $request->getPost('password');
		$telefono = $request->getPost('phone');
		$comentario = $request->getPost('coment');
		$data = [
    	'nombre' => $nombre,
    	'apellidos'    => $apellido,
    	'contraseña' => $contraseña,
    	'telefono' => $telefono,
    	'comentario' => $comentario
		];
		$variable= new personasModel($db);
		$variable->insert($data);
		return view('Login');
	}
  public function register()
	{

		return view('Registrar');
	}
}
