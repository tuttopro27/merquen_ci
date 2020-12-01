<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class MesasModels extends Model

{
    

    public function __construct(ConnectionInterface &$db)
    {
        $this->db =& $db;
        
    }
    
    protected $table      = 'mesas';
    protected $primaryKey = 'id_mesas';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_puntos','id_garzon','numero_mesa', 'forma', 'alto', 'ancho'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

     function getAllTablesBar(){

        return $this->db->table('mesas')
            ->select('id_puntos, numero_Mesa, forma, personas, alto, ancho')
            ->where('`id_puntos` in (select `id_puntos` from puntos where id_puntos =1 )')
            ->get()
            ->getResult();
    }
    public function getAllTablesRes()
    {

    }
}
