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
                                    <a href="{{ route('friends.request') }}" class="afltr-btn afltr-active">Received</a>
                                    <a href="{{ route('friends.sent') }}" class="afltr-btn">Sent</a>
                                </div>
                                <div class="full-width mb-30">
                                    <div class="my_connections_list">
                                        <div class="cntn_top_filter border-bottom-0">
                                            <h4>{{ $connections->count() }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (session()->has('message'))
                                <div class="col-lg-12 col-md-12 mb-2">
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
                                        @foreach ($connections as $connection)
                                            <div class="jobs-list">
                                                <div class="media invite125 d-md-flex">
                                                    <div class="job-left">
                                                        <img class="ft-plus-square job-bg-circle bg-cyan me-0" src="/assets/images/left-imgs/img-{{ $connection->friend->avatar() }}.jpg" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#" class="job-heading pt-0">{{ $connection->friend->getFullName() }}</a>
                                                        <p class="notification-text font-small-4">
                                                            <a href="#" class="cmpny-dt">Doctor</a>
                                                            <span class="job-loca"><i class="fas fa-location-arrow"></i><ins class="state-name">Delhi,</ins> India</span>
                                                            <a href="#" class="oflst125"><i class="fas fa-user-friends me-2"></i>24 Connections & 5 Mutual</a>
                                                        </p>
                                                    </div>
                                                    <div class="media-btns">
                                                        <button type="button" class="accpt-btn btn-hover accpt-btn-clr" wire:click.prevent="accept('{{ $connection->friend->id }}')">Accept</button>
                                                        <button type="button" class="rcancel-btn" wire:click.prevent="remove('{{ $connection->friend->id }}')"><i class="fas fa-times"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                @if ($connections->count() == 0)
                                    <div class="loading-btn">
                                        <button class="process-btn btn-hover" type="button">
                                            No More Invitations
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
