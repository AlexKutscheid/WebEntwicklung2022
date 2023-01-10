<?php

namespace App\Controllers;

class ReiterController extends BaseController
{
    public function index()
    {
        $data['title'] = "ReiterController";
        echo view ('templates/header',$data);
        echo view ('pages/Reiter');
        echo view ('templates/footer');
    }
}
