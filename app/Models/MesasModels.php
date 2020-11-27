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
    public function getAllTablesBar(){
        $this->db->table->select('p.nombre','m.numero_Mesa', 'm.forma', 'm.persona', 'm.alto', 'm.ancho')
         ->from('mesas')
         ->where('m.id_puntos')
         ->join('puntos','id_puntos= m.id_puntos');
         
         
    }
}
