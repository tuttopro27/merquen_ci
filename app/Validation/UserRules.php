<?php
namespace App\Validation;
use App\Models\UsuarioModels;
use CodeIgniter\Database\ConnectionInterface;
class UserRules
{
    protected $db;

    public function validaUsuario(string $str, string $fields, array $data){
    // var_dump($str);
    // var_dump($fields);
    // var_dump($data);
    
      $model = new UsuarioModels($db);

    $user = $model->where('nombre', $data['nombre'])
                  ->first();
    //var_dump($model);
    //var_dump($user);
    //die;
    if(!$user)
      return false;
    $pas= password_verify($data['password'], $user['password']);
    //var_dump($pas);
    return $pas;
    
  

  }
}
