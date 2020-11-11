<?php
namespace App\Validation;
use App\Models\UsuarioModels;


class UserRules
{
          public function validaUsuario(string $str, string $fields, array $data){
          $model = new UsuarioModels();
          
          $user = $model->where('nombre', $data['nombre'])
                        ->first();
      
          if(!$user)
            return false;
      
          return password_verify($data['password'], $user['password']);
        }
}
?>