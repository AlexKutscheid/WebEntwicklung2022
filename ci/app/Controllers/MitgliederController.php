<?php

namespace App\Controllers;
use App\Models\MitgliederModel;

class MitgliederController extends BaseController
{
    public function index()
    {
        $data['title'] = "Mitglieder";
        $mitgliederModel = new MitgliederModel();
        $data['mitglieder'] = $mitgliederModel -> getInfo();
        echo view ('templates/header',$data);
        echo view ('pages/Mitglieder',$data);
        echo view ('templates/footer');
    }
}