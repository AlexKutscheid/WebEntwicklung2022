<?php

namespace App\Controllers;

class AktuelleAufgaben extends BaseController
{
    public function index()
    {
        $data['title'] = "Aktuelle Aufgaben";
        echo view ('templates/header',$data);
        echo view ('pages/AktuellesProjekt');
        echo view ('templates/footer');

    }
}
