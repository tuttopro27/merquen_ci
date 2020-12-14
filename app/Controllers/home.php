<?php namespace App\Controllers;
use App\Models\PuntosModels;

class Home extends BaseController
{
	public function index()
	{
		
		$db= db_connect();		
		$PuntosModels= new PuntosModels($db);
		$data['puntos']=$PuntosModels->getNombrePos();
		
		echo view('templates/headers');
		echo view('templates/menu',$data);
		echo view('home');
		echo view('templates/footer');

	
	}
	
	//--------------------------------------------------------------------

}