<?php

namespace App\Controllers;

use App\Models\ProjekteModel;

class ProjekteBearbeitenController extends BaseController
{
    public function __construct(){
        $this -> projekteModel = new ProjekteModel();
    }
    public function index()
    {

        $projekteModel = new ProjekteModel();
        $data['title'] = "Projekte";
        if (!empty($_POST['slectedItems'])) {
            $name = $_POST['slectedItems'];
            $data['project'] = $projekteModel->getProjectByName($name);
        }

        echo view ('templates/header',$data);
        echo view ('pages/ProjekteBearbeiten', $data);
        echo view ('templates/footer');

    }

    public function editProject(){
        $this->projekteModel->editProject($_POST['Projektname'], $_POST['Projektbeschreibung'], $_POST['ErstellerID'],$_POST['ID']);
        return redirect()->to(base_url() . '/Projekte');
    }
}
