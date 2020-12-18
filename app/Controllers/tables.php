<?php

namespace App\Controllers;
use App\Models\PuntosModels;


class tables extends BaseController{
    public function index()
    {
        $db= db_connect();		
		$PuntosModels= new PuntosModels($db);
        $data['puntos']=$PuntosModels->getNombrePos();
        // $tablesModeñs= new TablesModels($db);
        // $datatables['tables']
        echo view('templates/headers');
        echo view('templates/menu',$data);
        echo view('calculadora');
        echo view('templates/footer');
    }
    public function getStatusTableBar(){
        $db= db_connect();		
		$PosModels= new PuntosModels($db);
        $data['puntos']=$PosModels->getnamePos();

        echo view('templates/headers');
        echo view('templates/menu',$data);
        echo view('MesasPuntos',$data);
        echo view('templates/footer');




    }
}