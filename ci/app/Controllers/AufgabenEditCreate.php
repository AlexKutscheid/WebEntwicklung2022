<?php

namespace App\Controllers;
use App\Models\AufgabenModel;

class AufgabenEditCreate extends BaseController
{
    public function index()
    {

        $data['title'] = "Aufgaben";
        $aufgabenModel = new aufgabenModel();
        $id = $_GET['id'];
        $data['info']=$aufgabenModel->getInfobyID($id);

        echo view('templates/header', $data);
        echo view('pages/AufgabenBearbeitenUndErstellen', $data);
        echo view('templates/footer');

    }
}