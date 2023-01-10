<?php

namespace App\Controllers;

class SidebarController extends BaseController
{
    public function index()
    {
        echo view ('pages/Sidebar');
    }
}
