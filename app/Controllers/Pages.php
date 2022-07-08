<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('templates/header')
        .view('pages/index')
        .view('templates/footer');
    }


    public function contenido(){
        return view('templates/header')
        .view('pages/contenido')
        .view('templates/footer');
    }

}