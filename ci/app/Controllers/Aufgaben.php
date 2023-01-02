<?php

namespace App\Controllers;

class Aufgaben extends BaseController
{
    public function index()
    {
        echo view ('Aufgaben/Aufgaben');
    }
}
