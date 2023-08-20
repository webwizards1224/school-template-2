<!-- Footer Start -->
<div class="container-fluid bg-dark-blue text-white py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-5 col-md-6 mb-5">
            <a href class="navbar-brand d-flex font-weight-bold text-white m-0 mb-4 p-0">
                <img src="assets/img/logo.png" alt="logo" style="height: 100px;margin-right: 30px;">
                <div class="school_header">
                    <h6>P. K. Educational Trust's</h6>
                    <h4 class="m-0 text-white">Shree Siddhi Vinayagar English High School
                    </h4>
                </div>
            </a>
            <p>
                SSVEHS keeps the high standard of education. The value based education
                makes students conscious of their responsibilities towards the country.
            </p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-primary rounded-circle text-center me-2 px-0"
                    style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center me-2 px-0"
                    style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center me-2 px-0"
                    style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-primary rounded-circle text-center me-2 px-0"
                    style="width: 38px; height: 38px" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
            <h3 class="text-white mb-4">Get In Touch</h3>
            <div class="d-flex">
                <h4 class="fa fa-map-marker-alt text-white"></h4>
                <div class="ps-3">
                    <h5 class="text-white">Address</h5>
                    <p>Hariyali Village, Tagore Nagar, Vikhroli (E) <br> Mumbai - 400 083</p>
                </div>
            </div>
            <div class="d-flex">
                <h4 class="fa fa-envelope text-white"></h4>
                <div class="ps-3">
                    <h5 class="text-white">Email</h5>
                    <p>info@example.com</p>
                </div>
            </div>
            <div class="d-flex">
                <h4 class="fa fa-phone-alt text-white"></h4>
                <div class="ps-3">
                    <h5 class="text-white">Phone</h5>
                    <p>022-2574 5402</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h3 class="text-white mb-4">Quick Links</h3>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right me-2"></i>Home</a>
                <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right me-2"></i>About Us</a>
                <a class="text-white mb-2" href="mentors.html"><i class="fa fa-angle-right me-2"></i>Mentors</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Teachers</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Blog</a>
                <a class="text-white" href="#"><i class="fa fa-angle-right me-2"></i>Contact
                    Us</a>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;">
        <p class="m-0 text-center text-white">
            &copy;
            <a class="text-white font-weight-bold" href="#">Shree Siddhi Vinayagar English High School</a>
            All Rights Reserved.
        </p>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>
<script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
<script src="assets/lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="assets/mail/jqBootstrapValidation.min.js"></script>
<script src="assets/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="assets/js/main.js"></script>

<script>
    $(document).ready(function () {
        $('.newsslider').slick({
            vertical: true,
            arrows: false, // Optional: Enable arrows for navigation
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
        });
        $('.noticeslider').slick({
            vertical: true,
            arrows: false, // Optional: Enable arrows for navigation
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
        });
        $('.eventslider').slick({
            vertical: true,
            arrows: false, // Optional: Enable arrows for navigation
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
        });
        $('.announcementslider').slick({
            dots: false,
            arrows: false, // Optional: Enable arrows for navigation
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true,
            autoplay: true
        });
    });
</script>