<?php

namespace App\Controllers;
use App\Models\MitgliederModel;

class MitgliederEditController extends BaseController
{
    public function index()
    {
        $data['title'] = "Mitglieder";
        $id = $_GET['id'];
        $mitgliederModel = new MitgliederModel();

        $data['user'] = $mitgliederModel ->getUserByID($id);
        echo view ('templates/header',$data);
        echo view ('pages/MitgliederEdit',$data);
        echo view ('templates/footer');

    }
}
