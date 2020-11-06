<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModels extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'password'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;



  
    protected function beforeInsert(array $data){
      $data = $this->passwordHash($data);
      $data['data']['created_at'] = date('Y-m-d H:i:s');
  
      return $data;
    }
    protected function beforeUpdate(array $data){
      $data = $this->passwordHash($data);
      $data['data']['updated_at'] = date('Y-m-d H:i:s');
      return $data;
    }
    protected function passwordHash(array $data){
      if(isset($data['data']['password']))
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
  
      return $data;
    }
}