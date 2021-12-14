<?php

namespace App\Models;

use CodeIgniter\Model;

class Buku_model extends Model
{
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM books");

        return $query->getResult();
    }
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $allowedFields = ['code', 'title', 'category', 'writer', 'publisher', 'year', 'image'];

    public function detailbuku($id_buku)
    {
        $sql = "SELECT * FROM books WHERE id='$id_buku' ";

        $query = $this->db->query($sql);

        $data = $query->getResultArray();

        return $data;
    }

    public function getPublisherBook($penerbit)
    {
        $query = $this->db->query("SELECT * FROM books WHERE publisher = '$penerbit'");

        return $query->getResult();
    }

    public function getpublisher()
    {
        $query = $this->db->query("SELECT DISTINCT publisher FROM books");

        return $query->getResult();
    }

    public function getWriterBook($penulis)
    {
        $query = $this->db->query("SELECT * FROM books WHERE writer = '$penulis'");

        return $query->getResult();
    }

    public function getwriter()
    {
        $query = $this->db->query("SELECT DISTINCT writer FROM books");

        return $query->getResult();
    }
}
