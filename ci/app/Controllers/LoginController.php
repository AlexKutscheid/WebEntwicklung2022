<?php

namespace App\Controllers;
use App\Models\MitgliederModel;

class LoginController extends BaseController
{
    public function __construct(){
        $this -> mitgliederModel = new MitgliederModel();
    }
    public function index()
    {
        helper(['form']);

        //var_dump(password_hash("123", PASSWORD_BCRYPT));

        if (!empty($_POST['username']) && !empty($_POST['passwort'])) {
            $user = $this->mitgliederModel->getUser();
            if(!empty($user)){
                $passwort = $user['Password'];
                $userId = $user['ID'];

                if(password_verify($_POST['passwort'], $passwort)){
                    $this->session->set('loggedin', True);
                    $this->session->set("sessUserID", $userId);
                    $sessData = $this->mitgliederModel->sessionData();
                    $_SESSION = $sessData;
                    return redirect()->to(base_url() . '/Mitglieder');
                }
            }
        }

        $data['title'] = "Login";
        echo view('templates/header', $data);
        echo view('pages/Login');
        echo view('templates/footer');

    }
}
