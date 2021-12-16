<?= $this->extend('layout/header'); ?>

<?= $this->section('content'); ?>
<section id="contact">
    <!-- =============== container =============== -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated headding" data-wow-delay=".1s">
                <h2>Contact <span>Us</span></h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, fugiat placeat molestias illo voluptates facere iste maxime magni cumque ab vero? Laboriosam, aliquid repudiandae voluptatum iusto unde aliquam laudantium quos velit commodi. Dicta, esse ab!</p>
            </div>


        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6 wow bounceIn animated" data-wow-delay=".1s">

                <form>
                    <div class="ajax-hidden">
                        <div class="form-group wow fadeInUp animated">
                            <label for="c_name" class="sr-only">Name</label>
                            <input type="text" placeholder="Name" name="c_name" class="form-control" id="c_name">
                        </div>

                        <div data-wow-delay=".1s" class="form-group wow fadeInUp animated">
                            <label for="c_email" class="sr-only">Email</label>
                            <input type="email" placeholder="E-mail" name="c_email" class="form-control" id="c_email">
                        </div>

                        <div data-wow-delay=".2s" class="form-group wow fadeInUp animated">
                            <textarea placeholder="Message" rows="7" name="c_message" id="c_message" class="form-control"></textarea>
                        </div>

                        <button data-wow-delay=".3s" class="btn btn-sm btn-block wow fadeInUp animated" type="submit">Send Message</button>
                    </div>
                    <div class="ajax-response"></div>
                </form>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 wow bounceIn animated" data-wow-delay=".6s">

                <section id="text-15" class="widget widget_text">
                    <h3 class="widget-title">Bekasi, Indonesia</h3>
                    <div class="textwidget">Galaxy No. 67 Jl. Asoka, Bekasi Selatan<br>
                        <p>Telp: 0815-8531-9685<br>
                            E-mail: <a href="#">info@Perpustakaan.com</a></p>
                    </div>
                </section>

            </div>
        </div>
    </div><!-- =============== container end =============== -->
</section>

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