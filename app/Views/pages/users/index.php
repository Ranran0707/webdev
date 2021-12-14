<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="p-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            < </ol>
    </nav>
</div>
<div class=" my-3 d-flex justify-content-between">
    <h3>Detail Pengguna</h3>
    <a href="<?= base_url('/'); ?>" class="me-4 btn btn-success">Kembali</a>
</div>

<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <img src="<?= base_url('/assets/user/user.png'); ?>" alt="" width="100%" height="300px">
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="card p-2">
            <div class="card-body">
                <table class="table table-striped">

                    <tbody>
                        <tr>
                            <th scope="row">Username</th>
                            <td>:</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>:</td>
                            <td>Maulanaishak77@gmail.com</td>
                        </tr>
                        <tr>
                            <th scope="row">Password</th>
                            <td>:</td>
                            <td>***</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection('content'); ?>