<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Buku_model;
use CodeIgniter\HTTP\Request;


class Web extends BaseController
{
    protected $mbuku;

    public function __construct()
    {
        $this->mbuku = new Buku_model();
    }

    public function index()
    {
        $getdata = $this->mbuku->getdata();

        $data = [
            'buku' => $getdata,
            'title' => 'Home | Website'
        ];
        // dd($data['buku']);

        echo view('web/index', $data);
    }
    public function list()
    {
        $getdata = $this->mbuku->getdata();

        $data = [
            'buku' => $getdata,
            'title' => 'Daftar Buku | Website'
        ];
        // dd($data['buku']);

        echo view('web/list', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Website'
        ];


        echo view('web/contact', $data);
    }
    public function detail($id_buku)
    {
        $data = [];
        $data['buku'] =  $this->mbuku->detailbuku($id_buku);

        $data['title'] = 'Detail Buku | Admin';
        return view('web/detail', $data);
    }
}
