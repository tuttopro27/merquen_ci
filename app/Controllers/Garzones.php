<?php
 namespace App\Controllers;
class Garzones extends BaseController
{
	public function index()
	{
		$data = [];
		echo view('templates/header',);
		echo view('dashboard');
		echo view('templates/footer');
    }
    public function ingresarGarzones()
    {
        
    }

	//--------------------------------------------------------------------

}