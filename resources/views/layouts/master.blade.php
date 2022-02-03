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

    <style>
        .reply{
            margin-left:auto;
            margin-right:0;
        }
    </style>

    @livewireStyles
</head>
<body>




    <div class="popup-wrapper3">
        <div class="popup add-course--popup">
            <span class="popup-closed"><i class="far fa-window-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h4>Add Course</h4>
                </div>
                <div class="popup-body">
                    <div class="add-course-block">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="course-popup-item">
                                    <h4>Become an Instructor</h4>
                                    <p>Top instructors from around the world teach millions of students on Micko. We provide the tools and skills to teach what you love.</p>
                                    <button class="main-btn color btn-hover" onclick="location.href='#';">Become an Instructor</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="course-popup-item">
                                    <h4>Add New Course</h4>
                                    <p>Create single course based on what student need to learning. An easy step-by-step process will help you get started.</p>
                                    <button class="main-btn color btn-hover" onclick="location.href='add_course.html';">Add New Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="popup-wrapper2">
        <div class="popup post-sharing">
            <span class="popup-closed"><i class="far fa-window-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h4>Share Post</h4>
                </div>
                <div class="popup-body">
                    <div class="post-share-category share145l">
                        <label><input type="radio" name="colorRadio" value="feed" checked><span>Share in your feed</span></label>
                        <label><input type="radio" name="colorRadio" value="page"><span>Share in a page</span></label>
                        <label><input type="radio" name="colorRadio" value="group"><span>Share in a group</span></label>
                        <label><input type="radio" name="colorRadio" value="message"><span>Share in message</span></label>
                        <div class="feed share-box"></div>
                        <div class="page share-box">
                            <input class="form_input" type="text" placeholder="Please type the page name">
                        </div>
                        <div class="group share-box">
                            <input class="form_input" type="text" placeholder="Please type the group name">
                        </div>
                        <div class="message share-box">
                            <input class="form_input" type="text" placeholder="Please type the people name">
                        </div>
                        <div class="comment-box">
                            <textarea placeholder="Write something here.."></textarea>
                        </div>
                    </div>
                    <div class="export-share">
                        <h6>Export</h6>
                        <ul class="social-share">
                            <li><a href="#" class="fb" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="tw" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="ln" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="pin" title="Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#" class="wp" title="Whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="#" class="tl" title="Telegram"><i class="fab fa-telegram-plane"></i></a></li>
                            <li><a href="#" class="in" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" class="cpy" title="Copy Link"><i class="fas fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="postbox">
                    <div class="share-submit-btns">
                        <button class="main-btn cancel" data-ripple="">Cancel</button>
                        <button class="main-btn color btn-hover" data-ripple="">Share</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


   @livewire('navbar-component')


    <div class="wrapper">

        @yield('content')
        @include('scripts.sweet-alert')

    </div>

    @include('layouts.partials.footer')


    <script data-cfasync="false" src="/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/night-mode.js"></script>


    @livewireScripts

</body>

</html>
