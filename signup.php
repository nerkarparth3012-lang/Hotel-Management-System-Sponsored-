<style>
    .login-form {
        background: #eff3ff;
        opacity: .8;
        padding: 25px 40px 25px 40px;
        border: 1px solid #E69355;
        border-radius: 15px;
    }

    .login-form h3 {
        color: #19191a;
        margin-bottom: 36px;
        text-align: center;
    }

    .login-form form .input {
        width: 90%;
        margin: auto;
        position: relative;
        margin-bottom: 15px;
    }

    .login-form form .input-bg {
        width: 100%;
        height: 40px;
        border-radius: 15px;
        border: 1px solid #E69355;
        font-size: 16px;
        color: #19191a;
        font-weight: 500;
        padding-left: 20px;
    }

    .login-form form .input label {
        font-size: 14px;
        color: #000;
        display: block;
        margin-bottom: 10px;
    }

    .login-form form .input i {
        color: #dfa974;
        position: absolute;
        right: 18px;
        bottom: 14px;
    }

    .login-form form button {
        display: block;
        border: 1px solid #dfa974;
        border-radius: 20px;
        color: #eff3ff;
        background-color: #dfa974;
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase;
        height: 46px;
        width: 90%;
        margin: auto;
        margin-top: 30px;
        transition: all .3s ease-in-out;
    }

    .login-form form button:hover {
        background-color: transparent;
        color: #dfa974;
    }

    .login-form form a {
        display: block;
        width: 90%;
        margin: auto;
        margin-top: 20px;
        text-align: center;
        color: #000;
    }

    .login-form form a span {
        color: #dfa974;
    }
</style>

<?php
require ("header.php");
?>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i>+9179 47418470</li>
                            <li><i class="fa fa-envelope"></i> atithihotelshirpur@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="#" class="bk-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="hero-text text-center" style="padding-top: 0; margin-bottom: 50px;">
                        <h1>Welcome To Hotel Atithi</h1>
                    </div>
                </div>
                <div class="col-lg-6 mx-auto">
                    <div class="login-form">
                        <h3>Sign Up</h3>
                        <form action="#">
                            <div class="input">
                                <label for="name-input">Name:</label>
                                <input type="text" class="input-bg" id="name-input">
                            </div>
                            <div class="input">
                                <label for="email-input">Email:</label>
                                <input type="text" class="input-bg" id="email-input">
                            </div>
                            <div class="input">
                                <label for="password-input">Password:</label>
                                <input type="text" class="input-bg" id="password-input">
                                <!-- <i class="fa fa-eye-slash"></i> -->
                            </div>
                            <div class="input">
                                <label for="cPassword-input">Confirm Password:</label>
                                <input type="text" class="input-bg" id="cPassword-input">
                                <!-- <i class="fa fa-eye-slash"></i> -->
                            </div>
                            <button type="submit">Sign Up</button>
                            <a href="./login.php"> Already Have An Account? <span> Log In </span></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg"></div>
        </div>
    </section>
    <!-- Hero Section End -->








    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                                template is made with <i class="fa fa-heart" aria-hidden="true"></i>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>