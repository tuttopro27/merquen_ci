<?php namespace App\Controllers;
use App\Models\PuntosModels;

class Home extends BaseController
{
	public function index()
	{
		
		$db= db_connect();		
		$PuntosModels= new PuntosModels($db);
		$data['puntos']=$PuntosModels->getallPos();
		echo view('templates/headers');
		echo view('home',$data);
		echo view('templates/footer');

	
	}
	
	//--------------------------------------------------------------------

}