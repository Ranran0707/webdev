<?php

namespace App\Controllers;

class DataUser extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Admin'
        ];

        echo view('pages/users/index', $data);
    }
}
