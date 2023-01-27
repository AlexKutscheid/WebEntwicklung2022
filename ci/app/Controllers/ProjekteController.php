<?php

namespace App\Controllers;

use App\Models\ProjekteModel;

class ProjekteController extends BaseController
{
    public function __construct(){
        $this -> projekteModel = new ProjekteModel();
    }
    public function index()
    {
        if (!empty($_POST['Projektname']) && !empty($_POST['Projektbeschreibung'])) {
            $this->projekteModel->insertNewProject();

            return redirect()->to(base_url() . '/Projekte');
        }

        $projekteModel = new ProjekteModel();
        $data['title'] = "Projekte";
        $data['projects'] = $projekteModel -> getProjects();
        echo view ('templates/header',$data);
        echo view ('pages/Projekte', $data);
        echo view ('templates/footer');

    }
}
