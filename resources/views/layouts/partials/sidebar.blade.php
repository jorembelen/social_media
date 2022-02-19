
    <aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-12">
        <div class="full-width rrmt-30 lgmt-30">
            <div class="user-profile">
                <div class="username-dt dpbg-1">
                    <div class="usr-pic" wire:ignore>
                        <img src="/assets/images/left-imgs/img-{{ auth()->user()->avatar() }}.jpg" alt="">
                    </div>
                </div>
                <div class="username-main-dt">
                    <h4>{{ auth()->user()->getFullName() }}</h4>
                    {{-- <span>{{ auth()->user()->email }}</span> --}}
                </div>
                {{-- <div class="user-info__badges">
                    <ul class="badges">
                        <li>
                            <span class="community-badges__badge-wrapper--s community-badges__badge-wrapper--responsive-xs ">
                                <img src="/assets/images/badges/master.svg" alt="Earned more than $64k" class="community-badges__badge--s" title="Earned more than $64k">
                            </span>
                        </li>
                        <li>
                            <span class="community-badges__badge-wrapper--s community-badges__badge-wrapper--responsive-xs ">
                                <img src="/assets/images/badges/trending.svg" alt="Trending" class="community-badges__badge--s" title="Trending">
                            </span>
                        </li>
                        <li>
                            <span class="community-badges__badge-wrapper--s community-badges__badge-wrapper--responsive-xs ">
                                <img src="/assets/images/badges/verified.svg" alt="Verified" class="community-badges__badge--s" title="Verified">
                            </span>
                        </li>
                        <li>
                            <span class="community-badges__badge-wrapper--s community-badges__badge-wrapper--responsive-xs ">
                                <img src="/assets/images/badges/featured.svg" alt="Featured item" class="community-badges__badge--s" title="Featured item">
                            </span>
                        </li>
                        <li>
                            <span class="community-badges__badge-wrapper--s community-badges__badge-wrapper--responsive-xs ">
                                <img src="/assets/images/badges/bundle_templates.svg" alt="Bundle Templates" class="community-badges__badge--s" title="Bundle Templates">
                            </span>
                        </li>
                        <li>
                            <span class="community-badges__badge-wrapper--s community-badges__badge-wrapper--responsive-xs ">
                                <img src="/assets/images/badges/human_radio.svg" alt="Radioman" class="community-badges__badge--s" title="Radioman">
                            </span>
                        </li>
                        <li>
                            <span class="community-badges__badge-wrapper--s community-badges__badge-wrapper--responsive-xs ">
                                <img src="/assets/images/badges/bundle_courses.svg" alt="Bundle Courses" class="community-badges__badge--s" title="Bundle Courses">
                            </span>
                        </li>
                        <li>
                            <span class="community-badges__badge-wrapper--s community-badges__badge-wrapper--responsive-xs ">
                                <img src="/assets/images/badges/octopus.svg" alt="Octopus" class="community-badges__badge--s" title="Octopus">
                            </span>
                        </li>
                        <li>
                            <span class="community-badges__badge-wrapper--s community-badges__badge-wrapper--responsive-xs ">
                                <img src="/assets/images/badges/tech_guru.svg" alt="Tech Guy" class="community-badges__badge--s" title="Tech Guy">
                            </span>
                        </li>
                        <li>
                            <span class="community-badges__badge-wrapper--s community-badges__badge-wrapper--responsive-xs ">
                                <img src="/assets/images/badges/gift.svg" alt="Micko Gift" class="community-badges__badge--s" title="Micko Gift">
                            </span>
                        </li>
                        <li>
                            <span class="community-badges__badge-wrapper--s community-badges__badge-wrapper--responsive-xs ">
                                <img src="/assets/images/badges/community_health.svg" alt="Community Health" class="community-badges__badge--s" title="Community Health">
                            </span>
                        </li>
                        <li>
                            <span class="community-badges__badge-wrapper--s community-badges__badge-wrapper--responsive-xs ">
                                <img src="/assets/images/badges/likes.svg" alt="100+ Likes" class="community-badges__badge--s" title="100+ Likes">
                            </span>
                        </li>
                        <li>
                            <span class="community-badges__badge-wrapper--s community-badges__badge-wrapper--responsive-xs ">
                                <img src="/assets/images/badges/followers.svg" alt="500+ Followers" class="community-badges__badge--s" title="500+ Followers">
                            </span>
                        </li>
                    </ul>
                </div> --}}
                <div class="user-info__sections">
                    <ul class="info__sections">
                        <li>
                            <div class="all-info__sections">
                                <span class="all-info__left">Profile Views</span>
                                <span class="all-info__right">92</span>
                            </div>
                        </li>
                        <li>
                            <div class="all-info__sections">
                                <span class="all-info__left">Followers</span>
                                <span class="all-info__right">50</span>
                            </div>
                        </li>
                        <li>
                            <div class="all-info__sections">
                                <span class="all-info__left">Following</span>
                                <span class="all-info__right">120</span>
                            </div>
                        </li>
                        {{-- <li>
                            <div class="all-info__sections">
                                <span class="all-info__left">Post Jobs</span>
                                <span class="all-info__right">5</span>
                            </div>
                        </li>
                        <li>
                            <div class="all-info__sections">
                                <span class="all-info__left">Products</span>
                                <span class="all-info__right">12</span>
                            </div>
                        </li>
                        <li>
                            <div class="all-info__sections">
                                <span class="all-info__left">Courses</span>
                                <span class="all-info__right">10</span>
                            </div>
                        </li>
                        <li>
                            <div class="all-info__sections">
                                <span class="all-info__left">Pages</span>
                                <span class="all-info__right">2</span>
                            </div>
                        </li> --}}
                    </ul>
                </div>
                <div class="profile-link">
                    <a href="my_profile_timeline.html">Profile View</a>
                </div>
            </div>
        </div>
        {{-- <div class="full-width mt-30 mb-30">
            <div class="user-profile">
                <div class="explore-heading">
                    <h4>Explore</h4>
                </div>
                <div class="explore-dt">
                    <h6>Recent</h6>
                </div>
                <div class="user-info__sections">
                    <ul class="info__sections">
                        <li>
                            <div class="all-info__sections">
                                <a href="#" class="all-info__left"><i class="fas fa-hashtag me-2 hash-color"></i>marketresearch</a>
                            </div>
                        </li>
                        <li>
                            <div class="all-info__sections">
                                <a href="#" class="all-info__left"><i class="fas fa-hashtag me-2 hash-color"></i>mobilecommerce</a>
                            </div>
                        </li>
                        <li>
                            <div class="all-info__sections">
                                <a href="#" class="all-info__left"><i class="fas fa-hashtag me-2 hash-color"></i>law</a>
                            </div>
                        </li>
                        <li>
                            <div class="all-info__sections">
                                <a href="#" class="all-info__left"><i class="fas fa-hashtag me-2 hash-color"></i>cars</a>
                            </div>
                        </li>
                        <li>
                            <div class="all-info__sections">
                                <a href="#" class="all-info__left"><i class="fas fa-hashtag me-2 hash-color"></i>wordpressthemes</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="explore-dt pt-0">
                    <h6>Groups</h6>
                </div>
                <div class="user-info__sections">
                    <ul class="info__sections">
                        <li>
                            <div class="all-info__sections">
                                <a href="#" class="all-info__left pt_5"><i class="fas fa-users me-2 hash-color"></i>Events</a>
                                <button class="all-info__right add-btn request-btn" title="Add Group"><i class="fas fa-plus"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="explore-dt pt-0">
                    <h6>Pages</h6>
                </div>
                <div class="user-info__sections">
                    <ul class="info__sections">
                        <li>
                            <div class="all-info__sections">
                                <a href="#" class="all-info__left"><i class="fas fa-flag me-2 hash-color"></i>Gambolthemes</a>
                            </div>
                        </li>
                        <li>
                            <div class="all-info__sections">
                                <a href="#" class="all-info__left"><i class="fas fa-flag me-2 hash-color"></i>Envato</a>
                            </div>
                        </li>
                        <li>
                            <div class="all-info__sections">
                                <a href="#" class="all-info__left"><i class="fas fa-flag me-2 hash-color"></i>Themeforest</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="explore-dt pt-0">
                    <h6>Followed Hashtags</h6>
                </div>
                <div class="user-info__sections">
                    <ul class="info__sections">
                        <li>
                            <div class="all-info__sections">
                                <a href="#" class="all-info__left"><i class="fas fa-hashtag me-2 hash-color"></i>Themeforest</a>
                            </div>
                        </li>
                        <li>
                            <div class="all-info__sections">
                                <a href="#" class="all-info__left"><i class="fas fa-hashtag me-2 hash-color"></i>Templates</a>
                            </div>
                        </li>
                        <li>
                            <div class="all-info__sections">
                                <a href="#" class="all-info__left"><i class="fas fa-hashtag me-2 hash-color"></i>Phpscripts</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="profile-link">
                    <a href="find_connections.html">Explore More</a>
                </div>
            </div>
        </div> --}}
    </aside>
    <aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
        {{-- <div class="full-width mb-30 rrmt-30 lgmt-30">
            <div class="user-profile">
                <div class="explore-heading">
                    <h4>Top Companies</h4>
                </div>
                <div class="user-info__sections">
                    <ul class="info__sections p-0">
                        <li class="broswe-member-container ember-view">
                            <a href="#" class="browse-profile">
                                <img class="broswse-member-image" src="/assets/images/jobs-imgs/img-2.jpg" alt="">
                                <div class="browse-member-detail">
                                    <h4 class="browse-member-name">Envato</h4>
                                    <span class="browse-member-headline">2M Followers</span>
                                </div>
                            </a>
                            <div class="browse-member-btn">
                                <button class="all-info__right add-btn request-btn" title="Add Group"><i class="fas fa-plus"></i></button>
                            </div>
                        </li>
                        <li class="broswe-member-container ember-view">
                            <a href="#" class="browse-profile">
                                <img class="broswse-member-image" src="/assets/images/jobs-imgs/img-1.jpg" alt="">
                                <div class="browse-member-detail">
                                    <h4 class="browse-member-name">Gambolthemes</h4>
                                    <span class="browse-member-headline">12K Followers</span>
                                </div>
                            </a>
                            <div class="browse-member-btn">
                                <button class="all-info__right add-btn request-btn" title="Add Group"><i class="fas fa-plus"></i></button>
                            </div>
                        </li>
                        <li class="broswe-member-container ember-view">
                            <a href="#" class="browse-profile">
                                <img class="broswse-member-image" src="/assets/images/jobs-imgs/img-3.jpg" alt="">
                                <div class="browse-member-detail">
                                    <h4 class="browse-member-name">Themeforest</h4>
                                    <span class="browse-member-headline">95K Followers</span>
                                </div>
                            </a>
                            <div class="browse-member-btn">
                                <button class="all-info__right add-btn request-btn" title="Add Group"><i class="fas fa-plus"></i></button>
                            </div>
                        </li>
                        <li class="broswe-member-container ember-view">
                            <a href="#" class="browse-profile">
                                <img class="broswse-member-image" src="/assets/images/jobs-imgs/img-4.jpg" alt="">
                                <div class="browse-member-detail">
                                    <h4 class="browse-member-name">Codecanyon</h4>
                                    <span class="browse-member-headline">77K Followers</span>
                                </div>
                            </a>
                            <div class="browse-member-btn">
                                <button class="all-info__right add-btn request-btn" title="Add Group"><i class="fas fa-plus"></i></button>
                            </div>
                        </li>
                        <li class="broswe-member-container ember-view">
                            <a href="#" class="browse-profile">
                                <img class="broswse-member-image" src="/assets/images/jobs-imgs/img-5.jpg" alt="">
                                <div class="browse-member-detail">
                                    <h4 class="browse-member-name">Graphicriver</h4>
                                    <span class="browse-member-headline">45K Followers</span>
                                </div>
                            </a>
                            <div class="browse-member-btn">
                                <button class="all-info__right add-btn request-btn" title="Add Group"><i class="fas fa-plus"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="profile-link">
                    <a href="suggested_pages.html">View All Companies</a>
                </div>
            </div>
        </div> --}}
        <div class="full-width mb-30">
            <div class="user-profile">
                <div class="explore-heading">
                    <h4>People you may know</h4>
                </div>
                <div class="user-info__sections" wire:ignore>
                    <ul class="info__sections p-0">
                        @foreach ($users as $user)
                            <li class="broswe-member-container ember-view">
                                <a href="#" class="browse-profile">
                                    <img class="broswse-member-image" src="/assets/images/left-imgs/img-{{ $user->avatar() }}.jpg" alt="">
                                    <div class="browse-member-detail">
                                        <h4 class="browse-member-name">{{ $user->getFullName() }}</h4>
                                        <span class="browse-member-headline">0 mutual friends</span>
                                    </div>
                                </a>

                                @if ($user->pendingFriendRequest() == false)
                                    <div class="browse-member-btn">
                                        <button class="all-info__right add-btn request-btn" title="Add Friend" wire:click.prevent="addFriend('{{ $user->id }}')"><i class="fas fa-user-plus"></i></button>
                                    </div>
                                @endif
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="profile-link">
                    <a href="{{ route('peoples.list') }}">View All Peoples</a>
                </div>
            </div>
        </div>
        <div class="full-width mb-30 dstp-bnr-dt">
            <div class="banner-item">
                <div class="banner-img">
                    <img src="/assets/images/banners/banner-1.jpg" alt="">
                    <div class="banner-overlay">
                        <span>Learning Plateform</span>
                        <h4>Keep learning in the moments that matter.</h4>
                        <button class="main-btn color btn-hover" onclick="window.location.href='all_learning.html'">See Courses</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-width mb-30 res-bnr-dt">
            <div class="responsive-banner">
                <span>Learning Platform</span>
                <h4>Keep learning in the moments that matter.</h4>
                <button class="main-btn color btn-hover" onclick="window.location.href='all_learning.html'">See Courses</button>
            </div>
        </div>
    </aside>
