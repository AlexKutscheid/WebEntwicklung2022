<?php

namespace App\Controllers;

class Aufgaben extends BaseController
{
    public function index()
    {
        $data['title'] = "Aufgaben";
        echo view ('templates/header',$data);
        echo view ('Aufgaben/Aufgaben');
        echo view ('templates/footer');

    }
}
