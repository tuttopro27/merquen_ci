<?php namespace App\Models;

use CodeIgniter\Model;

class PuntosModels extends Model
{
    protected $table      = 'puntos';
    protected $primaryKey = 'codigo';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'centro'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}