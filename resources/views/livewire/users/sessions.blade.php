<div>

    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-12">
                @include('layouts.partials.settings-sidebar')
            </div>
            <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="event-card rrmt-30">
                    <div class="headtte14m item-setting-top">
                        <span class="color_bb"><i class="fas fa-shield-alt"></i></span>
                        <h4>Manage Sessions</h4>
                        <a href="#" class="view-link-btn btn-hover" wire:click.prevent="clear"><i class="fas fa-trash me-2"></i>Clear Session</a>
                    </div>
                    <div class="item-setting">
                        <div class="item-padding30 main-form p-0">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    @foreach ($sessions as $session)
                                        <div class="recent-items session-list">
                                            <div class="posts-list">
                                                <div class="feed-shared-author-dt">
                                                    <div class="author-left">
                                                        <div class="session-circle"><i class="fab fa-windows"></i></div>
                                                    </div>
                                                    <div class="author-dts">
                                                        <h4 class="job-heading">{{ $session->user_agent }}</h4>
                                                        <p class="notification-text font-small-4 pt-1">
                                                            {{-- <span class="browser-dt"><i class="fab fa-chrome me-2"></i>Google Chrome</span> --}}
                                                            <span class="time-session-dt">{{ date('M-d-Y, h:i a', strtotime($session->getExpiresAtAttribute())) }}</span>
                                                        </p>
                                                        <p class="notification-text font-small-4 pt-1">
                                                            <span class="ip-address">IP Address: {{ $session->ip_address }}</span>
                                                        </p>
                                                    </div>
                                                    <div class="ellipsis-options post-ellipsis-options">
                                                        <a href="#" class="option-eps" wire:click.prevent="delete('{{ $session->id }}')"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                @if (session()->has('message'))
                                <div class="col-lg-12 col-md-12">
                                    <div class="alert alert-danger alert-action mt-30 mb-0">
                                        <div class="icon">
                                            <i class="fa fa-exclamation-triangle fa-2x"></i>
                                        </div>
                                        <div class="text pt5 text-center">
                                            {{ session('message') }}
                                        </div>
                                    </div>
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
