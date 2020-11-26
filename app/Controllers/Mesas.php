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
        $ejex=0;
        $ejey=0;
        try
        {
           $imagen= \Config\services::image()
            ->withFile('img/fondo/piso-madera.jpeg')
            ->reorient();
            //processing images
            
           
          
        }catch (Exception $e)
        {
                echo $e->getMessage();
        }
		echo view('mesas',$data);
        }
        
    
    }

		
    







	//--------------------------------------------------------------------

