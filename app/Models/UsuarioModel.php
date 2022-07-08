<?php namespace App\Models;
use CodeIgniter\Model;


class UsuarioModel extends Model{

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','email'];

    public function getUsers(){
        return $this->findAll();
    }


}