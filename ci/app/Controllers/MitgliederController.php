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
    public function delete(){
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
            $mitgliederModel = new MitgliederModel();
            $mitgliederModel -> deleteUser($id);
        }
        return redirect()->to(base_url() . '/Mitglieder');
    }
}