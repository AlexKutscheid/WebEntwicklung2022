<?php

namespace App\Controllers;

class ProjekteController extends BaseController
{
    public function index()
    {
        $data['title'] = "ProjekteController";
        echo view ('templates/header',$data);
        echo view ('pages/Projekte');
        echo view ('templates/footer');

    }
}
