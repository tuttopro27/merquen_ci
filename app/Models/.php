<?php namespace App\Controllers;

use App\Models\MesasModels;
use FFI\Exception;

class Mesas extends BaseController
{
	public function index()
	{ 
        $db= db_connect();		
		$mesasModels= new mesasModels($db);
		$data['mesas']=$mesasModels->getAllMesas();
		 echo '<pre>';
		 print_r($data);
		 echo '<pre>';
		//var_dump($data);
		$imagen= \Config\services::image()
        ->withFile('img/fondo/piso-madera.jpeg')
        ->reorient();
        return view('mesas');




    }
    
}






	//--------------------------------------------------------------------

