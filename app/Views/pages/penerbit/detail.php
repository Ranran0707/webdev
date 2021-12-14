<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="p-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item ">
                <!-- if breadcrumb is single--><span><a href="<?= base_url('penerbit'); ?>" class="text-decoration-none">Daftar Penerbit</a></span>
            </li>
            <li class="breadcrumb-item active "><span>Detail</span></li>
        </ol>
    </nav>
</div>
<div class=" my-3 d-flex justify-content-between">
    <h3>Detail Penerbit Buku</h3>
    <a href="<?= base_url('penerbit'); ?>" class="me-4 btn btn-success">Kembali</a>
</div>
<?php
foreach ($buku as $bk) :
?>
<?php endforeach ?>
<button type="button" class="btn btn-primary mb-3">
    <?= $bk->publisher; ?>
</button>
<div class="card">
    <div class="card-body">
        <table class="table table-hover border border-3 border-dark p-3">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
                foreach ($buku as $bk) :       ?>
                    <tr class="">
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $bk->title; ?> </td>
                        <td><?= $bk->category; ?> </td>
                        <td><?= $bk->year; ?> </td>
                    </tr>
                <?php endforeach        ?>

            </tbody>
        </table>.
    </div>
</div>
</div>



<?= $this->endSection('content'); ?>