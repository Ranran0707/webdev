<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="p-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">

            <li class="breadcrumb-item ">
                <!-- if breadcrumb is single--><span><a href="<?= base_url('public/buku'); ?>" class="text-decoration-none">Daftar Buku</a></span>
            </li>
            <li class="breadcrumb-item active "><span>Tambah Data Buku</span></li>
        </ol>
    </nav>
</div>
<div class=" my-3">
    <h3>Tambah Data Buku</h3>
    <a href="<?= base_url('buku'); ?>" class="me-4 btn btn-success">Kembali</a>
</div>

<form action="<?= base_url('buku/save'); ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <fieldset class="p-5">
        <legend>Form Tambah Data</legend>
        <div class="row">
            <div class="col-6">
                <div class="form-group my-2">
                    <label for="code">Kode Buku</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Masukkan Kode Buku">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group my-2">
                    <label for="title">Judul Buku</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul Buku">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group my-2">
                    <label for="category">Kategori Buku</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="Masukkan Kategori Buku">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group my-2">
                    <label for="writer">Penulis Buku</label>
                    <input type="text" class="form-control" id="writer" name="writer" placeholder="Masukkan Penulis Buku">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group my-2">
                    <label for="publisher">Penerbit Buku</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Masukkan Penerbit Buku">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group my-2">
                    <label for="year">Tahun Terbit Buku</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="Masukkan Tahun Terbit Buku">
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group my-2">
                <label for="image" class="form-label" id="image">Pilih Gambar</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary mt-3">Tambah</button>
    </fieldset>
</form>


<?= $this->endSection('content'); ?>