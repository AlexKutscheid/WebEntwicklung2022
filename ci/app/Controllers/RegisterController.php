<?php

namespace App\Controllers;

use App\Models\MitgliederModel;

class RegisterController extends BaseController
{
    public function __construct(){
        $this -> mitgliederModel = new MitgliederModel();
    }
    public function index()
    {

        if (!empty($_POST['username']) && !empty($_POST['passwort']) && !empty($_POST['email'])) {
            $this->mitgliederModel->insertNewUser();

            return redirect()->to(base_url() . '/Login');
        }

        $data['title'] = "Registrieren";
        echo view('templates/header', $data);
        echo view('pages/Register');
        echo view('templates/footer');


    }
}
