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
                    <div class="product-items-list pl_item_search">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="btn-8585 mb-20">
                                    <a href="{{ route('friends.list') }}" class="afltr-btn">My Connections</a>
                                    <a href="{{ route('peoples.list') }}" class="afltr-btn afltr-active">Explore</a>
                                </div>
                                <div class="full-width mb-30">
                                    <div class="my_connections_list">
                                        <div class="cntn_top_filter">
                                            <h4>Follow fresh perspectives</h4>
                                        </div>
                                        <div class="cntn_bottom_search">
                                            <div class="row">
                                                <div class="col-lg-10 col-md-8">
                                                    <div class="form_group">
                                                        <input class="form_input_1" type="text" placeholder="Search by name and occupation">
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
                            @foreach ($users as $user)
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="ppuser-card mb-30">
                                        <div class="ppuser-img">
                                            <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/left-imgs/img-{{ $user->avatar() }}.jpg" alt="">
                                        </div>
                                        <a href="#" class="job-heading text-center mb-0">{{ $user->getFullName() }}</a>
                                        <p class="notification-text font-small-4 text-center">
                                            {{-- <a href="#" class="occp-dt">UI / UX Designer</a> --}}
                                            <span class="job-loca">
                                                <i class="fas fa-location-arrow"></i>
                                                <ins class="state-name">{{ $user->userInfo->city ?? null }},</ins> {{ $user->userInfo->country ?? null }}
                                            </span>
                                            <a href="#" class="oflst130"><i class="fas fa-user-friends me-2"></i>36 Connections &amp; 3 Mutual</a>
                                        </p>
                                        @if ($user->pendingFriendRequest() == false)
                                        <button class="act-btn btn-hover" type="button" wire:click.prevent="addFriend('{{ $user->id }}')"><i class="fas fa-user-plus me-2"></i>Connect</button>
                                        @else
                                        <a class="act-btn btn-hover" type="button" href="{{ route('connections') }}"><i class="fas fa-user-plus me-2"></i>Pending Request</a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-md-12">
                                @if ($totalUsers > $amount)
                                <div class="loading-btn">
                                    <div wire:loading.remove wire:target="load">
                                        <button class="process-btn btn-hover" type="button" wire:click="load">
                                            Load More ...
                                        </button>
                                    </div>
                                    <div wire:loading wire:target="load">
                                        <button class="process-btn btn-hover" type="button">
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                    </div>
                                </div>
                                @else

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
