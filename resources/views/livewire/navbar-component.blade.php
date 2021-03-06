<div>

    <header class="header clearfix">
        <div class="header-inner">
            <nav class="navbar navbar-expand-lg bg-micko micko-head justify-content-sm-start micko-top pt-0 pb-0">
                <div class="container">
                    <button class="navbar-toggler align-self-start" type="button">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="/">
                        <div class="res_main_logo">
                            <img src="/assets/images/res-logo.png" alt="">
                        </div>
                        <div class="main_logo" id="logo">
                            <img src="/assets/images/logo.png" alt="">
                            <img class="logo-inverse" src="/assets/images/dark-logo.png" alt="">
                        </div>
                    </a>
                    <form class="search-form-header order-lg-0 order-md-1 order-md-0">
                        <input class="search-form-control" type="search" placeholder="Search..." aria-label="Search">
                        <button class="search-btn btn-color btn-hover"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="collapse navbar-collapse bg-micko-nav p-3 p-lg-0 mt-6 mt-lg-0 d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end mobileMenu" id="navbarSupportedContent">
                        <ul class="navbar-nav align-self-stretch">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('connections') }}">Find Connections</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="all_jobs.html">Jobs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="all_products.html">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="all_learning.html">Learning</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link page-link-btn" href="#" role="button" data-bs-toggle="dropdown">Pages<i class="fas fa-caret-down ms-2"></i></a>
                                <ul class="dropdown-menu pages-dropdown">
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Other Pages</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="about_us.html">About Us</a></li>
                                            <li><a class="dropdown-item channel_item" href="contact_us.html">Contact Us</a></li>
                                            <li><a class="dropdown-item channel_item" href="messages.html">Messages</a></li>
                                            <li><a class="dropdown-item channel_item" href="badges.html">Badges</a></li>
                                            <li><a class="dropdown-item channel_item" href="setting.html">Setting</a></li>
                                            <li><a class="dropdown-item channel_item" href="all_notifications.html">All Notifications</a></li>
                                            <li><a class="dropdown-item channel_item" href="feedback.html">Feedback</a></li>
                                            <li><a class="dropdown-item channel_item" href="help_center.html">Help Center</a></li>
                                            <li><a class="dropdown-item channel_item" href="coming_soon.html">Coming Soon</a></li>
                                            <li><a class="dropdown-item channel_item" href="error_404.html">Error 404</a></li>
                                            <li><a class="dropdown-item channel_item" href="privacy_policy.html">Privacy Policy</a></li>
                                            <li><a class="dropdown-item channel_item" href="terms_of_use.html">Terms of Use</a></li>
                                            <li><a class="dropdown-item channel_item" href="request_refund_policy.html">Refund Policy</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Sign In</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="sign_in.html">Sign In</a></li>
                                            <li><a class="dropdown-item channel_item" href="sign_up.html">Sign Up</a></li>
                                            <li><a class="dropdown-item channel_item" href="sign_up_steps.html">Sign Up Steps</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Cart & Checkout</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="cart.html">Cart</a></li>
                                            <li><a class="dropdown-item channel_item" href="checkout.html">Checkout</a></li>
                                            <li><a class="dropdown-item channel_item" href="invoice.html">Invoice</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Upload</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="upload.html">Upload</a></li>
                                            <li><a class="dropdown-item channel_item" href="post_a_job.html">Post a Job</a></li>
                                            <li><a class="dropdown-item channel_item" href="add_product.html">Add Product</a></li>
                                            <li><a class="dropdown-item channel_item" href="add_course.html">Add Course</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Products</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="all_products.html">All Products</a></li>
                                            <li><a class="dropdown-item channel_item" href="my_product_detail_view.html">My Product Detail View</a></li>
                                            <li><a class="dropdown-item channel_item" href="product_detail_view.html">Product Detail View</a></li>
                                            <li><a class="dropdown-item channel_item" href="my_portfolio.html">Manage Products</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Courses</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="all_learning.html">All Learning</a></li>
                                            <li><a class="dropdown-item channel_item" href="my_course_detail_view.html">My Course Detail View</a></li>
                                            <li><a class="dropdown-item channel_item" href="course_detail_view.html">Course Detail View</a></li>
                                            <li><a class="dropdown-item channel_item" href="my_courses.html">Manage Courses</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Jobs</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="all_jobs.html">All Jobs</a></li>
                                            <li><a class="dropdown-item channel_item" href="my_job_detail_view.html">My Job Detail View</a></li>
                                            <li><a class="dropdown-item channel_item" href="job_detail_view.html">Job Detail View</a></li>
                                            <li><a class="dropdown-item channel_item" href="my_manage_jobs.html">Manage Jobs</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Profiles</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="my_profile_dashboard.html">My Profile View</a></li>
                                            <li><a class="dropdown-item channel_item" href="user_profile_timeline.html">User Profile View</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Create</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="create.html">Create</a></li>
                                            <li><a class="dropdown-item channel_item" href="create_page.html">Create Page</a></li>
                                            <li><a class="dropdown-item channel_item" href="create_group.html">Create Group</a></li>
                                            <li><a class="dropdown-item channel_item" href="create_event.html">Create Event</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Pages</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="my_page_home.html">My Page Detail View</a></li>
                                            <li><a class="dropdown-item channel_item" href="page_home.html">Page Detail View</a></li>
                                            <li><a class="dropdown-item channel_item" href="suggested_pages.html">Suggested Pages</a></li>
                                            <li><a class="dropdown-item channel_item" href="my_pages.html">My Pages</a></li>
                                            <li><a class="dropdown-item channel_item" href="liked_pages.html">Liked Pages</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Groups</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="my_group_home.html">My Group Detail View</a></li>
                                            <li><a class="dropdown-item channel_item" href="group_home.html">Group Detail View</a></li>
                                            <li><a class="dropdown-item channel_item" href="suggested_groups.html">Suggested Groups</a></li>
                                            <li><a class="dropdown-item channel_item" href="my_groups.html">My Groups</a></li>
                                            <li><a class="dropdown-item channel_item" href="joined_groups.html">Joined Groups</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Events</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="my_event_detail_view.html">My Event Detail View</a></li>
                                            <li><a class="dropdown-item channel_item" href="event_detail_view.html">Event Detail View</a></li>
                                            <li><a class="dropdown-item channel_item" href="discover_events.html">Discover Events</a></li>
                                            <li><a class="dropdown-item channel_item" href="my_events.html">My Events</a></li>
                                            <li><a class="dropdown-item channel_item" href="birthday_events.html">Birthday</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Connections</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="find_connections.html">Find Connections</a></li>
                                            <li><a class="dropdown-item channel_item" href="my_connections.html">My Connections</a></li>
                                            <li><a class="dropdown-item channel_item" href="pending_invitations_received.html">Pending Invitations</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Hashtags</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="following_hashtags.html">Following Hashtags</a></li>
                                            <li><a class="dropdown-item channel_item" href="suggested_hashtags.html">Suggested Hashtags</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Refunds</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="refunds.html">Refunds</a></li>
                                            <li><a class="dropdown-item channel_item" href="request_a_refund.html">Request a Refund</a></li>
                                            <li><a class="dropdown-item channel_item" href="refund_request_open.html">Refund Request Open</a></li>
                                            <li><a class="dropdown-item channel_item" href="refund_request_closed.html">Refund Request Closed</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item channel_item dropdown-page-items" href="#">Forums</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item channel_item" href="forums.html">Our Fourms</a></li>
                                            <li><a class="dropdown-item channel_item" href="forum_topics.html">Forum Topics</a></li>
                                            <li><a class="dropdown-item channel_item" href="forum_topic_view.html">Forum Topic View</a></li>
                                            <li><a class="dropdown-item channel_item" href="forum_topic_reply.html">Reply</a></li>
                                            <li><a class="dropdown-item channel_item" href="create_new_topic.html">Create New Topic</a></li>
                                            <li><a class="dropdown-item channel_item" href="forum_members.html">Forum Members</a></li>
                                            <li><a class="dropdown-item channel_item" href="forum_search.html">Forum Search</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="msg-noti-acnt-section order-2">
                        <ul class="mn-icons-set align-self-stretch">
                            <li class="mn-icon">
                                <a class="mn-link" href="{{ route('messages', auth()->id()) }}" role="button">
                                    <i class="fas fa-envelope"></i>
                                    <div class="alert-circle">
                                        <span class="badge badge-danger nav-link-badge">{{ auth()->user()->unreadMessages() }}</span>
                                    </div>
                                </a>
                            </li>
                            <li class="mn-icon">
                                <a class="mn-link" href="{{ route('notifications') }}" role="button">
                                    <i class="fas fa-bell"></i>
                                    <div class="alert-circle">
                                        <span class="badge badge-danger nav-link-badge">1</span>
                                    </div>
                                </a>
                            </li>
                            <li class="mn-icon dropdown dropdown-account">
                                <a href="#" class="opts_account" role="button" data-bs-toggle="dropdown">
                                    <img src="/assets/images/left-imgs/img-{{ auth()->user()->avatar() }}.jpg" alt="">
                                    <i class="fas fa-caret-down arrow-icon"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-account dropdown-menu-end">
                                    <li class="media-list">
                                        <div class="media">
                                            <div class="media-left">
                                                <img class="ft-plus-square icon-bg-circle bg-cyan mr-0" src="/assets/images/left-imgs/img-{{ auth()->user()->avatar() }}.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading text-16">{{ auth()->user()->getFullName() }}</h6>
                                                <p class="email-text font-small-3"><a href="https://gambolthemes.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e78d88808e89838295a7829f868a978b82c984888a">[email&#160;protected]</a></p>
                                                <a href="my_profile_timeline.html" class="view-p-link font-small-4">View Profile</a>
                                            </div>
                                        </div>
                                        <div class="night_mode_switch__btn">
                                            <a href="#" id="night-mode" class="btn-night-mode">
                                                <i class="far fa-moon"></i>Night mode
                                                <span class="btn-night-mode-switch">
                                                    <span class="uk-switch-button"></span>
                                                </span>
                                            </a>
                                        </div>
                                        <a href="my_profile_dashboard.html" class="item channel_item mt-2">Dashboard</a>
                                        <a href="cart.html" class="item channel_item">Cart<span class="badge-cart">4</span></a>
                                        <a href="upload.html" class="item channel_item">Upload</a>
                                        <a href="create.html" class="item channel_item">Create</a>
                                        <a href="{{ route('settings') }}" class="item channel_item">Setting</a>
                                        <a href="setting_security_privacy_setting.html" class="item channel_item">Privacy</a>
                                        <a href="ads.html" class="item channel_item">Advertising</a>
                                        <a href="help_center.html" class="item channel_item">Help Center</a>
                                        <a href="refunds.html" class="item channel_item">Refunds</a>
                                        <a href="setting_language.html" class="item channel_item mb-2">Language</a>
                                    </li>
                                    <li class="dropdown-menu-footer">
                                        <a class="dropdown-item-link text-link text-center" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                      Logout
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="overlay"></div>
        </div>
    </header>

</div>
