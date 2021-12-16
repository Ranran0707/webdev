<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php $no = 1;
foreach ($edit as $old) :       ?>

<?php endforeach        ?>

<div class="p-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">

            <li class="breadcrumb-item ">
                <!-- if breadcrumb is single--><span><a href="<?= base_url('buku'); ?>" class="text-decoration-none">Daftar Buku</a></span>
            </li>
            <li class="breadcrumb-item active "><span>Ubah Data Buku</span></li>
        </ol>
    </nav>
</div>
<div class=" my-3">
    <h3>Ubah Data Buku</h3>
    <a href="<?= base_url('buku'); ?>" class="me-4 btn btn-success">Kembali</a>
</div>

<form action="<?= base_url('buku/update/' . $old['id']); ?>" method="post">
    <?= csrf_field(); ?>
    <fieldset class="p-5">
        <legend>Form Ubah Data</legend>
        <div class="row">
            <div class="col-6">
                <div class="form-group my-2">
                    <label for="code">Kode Buku</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Masukkan Kode Buku" value="<?= $old['code']; ?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group my-2">
                    <label for="title">Judul Buku</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul Buku" value="<?= $old['title']; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group my-2">
                    <label for="category">Kategori Buku</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="Masukkan Kategori Buku" value="<?= $old['category']; ?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group my-2">
                    <label for="writer">Penulis Buku</label>
                    <input type="text" class="form-control" id="writer" name="writer" placeholder="Masukkan Penulis Buku" value="<?= $old['writer']; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group my-2">
                    <label for="publisher">Penerbit Buku</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Masukkan Penerbit Buku" value="<?= $old['publisher']; ?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group my-2">
                    <label for="year">Tahun Terbit Buku</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="Masukkan Tahun Terbit Buku" value="<?= $old['year']; ?>">
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group my-2">
                <label for="image" class="form-label">Gambar Buku</label>
                <input class="form-control" type="file" id="image" name="image" value="<?= $old['image']; ?>">
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary mt-3">Tambah</button>
    </fieldset>
</form>


<?= $this->endSection('content'); ?>