<?php

namespace App\Controllers;

class AktuellesProjektController extends BaseController
{
    public function index()
    {
        $data['title'] = "Aktuelles Projekt";
        echo view ('templates/header',$data);
        echo view ('pages/AktuellesProjekt');
        echo view ('templates/footer');

    }
}
