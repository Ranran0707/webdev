<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="p-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item ">
                <!-- if breadcrumb is single--><span><a href="<?= base_url('buku'); ?>" class="text-decoration-none">Daftar Buku</a></span>
            </li>
            <li class="breadcrumb-item active "><span>Detail</span></li>
        </ol>
    </nav>
</div>
<div class=" my-3 d-flex justify-content-between">
    <h3>Detail Buku</h3>
    <a href="<?= base_url('buku'); ?>" class="me-4 btn btn-success">Kembali</a>
</div>

<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <img src="<?= base_url('img/' . $buku[0]['image']); ?>" alt="" width="100%" height="300px">
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="card p-2">
            <div class="card-body">
                <table class="table table-striped">

                    <tbody>
                        <tr>
                            <th scope="row">Judul Buku</th>
                            <td>:</td>
                            <td><?= $buku[0]['title']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Kode Buku</th>
                            <td>:</td>
                            <td><?= $buku[0]['code']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Kategori Buku</th>
                            <td>:</td>
                            <td><?= $buku[0]['category']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Penulis Buku</th>
                            <td>:</td>
                            <td><?= $buku[0]['writer']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Penerbit Buku</th>
                            <td>:</td>
                            <td><?= $buku[0]['publisher']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tahun Terbit Buku</th>
                            <td>:</td>
                            <td><?= $buku[0]['year']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection('content'); ?>