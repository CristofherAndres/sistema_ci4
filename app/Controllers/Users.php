<?php namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Users extends Controller{

    public function index(){
        $usuarios = New UsuarioModel();
        $data['users'] = $usuarios->getUsers();
        return view('templates/header',$data)
        .view('users/users_view')
        .view('templates/footer');

    }

    public function create(){
        return view('templates/header')
        .view('users/users_form')
        .view('templates/footer');
    }

    public function store(){
        $usuarios = New UsuarioModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email' =>$this->request->getVar('email')
        ];

        $usuarios->insert($data);
        return 'Se inserto el dato';

    }


}