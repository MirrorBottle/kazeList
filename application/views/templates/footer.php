<section id="footer">
    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-8 mx-auto">

                    <!-- Content -->
                    <img src="<?php echo base_url('assets/') ?>images/logo.png" alt="" class="img-fluid" width="240">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi facere corporis debitis
                        laudantium alias dolores vel quam dicta dolorem repellat ab iure dolorum quibusdam aut
                        error, accusantium porro excepturi ratione?
                    </p>

                </div>

                <!-- Grid column -->
                <div class="col-md-4 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">See more</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->



        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-dribbble"> </i>
                </a>
            </li>
        </ul>
        <!-- Social buttons -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</section>
</div>






<script src="<?php echo base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('assets/') ?>bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
<script src="<?php echo base_url('assets/plugins/lightGallery-master/dist/js/lightgallery-all.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/lightGallery-master/lib/jquery.mousewheel.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/slick-master/slick/slick.js') ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#lightgallery').lightGallery();
    });

    $(document).ready(function() {
        $('.slick-carousel').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
</script>
</body>

</html>