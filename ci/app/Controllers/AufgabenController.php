<?php

namespace App\Controllers;

class AufgabenController extends BaseController
{
    public function index()
    {
        $data['title'] = "Aufgaben";
        echo view ('templates/header',$data);
        echo view ('pages/Aufgaben');
        echo view ('templates/footer');

    }
}
