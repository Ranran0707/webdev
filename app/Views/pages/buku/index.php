<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="p-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item active "><span>Daftar Buku</span></li>
        </ol>
    </nav>
</div>
<div class=" my-3">
    <h3>Daftar Buku</h3>

</div>
<div class="d-flex justify-content-end my-2 me-3">
    <a href="<?= base_url('buku/create'); ?>" class="btn text-decoration-none bg-success text-white">Tambah Data</a>
</div>

<table class="table table-hover border border-3 border-dark p-3" id="datatablesSimple">
    <thead>
        <tr class="table-secondary">
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Kategori</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($buku as $bk) :       ?>
            <tr class="">
                <th scope="row"><?= $no++; ?></th>
                <td><?= $bk->title; ?> </td>
                <td><?= $bk->category; ?></td>
                <td>
                    <div class="d-flex justify-content-end">
                        <span class="badge bg-primary mx-1"><a href="<?= base_url('buku/detail/' . $bk->id); ?> " class="text-decoration-none text-white">Lihat</a></span>
                        <span class="badge bg-success mx-1"><a href="<?= base_url('buku/edit/' . $bk->id); ?>" class="text-decoration-none text-white"> Ubah</a></span>
                        <span class="badge bg-danger mx-1"><a href="<?= base_url('buku/delete/' . $bk->id); ?>" onclick="return confirm('Apakah Anda Yakin?')" class="text-decoration-none text-white">Hapus</a></span>
                    </div>
                </td>
            </tr>
        <?php endforeach        ?>

    </tbody>
</table>
<?= $this->endSection('content'); ?>