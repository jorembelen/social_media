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
                        {{-- <li>
                            <a href="my_pages.html" class="all-info__sections">
                                <span class="all-info__left"><i class="fas fa-flag me-2"></i>Pages</span>
                                <span class="all-info__right">15</span>
                            </a>
                        </li>
                        <li>
                            <a href="my_groups.html" class="all-info__sections">
                                <span class="all-info__left"><i class="fas fa-user-friends me-2"></i>Groups</span>
                                <span class="all-info__right">12</span>
                            </a>
                        </li>
                        <li>
                            <a href="following_hashtags.html" class="all-info__sections">
                                <span class="all-info__left"><i class="fas fa-hashtag me-2"></i>Hashtags</span>
                                <span class="all-info__right">6</span>
                            </a>
                        </li>
                        <li>
                            <a href="my_events.html" class="all-info__sections">
                                <span class="all-info__left"><i class="fas fa-calendar-check me-2"></i>Events</span>
                                <span class="all-info__right">1</span>
                            </a>
                        </li> --}}
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
                    <div class="product-items-list pl_item_search">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="btn-8585 mb-20">
                                    <a href="{{ route('friends.list') }}" class="afltr-btn afltr-active">My Connections</a>
                                    <a href="{{ route('peoples.list') }}" class="afltr-btn">Explore</a>
                                </div>
                                <div class="full-width mb-30">
                                    <div class="my_connections_list">
                                        <div class="cntn_top_filter">
                                            <h4>{{ auth()->user()->userFriendsCount() }} Connections</h4>
                                            <div class="sorting-filter-select">
                                                <select class="sorting-select">
                                                    <option value="0" selected>Recent Added</option>
                                                    <option value="1">First Name</option>
                                                    <option value="2">Last Name</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="cntn_bottom_search">
                                            <div class="row">
                                                <div class="col-lg-10 col-md-8">
                                                    <div class="form_group">
                                                        <input class="form_input_1" type="text" placeholder="Search by name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4">
                                                    <button class="post-link-btn color btn-hover w-100 rmt-10">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                            <div class="col-md-12">
                                <div class="full-width mb-30">
                                    <div class="recent-items">
                                        @foreach ($friends as $friend)
                                            <div class="jobs-list">
                                                <div class="media invite125 d-md-flex">
                                                    <div class="job-left">
                                                        <img class="ft-plus-square job-bg-circle bg-cyan mr-0" src="/assets/images/left-imgs/img-{{ $friend->avatar() }}.jpg" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#" class="job-heading pt-0">{{ $friend->getFullName() }}</a>
                                                        <p class="notification-text font-small-4">
                                                            {{-- <a href="#" class="cmpny-dt">Doctor</a>
                                                            <span class="job-loca"><i class="fas fa-location-arrow"></i><ins class="state-name">Delhi,</ins> India</span> --}}
                                                            <span class="cnttme125">Connected {{ $friend->last_seen->diffForHumans() }}</span>
                                                        </p>
                                                    </div>
                                                    <div class="media-btns">
                                                        <button type="button" class="accpt-btn btn-hover accpt-btn-clr" onclick="window.location='{{ route('messages', auth()->id()) }}'">Message</button>
                                                        <button type="button" class="rcancel-btn remove_connection" title="Remove Connection" wire:click.prevent="delete('{{ $friend->id }}')"><i class="fas fa-trash-alt"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="loading-btn">
                                    <button class="process-btn btn-hover" type="button">
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
