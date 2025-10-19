<?php

namespace App\Models;

use CodeIgniter\Model;

class VagaModel extends Model
{
    protected $table            = 'vagas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['descricao', 'salario', 'requisitos', 'local', 'empresa', 'cargoid'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'descricao' => 'required|min_length[3]',
        'salario'   => 'required|decimal|greater_than[0]'
    ];
    protected $validationMessages = [
        'descricao' => [
            'min_length' => 'A descrição deve ter pelo menos 3 caracteres',
            'required'   => 'O campo descrição é obrigatório'
        ],
        'salario' => [
            'required' => 'O campo salário é obrigatório'
        ]
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getVagas()
    {
        return $this->select('vagas.*, c.nomecargo')
            ->join('cargos c', 'vagas.cargoid = c.id')
            ->orderBy('vagas.id', 'ASC')
            ->get()
            ->getResult();
    }

    public function getVagaById($id)
    {
        return $this->select('vagas.*, c.nomecargo')
            ->join('cargos c', 'vagas.cargoid = c.id')
            ->where('vagas.id', $id)
            ->get()
            ->getRow();
    }
}
