<?php

namespace App\Controllers;

class MitgliederController extends BaseController
{
    public function index()
    {
        $data['title'] = "MitgliederController";
        $data['data'] = array(
            array(
                "Name" => "Max Mustermann",
                "E-Mail" => "mustermann@muster.de" ,
                "In Projekt" => "2"
            ),

            array(
                "Name" => "Petra Müller",
                "E-Mail" => "petra@mueller.de" ,
                "In Projekt" => "1"
            )
        );

        echo view ('templates/header',$data);
        echo view ('pages/Mitglieder');
        echo view ('templates/footer');
    }
}