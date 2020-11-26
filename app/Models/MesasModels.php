<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class MesasModels extends Model

{
    protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db =& $db;
    }

    protected $table      = 'mesas';
    protected $primaryKey = 'id_mesas';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_puntos', 'id_garzon', 'numero_mesa', 'forma', 'eje_x', 'eje_y'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getAllMesas()
    {
        return $this->db->table('mesas')->get()->getResult();
    }
 
}