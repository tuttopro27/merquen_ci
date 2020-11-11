<?php

namespace App\Controllers;

use App\Models\UsuarioModels;

class Usuario extends BaseController
{
	public function index()
	{
		$usuarioModelo=new UsuarioModels();
        $data['usuarios']=$usuarioModelo->findAll();
        //var_dump($data);
		helper(['form']);
		//var_dump($data);
		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
			    'nombre' => 'required|is_not_unique[usuario.nombre]',
				'password' => 'required|min_length[3]|max_length[255]|validaUsuario[nombre,password]',
	];
			$errors = [
				'password' => [
					'validateUser' => 'nombre o password no coinciden'
				]
			];
			if (! $this->validate($rules, $errors)) {
								$data['validation'] = $this->validator;
			}else{
				$model = new UsuarioModels();
				
				$user = $model->where('nombre', $this->request->getVar('dllnombre'))
											->first();

				$this->setUserSession($user);
				//$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('/home');
			}
		}
		echo view('templates/headers');
		echo view('login',$data);
		echo view('templates/footer');
	}
	private function setUserSession($user){
		$data = [
			'nombre' => $user['nombre'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}
	public function logout()
	{
		session()->destroy();
		return redirect()->to('/');
	}
	
	
	public function validaselect()
	{
		$opcion = $this->input->post("ddlnombre");
		if(is_null($opcion))
		{
			$opcion = array();
		}
		$nombreGroup = implode(',', $opcion);
	
		if($nombreGroup != '') {
			return true;
		} else {
			$this->form_validation->set_message('select_validate', 'seleccione un elemento');
			return false;
		}
	}
}


