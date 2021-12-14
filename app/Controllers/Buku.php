<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Buku_model;
use CodeIgniter\HTTP\Request;

class Buku extends BaseController
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
            'title' => 'Daftar Buku | Admin',
        ];

        echo view('pages/buku/index', $data);
    }

    public function create()
    {
        $data =
            [
                'title' => 'Tambah Data Buku',
            ];

        return view('pages/buku/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'image' => [
                'rules' => 'uploaded[image]|max_size[image,3072]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',

            ]
        ]));
        $file = $this->request->getFiles('image');

        $code = $this->request->getVar('code');
        $title = $this->request->getVar('title');
        $category = $this->request->getVar('category');
        $writer = $this->request->getVar('writer');
        $publisher = $this->request->getVar('publisher');
        $year = $this->request->getVar('year');

        $image = $file['image']->getName();

        $file['image']->move('img');


        $data = [
            'code' => $code,
            'title' => $title,
            'category' => $category,
            'writer' => $writer,
            'publisher' => $publisher,
            'year' => $year,
            'image' => $image,

        ];
        $this->mbuku->insert($data);

        return redirect()->to(base_url("buku"));
    }

    public function detail($id_buku)
    {
        $data = [];
        $data['buku'] =  $this->mbuku->detailbuku($id_buku);

        $data['title'] = 'Detail Data Buku';

        return view('pages/buku/detail', $data);
    }

    public function delete($id)
    {
        $this->mbuku->delete($id);
        return redirect()->to(base_url("buku"));
    }

    public function edit($id)
    {
        session();
        // $validasi = \Config\Services::validation();
        // $books = $this->mbuku->getIdBuku($id);
        $data =
            [
                'title' => 'Tambah Data Buku',
                'edit' => $this->mbuku->detailbuku($id)
            ];
        // dd($data);

        return view('pages/buku/edit', $data);
    }

    public function update($id)
    {
        $code = $this->request->getVar('code');
        $title = $this->request->getVar('title');
        $category = $this->request->getVar('category');
        $writer = $this->request->getVar('writer');
        $publisher = $this->request->getVar('publisher');
        $year = $this->request->getVar('year');
        $image = $this->request->getVar('image');

        $this->mbuku->save([
            'id' => $id,
            'code' => $code,
            'title' => $title,
            'category' => $category,
            'writer' => $writer,
            'publisher' => $publisher,
            'year' => $year,
            'image' => $image
        ]);

        return redirect()->to(base_url("buku"));
    }
}
