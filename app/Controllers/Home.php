<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    private $vagaModel;

    public function __construct()
    {
        $this->vagaModel = model('VagaModel');
        helper('url');
        helper('number');
    }

    public function index()
    {
        $dados['vagas'] = $this->vagaModel->getVagas();
        return view('site/home', $dados);
    }

    public function verVaga($id)
    {
        $vaga = $this->vagaModel->find($id);

        if (!$vaga) {
            return redirect()->to('/')->with('msg', 'Vaga não encontrada');
        }

        $data['vaga'] = $vaga;
        return view('site/ver_vaga', $data);
    }
}
