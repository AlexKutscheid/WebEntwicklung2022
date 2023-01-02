<?php

namespace App\Controllers;

class First extends BaseController
{
    public function index()
    {
         $data['title'] = "Unser erster Title";
         echo view ('templates/header');
         echo view ('pages/simple', $data);
         echo view ('templates/footer');
    }
}
