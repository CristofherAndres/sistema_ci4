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


}