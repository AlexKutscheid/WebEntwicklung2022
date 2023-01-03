<?php

namespace App\Controllers;

class Projekte extends BaseController
{
    public function index()
    {
        $data['title'] = "Projekte";
        echo view ('templates/header',$data);
        echo view ('Projekte/Projekte');
        echo view ('templates/footer');

    }
}
