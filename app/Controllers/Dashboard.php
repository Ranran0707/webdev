<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Admin'
        ];

        echo view('pages/index', $data);
    }
}
