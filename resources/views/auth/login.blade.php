<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">

       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">

       <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/png" href="/assets/images/fav.png">

    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;300;400;500;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet">
    <link href="/assets/css/night-mode.css" rel="stylesheet">

    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/assets/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="/assets/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">

    @livewireStyles
</head>
<body>

    <div class="form-wrapper">
        <div class="app-form">
            <div class="app-form-sidebar">
                <div class="sign-logo">
                    <img src="/assets/images/logo_2.png" alt="">
                </div>
                <div class="sign_sidebar_text">
                    <h1>Best place to buy and sell digital products and LMS Courses with social Networking</h1>
                </div>
            </div>
            <div class="app-form-content">

                @livewire('login-component')

                <div class="register_footer mt-50">
                    © 2021 Micko owned by Gambolthemes. All rights reserved
                    <nav class="footer__links">
                        <a href="#" class="footer__link" target="_blank">Terms of Use</a>
                        <a href="#" class="footer__link" target="_blank">Privacy Policy</a>
                        <a href="#" class="footer__link" target="_blank">Refund Policy</a>
                        <a href="#" class="footer__link" target="_blank">About</a>
                        <a href="#" class="footer__link" target="_blank">Contact Us</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/night-mode.js"></script>

    @livewireScripts
</body>

</html>
