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
        return redirect()->to(base_url('/usuarios'));

    }

    public function delete($id = null){
        $usuarios = New UsuarioModel();
        $data['user'] = $usuarios->where('id', $id)->delete($id);
        return redirect()->to(base_url('/usuarios'));
    }

    public function update_form($id){
        $usuarios = New UsuarioModel();
        $data['user'] = $usuarios->where('id',$id)->first();
        return view('templates/header',$data)
        .view('users/users_form_update')
        .view('templates/footer');
    }

    public function update(){
        $usuarios = New UsuarioModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email' =>$this->request->getVar('email')
        ];

        $usuarios->update($id,$data);
        return redirect()->to(base_url('/usuarios'));

    }


}