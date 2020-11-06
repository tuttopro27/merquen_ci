<?php namespace App\Controllers;
use App\Models\UsuarioModels;

class Usuario extends BaseController
{
	public function index()
	{
		
        $usuarioModelo=new UsuarioModels($db);
        $data['usuarios']=$usuarioModelo->findAll();
        //var_dump($data);
        helper(['form']);
        
		if ($this->request->getMethod() == 'post') {
		
			$rules = [
				'nombre' => 'required|check',
                'password' => 'required|min_length[3]|max_length[255]|validateUser[nombre,password]',
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

				$user = $model->where('nombre', $this->request->getVar('nombre'))
											->first();

				$this->setUserSession($user);
				//$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('home');

			}
		}
		echo view('templates/headers');
		echo view('login',$data);
		echo view('templates/footer');
	}
    private function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'nombre' => $user['nombre'],
			'isLoggedIn' => true,
		];
		session()->set($data);
		return true;
    }
    public function logout(){
		session()->destroy();
		return redirect()->to('/');
    }
    public function validacombo($selectedvalue)
    {
        if($selectedvalue== 'none')
        {
            $this->form_validation->set_message("select_validate", "seleccione una opcion");
            return false;  
        }
    }
}