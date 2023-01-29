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

    public function createEdit(){
        $aufgabenModel = new aufgabenModel();
        if(isset($_POST['btnEdit'])){

            $aufgabenName = $_POST['Aufgabenbezeichnung'];
            $beschreibung = $_POST['Beschreibung'];
            $crDate = $_POST['Erstellungsdatum'];
            $dueDate = $_POST['Fälligkeit'];
            $oldName = $_POST['ogAufgabe'];


            $ersteller=$aufgabenModel->getErstellerID($_POST['zuständig']);
            $reiter=$aufgabenModel->getReiterID($_POST['reiter']);
            $aufgabenModel->editAufgabe($reiter[0]['ID'], $aufgabenName, $beschreibung, $crDate, $dueDate, $ersteller[0]['ID'], $oldName);
            return redirect()->to(base_url() . '/Aufgaben');
        }
        else if(isset($_POST['btnCreate'])){
            $aufgabenModel->createAufgabe();
        }
    }
}