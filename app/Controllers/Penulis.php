<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Buku_model;

class Penulis extends BaseController
{

    protected $mbuku;

    public function __construct()
    {
        $this->mbuku = new Buku_model();
    }

    public function index()
    {
        $getdata = $this->mbuku->getwriter();

        $data = [
            'buku' => $getdata,
            'title' => 'Daftar Penulis | Admin',
        ];

        echo view('pages/penulis/index', $data);
    }

    public function detail($penulis)
    {
        $getdata = $this->mbuku->getWriterBook($penulis);

        $data = [
            'buku' => $getdata,
            'title' => 'Detail Penulis | Admin',
        ];
        // dd($data);

        echo view('pages/penulis/detail', $data);
    }
}
