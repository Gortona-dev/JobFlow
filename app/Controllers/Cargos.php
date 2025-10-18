<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Cargos extends BaseController
{
    private $cargoModel;

    public function __construct()
    {
        helper('url');
        $this->cargoModel = model('CargoModel');
    }

    public function index()
    {
        $dados['msg'] = $this->session->getFlashData('msg');
        $dados['cargos'] = $this->cargoModel->findAll();
        $dados['active'] = 'cargos';
        return view('cargos', $dados);
    }

    public function adicionar() 
    {
        $dados['msg'] = "";
        if($this->request->is('post')) {
            $novoCargo['nomecargo'] = $this->request->getPost('nomecargo');

            if($this->cargoModel->insert($novoCargo)) {
                return redirect()->to(base_url('cargos'))->with('msg', 'Cargo adicionado com sucesso');
            } else {
                $dados['msg'] = "Erro ao adicionar cargo";
                $dados['erros'] = $this->cargoModel->errors();
            }
        }
        $dados['titulo'] = "Adicionar Novo Cargo";
        return view('form_cargo', $dados);
    }

    public function editar($id)
    {
        $dados['msg'] = "";
        if($this->request->is('post')) {
            $editarId = $this->request->getPost('id');
            $editarCargo['nomecargo'] = $this->request->getPost('nomecargo');

            if($this->cargoModel->update($editarId, $editarCargo)) {
                return redirect()->to(base_url('cargos'))->with('msg', 'Cargo editado com sucesso');
            } else {
                $dados['msg'] = "Erro ao editar cargo";
                $dados['erros'] = $this->cargoModel->errors();
            }
        }
        $dados['cargo'] = $this->cargoModel->find($id);
        $dados['titulo'] = "Editar Cargo";
        return view('form_cargo', $dados);
    }

    public function excluir($id)
    {
        if($this->cargoModel->delete($id)) {
            $this->session->setFlashData('msg', 'Cargo excluído com sucesso');
        } else {
            $this->session->setFlashData('msg', 'Erro ao excluir cargo');
        }

        return redirect()->to(base_url('cargos'));
    }
}
