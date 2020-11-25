<?php namespace App\Controllers;

use App\Models\MesasModels;


class Mesas extends BaseController
{
	public function index()
	{
		
		$db= db_connect();		
		$mesasModels= new MesasModels($db);
		$data['mesas']=$mesasModels->getAllMesas();
		// echo '<pre>';
		// print_r($data);
		// echo '<pre>';
		//var_dump($data);
		echo view('templates/headers');
		echo view('mesas',$data);
		echo view('templates/footer');

	
	}
	
	//--------------------------------------------------------------------

}