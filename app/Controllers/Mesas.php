<?php

namespace App\Controllers;

use App\Models\MesasModels;
use FFI\Exception;

class Mesas extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $mesasModels = new mesasModels($db);
        $data['mesas'] = $mesasModels->getAllTablesBar();
        echo view('templates/headers');
        echo view('templates/menu');
        echo view('mesas', $data);
        echo view('templates/footer');
    }
    public function mesasRestaurante(){
        $db = db_connect();
        $mesasModels = new mesasModels($db);
        $data['mesas'] = $mesasModels->getAllTablesRes();
        
        echo view('templates/headers');
        echo view('templates/menu');
        echo view('mesasRestaurante',$data);
        echo view('templates/footer');
    }
}



		
