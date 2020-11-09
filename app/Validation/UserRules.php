<?php
namespace App\Validation;

use App\Controllers\Usuario;
use App\Models\UsuarioModels;


class UserRules
{
            public function validateUser(string $str, string $fields, array $data){
          $model = new UsuarioModels();
          $user = $model->where('nombre', $data['nombre'])
                        ->first();
      
          if(!$user)
            return false;
      
          return password_verify($data['password'], $user['password']);
        }
}
?>