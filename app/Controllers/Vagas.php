<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Vagas extends BaseController
{
    private $vagaModel;
    private $cargoModel;

    public function __construct()
    {
        $this->vagaModel = model('VagaModel');
        $this->cargoModel = model('CargoModel');
        helper(['url', 'number']);
    }

    public function index()
    {
        $dados['vagas'] = $this->vagaModel->getVagas();
        $dados['active'] = 'vagas';
        return view('vagas', $dados);
    }

    public function adicionar()
    {
        $dados['msg'] = "";
        if ($this->request->is('post')) {
            $novaVaga['descricao'] = $this->request->getPost('descricao');
            $novaVaga['salario'] = $this->request->getPost('salario');
            $novaVaga['requisitos'] = $this->request->getPost('requisitos');
            $novaVaga['local'] = $this->request->getPost('local');
            $novaVaga['empresa'] = $this->request->getPost('empresa');
            $novaVaga['cargoid'] = $this->request->getPost('cargo');

            if ($this->vagaModel->insert($novaVaga)) {
                return redirect()->to(base_url('vagas'))->with('msg', 'Vaga adicionada com sucesso');
            } else {
                $dados['msg'] = "Erro ao adicionar vaga";
                $dados['erros'] = $this->vagaModel->errors();
            }
        }

        $dados['titulo'] = "Adicionar Nova Vaga";
        helper('form');
        $listaCargos = $this->cargoModel->getCargosToDropDown();
        $dados['comboCargo'] = form_dropdown(
            'cargo',
            $listaCargos,
            [],
            'class="form-control"'
        );
        return view('form_vaga', $dados);
    }

    public function editar($id)
    {
        $dados['msg'] = "";
        if ($this->request->is('post')) {
            $editarId = $this->request->getPost('id');
            $editarVaga['descricao'] = $this->request->getPost('descricao');
            $editarVaga['salario'] = $this->request->getPost('salario');
            $editarVaga['requisitos'] = $this->request->getPost('requisitos');
            $editarVaga['local'] = $this->request->getPost('local');
            $editarVaga['empresa'] = $this->request->getPost('empresa');
            $editarVaga['cargoid'] = $this->request->getPost('cargo');

            if ($this->vagaModel->update($editarId, $editarVaga)) {
                return redirect()->to(base_url('vagas'))->with('msg', 'Vaga editada com sucesso');
            } else {
                $dados['msg'] = "Erro ao editar vaga";
                $dados['erros'] = $this->vagaModel->errors();
            }
        }

        $dados['vaga'] = $this->vagaModel->find($id);
        $dados['titulo'] = "Editar Vaga";
        helper('form');
        $listaCargos = $this->cargoModel->getCargosToDropDown();
        $dados['comboCargo'] = form_dropdown(
            'cargo',
            $listaCargos,
            $dados['vaga']->cargoid,
            'class="form-control"'
        );
        return view('form_vaga', $dados);
    }

    public function excluir($id)
    {
        if ($this->vagaModel->delete($id)) {
            $this->session->setFlashData('msg', 'Vaga excluída com sucesso');
        } else {
            $this->session->setFlashData('msg', 'Erro ao excluir vaga');
        }

        return redirect()->to(base_url('vagas'));
    }

    public function verVaga($id)
    {
        $vaga = $this->vagaModel->getVagaById($id);

        return view('ver_vaga', ['vaga' => $vaga]);
    }
}
