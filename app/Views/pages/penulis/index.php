<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="p-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">

            <li class="breadcrumb-item active "><span>Daftar Penulis</span></li>
        </ol>
    </nav>
</div>
<div class=" my-3">
    <h3>Daftar Penulis</h3>

</div>

<table class="table table-hover border border-3 border-dark p-3" id="datatablesSimple">
    <thead>
        <tr class="table-secondary">
            <th scope="col">No</th>
            <th scope="col">Nama Penulis</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($buku as $bk) :       ?>
            <tr class="">
                <th scope="row"><?= $no++; ?></th>
                <td><?= $bk->writer; ?> </td>
                <td>
                    <div class="d-flex justify-content-end">
                        <span class="badge bg-primary mx-1"><a href="<?= base_url('penulis/detail/' . $bk->writer); ?>" class="text-decoration-none text-white">Lihat</a></span>
                    </div>
                </td>
            </tr>
        <?php endforeach        ?>

    </tbody>
</table>
<?= $this->endSection('content'); ?>