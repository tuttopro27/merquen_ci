<?php namespace App\Controllers;

use App\Models\MesasModels;
use FFI\Exception;

class Mesas extends BaseController
{
	public function index()
	{     
        $db= db_connect();		
        $mesasModels= new mesasModels($db);
        $data['mesas']=$mesasModels->getAllTablesBar();
        /*echo '<pre>';
		print_r($data);
        echo '<pre>';
        
        //var_dump($data);*/
                    
        echo view('templates/headers');
        echo view('templates/menu');
        echo view('mesas',$data);
        echo view('templates/footer'); 
    }
}

		
    







	//--------------------------------------------------------------------

