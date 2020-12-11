<?php namespace App\Controllers;
use App\Models\personasModel;
class admin extends BaseController
{
	public function acceder()
	{
		return view('header2').view('nav').view('accesoAdmin').view('footer');
	}
  public function borrar()
	{
		$variable= new personasModel($db);
		$variable->where('id',7)->delete();
		$variableIndice['clasificacion'] = $variable->withDeleted()->findAll();
		return view('header2').view('nav').view('borrarAdmin').view('tabla',$variableIndice).view('footer');
	}
  public function crear()
	{
		$variable= new personasModel($db);
		$data = ['nombre' => "Paisajes"];
		$variable->insert($data);
		$variableIndice['clasificacion'] = $variable->withDeleted()->findAll();
		return view('header2').view('nav').view('crearAdmin').view('tabla',$variableIndice).view('footer');
	}
  public function modificar()
	{
		$variable= new personasModel($db);
		$data = [
    	'nombre' => "Retratos"
		];
		$variable->update(1,$data);
		$variableIndice['clasificacion'] = $variable->withDeleted()->findAll();
		return view('header2').view('nav').view('modificarAdmin').view('tabla',$variableIndice).view('footer');
	}


}
