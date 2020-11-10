<?php namespace App\Controllers;
use App\Models\PuntosModels;

class Puntos extends BaseController
{
	public function index()
	{
		$pointmodels=new PuntosModels();
		$data['punto']=$pointmodels->findAll();
		var_dump($data);
		echo view('templates/headers');
		echo view('home',$data);
		echo view('templates/footer');		
	
	}
	
	//--------------------------------------------------------------------

}