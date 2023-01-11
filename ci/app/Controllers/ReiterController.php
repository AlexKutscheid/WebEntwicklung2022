<?php

namespace App\Controllers;
use App\Models\ReiterModel;

class ReiterController extends BaseController
{
    public function index()
    {
        $data['title'] = "Reiter";
        $reiterModel = new ReiterModel();
        $data['reiter'] = $reiterModel->getInfo();
        echo view('templates/header', $data);
        echo view('pages/Reiter', $data);
        echo view('templates/footer');
    }
}