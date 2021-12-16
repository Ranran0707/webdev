<?= $this->extend('layout/header'); ?>

<?= $this->section('content'); ?>
<header>
    <!-- =============== container =============== -->
    <div class="container">
        <div class="header-content row">
            <div class="col-xs-12 col-sm-5 col-md-5">
                <h2 class="wow bounceIn animated" data-wow-delay=".40s">Daftar Buku</h2>

            </div>
            <div class="col-xs-12 col-sm-7 col-md-7 wow slideInLeft animated">
                <img src="<?= base_url('/assets/web/img/phones.png'); ?>" alt="phones" />
            </div>
        </div>
    </div>
    <!-- =============== container end =============== -->
</header>
<div class="container">
    <div class="container">
        <h3> </h3>
    </div>
    <div class="row ">
        <?php
        $i = 1;
        foreach ($buku as $mb) : ?>
            <div class="col-xs-3 p-2 ">
                <a href="<?= base_url('list/detail/' . $mb->id); ?> " class="text-decoration-none">
                    <div class="p-2  text-center ">
                        <img src="<?= base_url('img/' . $mb->image); ?>" alt="" width="200px" height="300px" />
                        <h4 class="mt-2 text-black">Buku <?= $i++; ?></h4>
                    </div>
                </a>
            </div>
        <?php endforeach;                    ?>
    </div>
</div>

<footer id="footer">
    <!-- =============== container =============== -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p class="copyright">
                    &copy; 2021 Perpustakaan
                </p>

            </div>
        </div>
    </div><!-- =============== container end =============== -->
</footer>

<?= $this->endSection('content'); ?>