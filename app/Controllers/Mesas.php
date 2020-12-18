<?php

namespace App\Controllers;

use App\Models\MesasModels;
use App\Models\PuntosModels;
use FFI\Exception;

class mesas extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $mesasModels = new mesasModels($db);
        $puntosModels = new puntosModels($db);
        $data['mesas'] = $mesasModels->getAllTablesBar();
        $puntos['puntos'] = $puntosModels->getNombrePos();
        echo view('templates/headers');
        echo view('templates/menu',$puntos);
        echo view('mesas', $data);
        echo view('templates/footer');
    }
    public function mesasRestaurante(){
        $db = db_connect();
        $mesasModels = new mesasModels($db);
        $puntosModels = new puntosModels($db);
        $data['mesas'] = $mesasModels->getAllTablesRes();
        $puntos['puntos'] = $puntosModels->getNombrePos();
        echo view('templates/headers');
        echo view('templates/menu',$puntos);
        echo view('mesasRestaurante',$data);
        echo view('templates/footer');
    }
}



		
