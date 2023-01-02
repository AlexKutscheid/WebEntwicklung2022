<?php

namespace App\Controllers;

class Projekte extends BaseController
{
    public function index()
    {
        echo view ('Projekte/Projekte');
    }
}
