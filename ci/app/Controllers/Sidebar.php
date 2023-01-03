<?php

namespace App\Controllers;

class Sidebar extends BaseController
{
    public function index()
    {
        echo view ('Sidebar/Sidebar');
    }
}
