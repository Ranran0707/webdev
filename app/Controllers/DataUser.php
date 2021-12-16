<?php

namespace App\Controllers;

class DataUser extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'User Detail | Admin'
        ];

        echo view('pages/users/index', $data);
    }
}
