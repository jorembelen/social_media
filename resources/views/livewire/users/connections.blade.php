<div>

    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-12">
                <div class="full-width">
                    <div class="connt-bg dpbg-1">
                        <ul class="friends-harmonic">
                            <li>
                                <a href="#">
                                    <img class="harmonic-img" src="/assets/images/left-imgs/img-2.jpg" loading="lazy" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="harmonic-img" src="/assets/images/left-imgs/img-3.jpg" loading="lazy" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="harmonic-img" src="/assets/images/left-imgs/img-4.jpg" loading="lazy" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="harmonic-img" src="/assets/images/left-imgs/img-5.jpg" loading="lazy" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="harmonic-img" src="/assets/images/left-imgs/img-6.jpg" loading="lazy" alt="friend">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="posted_1590">
                        <div class="count-ttl">{{ auth()->user()->userFriendsCount() }}</div>
                        <div class="cate-post">Connections</div>
                    </div>
                    <div class="manage-section">
                        <span class="manage-title">Manage My Network</span>
                    </div>
                    <ul class="info__sections">
                        <li>
                            <a href="{{ route('friends.list') }}" class="all-info__sections">
                                <span class="all-info__left"><i class="fas fa-users me-2"></i>My Connections</span>
                                <span class="all-info__right">{{ auth()->user()->userFriendsCount() }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('connections') }}" class="all-info__sections">
                                <span class="all-info__left"><i class="fas fa-user-clock me-2"></i>Pending Invitations</span>
                                <span class="all-info__right">{{ auth()->user()->userPendingFriendsCount() }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('friends.request') }}" class="all-info__sections">
                                <span class="all-info__left"><i class="fas fa-user-clock me-2"></i>All Invitations</span>
                                <span class="all-info__right">{{ auth()->user()->userPendingFriendsCount() }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="full-width mt-30 dstp-bnr-dt">
                    <div class="banner-item">
                        <div class="banner-img">
                            <img src="/assets/images/banners/banner-1.jpg" alt="">
                            <div class="banner-overlay">
                                <span>Learning Platform</span>
                                <h4>Keep learning in the moments that matter.</h4>
                                <button class="main-btn color btn-hover">See Courses</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="all-items rrmt-30">
                    <div class="product-items-list">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="full-width mb-30">
                                    <div class="recent-title">
                                        <div class="explore-heading">
                                            <h4>Pending Invitations</h4>
                                        </div>
                                    </div>
                                    @if (session()->has('message'))
                                    <div class="col-lg-12 col-md-12">
                                        <div class="alert alert-danger alert-action mt-10 mb-0">
                                            <div class="icon">
                                                <i class="fa fa-exclamation-triangle"></i>
                                            </div>
                                            <div class="text pt5 text-center">
                                                {{ session('message') }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                    <div class="recent-items">
                                        @foreach ($connections as $connection)
                                            <div class="jobs-list">
                                                <div class="media invite125 d-md-flex">
                                                    <div class="job-left">
                                                        <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/left-imgs/img-{{ $connection->friend->avatar() }}.jpg" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#" class="job-heading pt-0">{{ $connection->friend->getFullName() }}</a>
                                                        <p class="notification-text font-small-4">
                                                            {{-- <a href="#" class="cmpny-dt">Doctor</a>
                                                            <span class="job-loca"><i class="fas fa-location-arrow"></i><ins class="state-name">{{ $connection->friend->userInfo->city ?? null }},</ins> {{ $connection->friend->userInfo->country ?? null }}</span> --}}
                                                            <a href="#" class="oflst125"><i class="fas fa-user-friends me-2"></i>24 Connections & 5 Mutual</a>
                                                        </p>
                                                    </div>
                                                    <div class="media-btns">
                                                        <button type="button" class="accpt-btn btn-hover accpt-btn-clr" wire:click.prevent="accept('{{ $connection->friend->id }}')" >Accept</button>
                                                        <button type="button" class="rcancel-btn" wire:click.prevent="remove('{{ $connection->friend->id }}')"><i class="fas fa-times"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                   @if ($connections->count() > 5)
                                    <div class="profile-link">
                                        <a href="{{ route('friends.request') }}">See All Invitations</a>
                                    </div>
                                   @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="full-width mb-30">
                                    <div class="recent-title">
                                        <div class="explore-heading">
                                            <h4>People You May Know</h4>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="cnnt-list">
                                            <div class="owl-carousel ppl_slider owl-theme">
                                                @foreach ($people as $friend)
                                                    <div class="item">
                                                        <div class="ppuser-card">
                                                            <div class="ppuser-img">
                                                                <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/left-imgs/img-{{ $friend->avatar() }}.jpg" alt="">
                                                            </div>
                                                            <a href="#" class="job-heading text-center">{{ $friend->getFullName() }}</a>
                                                            <p class="notification-text font-small-4 text-center">
                                                                <a href="#" class="occp-dt">UI / UX Designer</a>
                                                                <span class="job-loca">
                                                                    <i class="fas fa-location-arrow"></i>
                                                                    <ins class="state-name">Ludhiana,</ins> India
                                                                </span>
                                                                <a href="#" class="oflst130"><i class="fas fa-user-friends me-2"></i>36 Connections & 3 Mutual</a>
                                                            </p>
                                                            @if ($friend->pendingFriendRequest() == false)
                                                            <button class="act-btn btn-hover" type="button" wire:click.prevent="addFriend('{{ $friend->id }}')"><i class="fas fa-user-plus me-2"></i>Connect</button>
                                                            @else
                                                            <a class="act-btn btn-hover" type="button" href="{{ route('connections') }}"><i class="fas fa-user-plus me-2"></i>Pending Request</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                  @if ($people->count() > 5)
                                    <div class="profile-link">
                                        <a href="{{ route('peoples.list') }}">See All</a>
                                    </div>
                                  @endif
                                </div>
                            </div>

                            {{-- <div class="col-md-12">
                                <div class="full-width mb-30">
                                    <div class="recent-title">
                                        <div class="explore-heading">
                                            <h4>People You May Know</h4>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="cnnt-list">
                                            <div class="owl-carousel ppl_slider owl-theme">
                                                @foreach ($people as $friend)
                                                    <div class="item">
                                                        <div class="ppuser-card">
                                                            <div class="ppuser-img">
                                                                <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/left-imgs/img-{{ $friend->avatar() }}.jpg" alt="">
                                                            </div>
                                                            <a href="#" class="job-heading text-center">{{ $friend->getFullName() }}</a>
                                                            <p class="notification-text font-small-4 text-center">
                                                                <a href="#" class="occp-dt">UI / UX Designer</a>
                                                                <span class="job-loca">
                                                                    <i class="fas fa-location-arrow"></i>
                                                                    <ins class="state-name">Ludhiana,</ins> India
                                                                </span>
                                                                <a href="#" class="oflst130"><i class="fas fa-user-friends me-2"></i>36 Connections & 3 Mutual</a>
                                                            </p>
                                                            @if ($friend->pendingFriendRequest() == false)
                                                            <button class="act-btn btn-hover" type="button" wire:click.prevent="addFriend('{{ $friend->id }}')"><i class="fas fa-user-plus me-2"></i>Connect</button>
                                                            @else
                                                            <a class="act-btn btn-hover" type="button" href="{{ route('connections') }}"><i class="fas fa-user-plus me-2"></i>Pending Request</a>
                                                            @endif
                                                        </div>
                                                    </div
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-link">
                                        <a href="{{ route('peoples.list') }}">See All</a>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-12">
                                <div class="full-width mb-30">
                                    <div class="recent-title">
                                        <div class="explore-heading">
                                            <h4>Suggestion Pages</h4>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="cnnt-list">
                                            <div class="owl-carousel suggest_slider owl-theme">
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <div class="ppuser-img">
                                                            <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/jobs-imgs/img-2.jpg" alt="">
                                                        </div>
                                                        <a href="#" class="job-heading text-center">Envato</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="job-loca hash-loc">
                                                                <i class="fas fa-location-arrow"></i>
                                                                <ins class="state-name">Sydney,</ins> Australia
                                                            </span>
                                                            <span class="oflst126">2M people like this</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button"><i class="fas fa-thumbs-up me-2"></i>Like</button>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <div class="ppuser-img">
                                                            <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/jobs-imgs/img-1.jpg" alt="">
                                                        </div>
                                                        <a href="#" class="job-heading text-center">Gambolthemes</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="job-loca hash-loc">
                                                                <i class="fas fa-location-arrow"></i>
                                                                <ins class="state-name">Ludhiana,</ins> India
                                                            </span>
                                                            <span class="oflst126">12K people like this</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button"><i class="fas fa-thumbs-up me-2"></i>Like</button>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <div class="ppuser-img">
                                                            <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/jobs-imgs/img-3.jpg" alt="">
                                                        </div>
                                                        <a href="#" class="job-heading text-center">Themeforest</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="job-loca hash-loc">
                                                                <i class="fas fa-location-arrow"></i>
                                                                <ins class="state-name">Sydney,</ins> Australia
                                                            </span>
                                                            <span class="oflst126">95K people like this</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button"><i class="fas fa-thumbs-up me-2"></i>Like</button>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <div class="ppuser-img">
                                                            <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/jobs-imgs/img-4.jpg" alt="">
                                                        </div>
                                                        <a href="#" class="job-heading text-center">Codecanyon</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="job-loca hash-loc">
                                                                <i class="fas fa-location-arrow"></i>
                                                                <ins class="state-name">Sydney,</ins> Australia
                                                            </span>
                                                            <span class="oflst126">77K people like this</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button"><i class="fas fa-thumbs-up me-2"></i>Like</button>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <div class="ppuser-img">
                                                            <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/jobs-imgs/img-5.jpg" alt="">
                                                        </div>
                                                        <a href="#" class="job-heading text-center">Graphicriver</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="job-loca hash-loc">
                                                                <i class="fas fa-location-arrow"></i>
                                                                <ins class="state-name">Sydney,</ins> Australia
                                                            </span>
                                                            <span class="oflst126">45K people like this</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button"><i class="fas fa-thumbs-up me-2"></i>Like</button>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <div class="ppuser-img">
                                                            <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/jobs-imgs/img-6.jpg" alt="">
                                                        </div>
                                                        <a href="#" class="job-heading text-center">Webexperts</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="job-loca hash-loc">
                                                                <i class="fas fa-location-arrow"></i>
                                                                <ins class="state-name">Ludhiana,</ins> India
                                                            </span>
                                                            <span class="oflst126">5K people like this</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button"><i class="fas fa-thumbs-up me-2"></i>Like</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-link">
                                        <a href="#">See All</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="full-width mb-30">
                                    <div class="recent-title">
                                        <div class="explore-heading">
                                            <h4>Suggestion Groups</h4>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="cnnt-list">
                                            <div class="owl-carousel group_slider owl-theme">
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <div class="ppuser-img">
                                                            <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/group-imgs/img-1.jpg" alt="">
                                                        </div>
                                                        <a href="#" class="job-heading text-center">Events</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="oflst126">55 Members</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button">Join Group</button>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <div class="ppuser-img">
                                                            <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/group-imgs/img-2.jpg" alt="">
                                                        </div>
                                                        <a href="#" class="job-heading text-center">Php Developers</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="oflst126">152 Members</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button">Join Group</button>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <div class="ppuser-img">
                                                            <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/group-imgs/img-3.jpg" alt="">
                                                        </div>
                                                        <a href="#" class="job-heading text-center">WordPress Developers</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="oflst126">200 Members</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button">Join Group</button>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <div class="ppuser-img">
                                                            <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/group-imgs/img-4.jpg" alt="">
                                                        </div>
                                                        <a href="#" class="job-heading text-center">Laravel Developers</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="oflst126">115 Members</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button">Join Group</button>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <div class="ppuser-img">
                                                            <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/group-imgs/img-5.jpg" alt="">
                                                        </div>
                                                        <a href="#" class="job-heading text-center">Bootstrap Templates</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="oflst126">100 Members</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button">Join Group</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-link">
                                        <a href="#">See All</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="full-width">
                                    <div class="recent-title">
                                        <div class="explore-heading">
                                            <h4>Suggestion Hashtags</h4>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="cnnt-list">
                                            <div class="owl-carousel hash_slider owl-theme">
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <a href="#" class="avtar-link" target="_blank">
                                                            <div class="hash-img"></div>
                                                        </a>
                                                        <a href="#" class="job-heading text-center">WordPress Themes</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="oflst126">856 Followers</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button"><i class="fas fa-plus me-2"></i>Follow</button>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <a href="#" class="avtar-link" target="_blank">
                                                            <div class="hash-img"></div>
                                                        </a>
                                                        <a href="#" class="job-heading text-center">Bootstrap Themes</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="oflst126">486 Followers</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button"><i class="fas fa-plus me-2"></i>Follow</button>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <a href="#" class="avtar-link" target="_blank">
                                                            <div class="hash-img"></div>
                                                        </a>
                                                        <a href="#" class="job-heading text-center">OpenCart Themes</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="oflst126">116 Followers</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button"><i class="fas fa-plus me-2"></i>Follow</button>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <a href="#" class="avtar-link" target="_blank">
                                                            <div class="hash-img"></div>
                                                        </a>
                                                        <a href="#" class="job-heading text-center">Php Scripts</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="oflst126">96 Followers</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button"><i class="fas fa-plus me-2"></i>Follow</button>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <a href="#" class="avtar-link" target="_blank">
                                                            <div class="hash-img"></div>
                                                        </a>
                                                        <a href="#" class="job-heading text-center">Laravel Scripts</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="oflst126">80 Followers</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button"><i class="fas fa-plus me-2"></i>Follow</button>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ppuser-card">
                                                        <a href="#" class="avtar-link" target="_blank">
                                                            <div class="hash-img"></div>
                                                        </a>
                                                        <a href="#" class="job-heading text-center">Learning</a>
                                                        <p class="notification-text font-small-4 text-center">
                                                            <span class="oflst126">66 Followers</span>
                                                        </p>
                                                        <button class="act-btn btn-hover" type="button"><i class="fas fa-plus me-2"></i>Follow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-link">
                                        <a href="#">See All</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
