<?php

namespace App\Controllers;
use App\Models\AufgabenModel;

class AufgabenController extends BaseController
{
    public function index()
    {
        $data['title'] = "Aufgaben";
        $aufgabenModel = new aufgabenModel();
        $data['aufgaben'] = $aufgabenModel->getInfo();

        echo view('templates/header', $data);
        echo view('pages/Aufgaben', $data);
        echo view('templates/footer');
    }

    public function delete(){

        $aufgabenModel = new aufgabenModel();
        $aufgabenModel->deleteAufgabe($_GET['id']);

        return redirect()->to(base_url() . '/Aufgaben');
    }
}