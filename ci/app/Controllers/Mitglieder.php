<?php

namespace App\Controllers;

class Mitglieder extends BaseController
{
    public function index()
    {
        echo view ('Mitglieder/Mitglieder');
    }
}
