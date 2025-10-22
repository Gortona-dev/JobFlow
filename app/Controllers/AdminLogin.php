<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminLogin extends BaseController
{
    public function index()
    {
        helper('url');
        return view('admin/admin_login');
    }

    public function login()
    {

        $adminUser = 'admin';
        $adminPass = 'admin123';


        $user = $this->request->getPost('user');
        $pass = $this->request->getPost('pass');

        if ($user === $adminUser && $pass === $adminPass) {
            session()->set('isAdmin', true);
            return redirect()->to(base_url('vagas'))->with('msg', 'Bem vindo');
        }

        return redirect()->back()->with('msg', 'Credenciais inválidas');
    }

    public function logout()
    {
        return redirect()->to(base_url('/'));
    }
}
