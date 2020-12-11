<?php namespace App\Controllers;

use App\Models\personasModel;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function confirmacion(){

		$request = \Config\Services::request();
		$nombre = $request->getPost('first_name');
		$apellido = $request->getPost('last_name');
		$correo = $request->getPost('email');
		$telefono = $request->getPost('phone');
		$password = $request->getPost('password');
		$data = [
    	'nombre' => $nombre,
    	'apellido'    => $apellido,
    	'correo' => $correo,
    	'telefono' => $telefono,
    	'contrasenia' => $password
		];

		$variable= new personasModel($db);
		$variable->insert($data);

		return view('head').view('success').view('script');
	}

	public function tabla()
	{
		$variable= new personasModel($db);
		$variableIndice['cliente'] = $variable->findAll();
		return view('tabla',$variableIndice);
	}
	//Actualizar
	public function actualizar()
	{
		$variable= new personasModel($db);

		$data = [
    	'nombre' => "Diego",
    	'apellido'    => "Maradona",
    	'correo' => "diego@gmail.com",
    	'telefono' => "124234",
    	'contrasenia' => "diegito"
		];

		$variable->update(1,$data);
		$variableIndice['usuarios'] = $variable->findAll();
		return view('head').view('tabla',$variableIndice).view('script');
	}

	//Eliminar
	public function eliminar()
	{
		$variable= new personasModel($db);

		$variable->where('id',2)->delete();

		$variableIndice['usuarios'] = $variable->withDeleted()->findAll();
		return view('head').view('tabla',$variableIndice).view('script');
	}

	//Inner join
	public function consultaInner()
	{

		$db      = \Config\Database::connect();
		$builder = $db->table('personas');
		$builder->select('*');
		$builder->join('comentarios','comentarios.idUsuario = personas.id');
		$variableQuery = $builder->get();

		$variableIndice['registro'] = $variableQuery->getResultArray();

		return view('head').view('tablaJoin',$variableIndice).view('script');
	}

	public function register()
	{
		$variable= new personasModel($db);

		$variable->where('id',2)->delete();

		$variableIndice['usuarios'] = $variable->withDeleted()->findAll();
		return view('head').view('tabla',$variableIndice).view('script');
	}


	public function confirmacion2(){
		$data = [
    	'nombre' => 'miguel',
    	'apellidos'    => 'perez',
    	'contraseña' => '123456',
    	'telefono' => '123456789',
    	'comentario' => 'mansjaksa'
		];

		$variable= new personasModel($db);
		$variable->insert($data);

		return view('Login');
	}

	public function contacto(){
		return view('header').view('nav').view('contacto').view('footer');
	}
	public function galeria(){
		return view('header').view('nav').view('galeriaTrabajos').view('footer');
	}
	public function tienda(){
		return view('header').view('nav').view('Tienda').view('footer');
	}


}
