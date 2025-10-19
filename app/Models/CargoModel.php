<?php

namespace App\Models;

use CodeIgniter\Model;

class CargoModel extends Model
{
    protected $table            = 'cargos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nomecargo'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nomecargo' => 'required'
    ];
    protected $validationMessages = [
        'nomecargo' => [
            'required' => 'O nome do cargo é obrigatório.'
        ]
    ];

    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getCargosToDropDown()
    {
        $cargos = $this->findAll(); //retorna um array de objs
        $lista = [];
        foreach ($cargos as $cargo) {
            $lista[$cargo->id] = $cargo->nomecargo;
        }
        return $lista;
    }
}
