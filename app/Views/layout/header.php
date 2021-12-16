<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- FONT -->
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/web/css/bootstrap.min.css'); ?>" type="text/css">
    <!-- AWESOME -->
    <link rel="stylesheet" href="<?= base_url('/assets/web/css/font-awesome.min.css'); ?>" type="text/css">
    <!-- plugin -->
    <link rel="stylesheet" href="<?= base_url('/assets/web/css/animate.min.css'); ?>" type="text/css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/web/css/style.css'); ?>" type="text/css">
    <!-- CAROUSEL -->
    <link href="<?= base_url('/assets/web/owl-carousel/owl.carousel.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/web/owl-carousel/owl.theme.css'); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <style>
        .gg {
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- =============== Preloader =============== -->
    <div id="preloader">
        <div id="loading">
        </div>
    </div>
    <!-- =============== nav =============== -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <h2 class="gg">Perpustakaan</h2>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="" href="<?= base_url('beranda'); ?>">Home</a>
                        </li>
                        <li>
                            <a class="" href="<?= base_url('list'); ?>">Daftar Buku</a>
                        </li>
                        <li>
                            <a class="" href="<?= base_url('kontak'); ?>">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- =============== navbar-collapse =============== -->

            </div>
        </div>
        <!-- =============== container-fluid =============== -->
    </nav>

    <?= $this->renderSection('content'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- =============== jQuery =============== -->
    <script src="<?= base_url('/assets/web/js/jquery.js'); ?>"></script>
    <!-- =============== Bootstrap Core JavaScript =============== -->
    <script src="<?= base_url('/assets/web/js/bootstrap.min.js'); ?>"></script>
    <!-- =============== Plugin JavaScript =============== -->
    <script src="<?= base_url('/assets/web/js/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/web/js/jquery.fittext.js'); ?>"></script>
    <script src="<?= base_url('/assets/web/js/wow.min.js'); ?>"></script>
    <!-- =============== Custom Theme JavaScript =============== -->
    <script src="<?= base_url('/assets/web/js/creative.js'); ?>"></script>
    <!-- =============== owl carousel =============== -->
    <script src="<?= base_url('/assets/web/owl-carousel/owl.carousel.js'); ?>"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 3000,
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]
            });

        });
    </script>
</body>


</html>