<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Buku_model;

class Penerbit extends BaseController
{

    protected $mbuku;

    public function __construct()
    {
        $this->mbuku = new Buku_model();
    }

    public function index()
    {
        $getpublisher = $this->mbuku->getpublisher();

        $data = [
            'buku' => $getpublisher,
            'title' => 'Daftar Penerbit | Admin',
        ];

        echo view('pages/penerbit/index', $data);
    }

    public function detail($penerbit)
    {
        $getdata = $this->mbuku->getPublisherBook($penerbit);

        $data = [
            'buku' => $getdata,
            'title' => 'Detail Penerbit | Admin',
        ];
        // dd($data);

        echo view('pages/penerbit/detail', $data);
    }
}
