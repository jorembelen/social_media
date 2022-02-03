<div>

    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-12">
                @include('layouts.partials.settings-sidebar')
            </div>
            <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="event-card rrmt-30">
                    <div class="headtte14m item-setting-top">
                        <span class="color_bb"><i class="fas fa-bell"></i></span>
                        <h4> Notification Settings</h4>
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
                    <div class="item-setting">
                        <div class="item-padding30 main-form">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="noti-setting-content">
                                        <div class="form_group mt-30">
                                            <h6 class="noti-st-title">Notify me when </h6>
                                            <ul class="noti-setting-list">
                                                <li>
                                                    <div class="cta1589">
                                                        <div class="cate-ttle-left">
                                                            <div class="tags_checkbox">
                                                                <input type="checkbox"  id="noti-1" wire:model="like_posts" wire:click.prevent="likePost">
                                                                <label for="noti-1">Someone liked my posts</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cta1589">
                                                        <div class="cate-ttle-left">
                                                            <div class="tags_checkbox">
                                                                <input type="checkbox" id="noti-2" wire:model="commented_posts" wire:click.prevent="commentedPost">
                                                                <label for="noti-2">Someone commented on my posts</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cta1589">
                                                        <div class="cate-ttle-left">
                                                            <div class="tags_checkbox">
                                                                <input type="checkbox" id="noti-3" wire:model="shared_posts" wire:click.prevent="sharedPost">
                                                                <label for="noti-3">Someone shared on my posts</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cta1589">
                                                        <div class="cate-ttle-left">
                                                            <div class="tags_checkbox">
                                                                <input type="checkbox" id="noti-4" wire:model="followed_me" wire:click.prevent="followedMe">
                                                                <label for="noti-4">Someone followed me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cta1589">
                                                        <div class="cate-ttle-left">
                                                            <div class="tags_checkbox">
                                                                <input type="checkbox" id="noti-5" wire:model="liked_pages" wire:click.prevent="likedPages">
                                                                <label for="noti-5">Someone liked my pages</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cta1589">
                                                        <div class="cate-ttle-left">
                                                            <div class="tags_checkbox">
                                                                <input type="checkbox" id="noti-6" wire:model="visited_profile" wire:click.prevent="visitedProfile">
                                                                <label for="noti-6">Someone visited my profile</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cta1589">
                                                        <div class="cate-ttle-left">
                                                            <div class="tags_checkbox">
                                                                <input type="checkbox" id="noti-7" wire:model="mentions" wire:click.prevent="mentions">
                                                                <label for="noti-7">Mentions or tags in posts and comments</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cta1589">
                                                        <div class="cate-ttle-left">
                                                            <div class="tags_checkbox">
                                                                <input type="checkbox" id="noti-8" wire:model="joins" wire:click.prevent="joins">
                                                                <label for="noti-8">Someone joined my groups</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cta1589">
                                                        <div class="cate-ttle-left">
                                                            <div class="tags_checkbox">
                                                                <input type="checkbox" id="noti-9" wire:model="accepted" wire:click.prevent="accepted">
                                                                <label for="noti-9">Someone accepted my friend/follow requset</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                {{-- <li>
                                                    <div class="cta1589">
                                                        <div class="cate-ttle-left">
                                                            <div class="tags_checkbox">
                                                                <input type="checkbox" id="noti-10" checked>
                                                                <label for="noti-10">Someone posted on my timeline</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cta1589">
                                                        <div class="cate-ttle-left">
                                                            <div class="tags_checkbox">
                                                                <input type="checkbox" id="noti-11" checked>
                                                                <label for="noti-11">Chat Message Sound</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cta1589">
                                                        <div class="cate-ttle-left">
                                                            <div class="tags_checkbox">
                                                                <input type="checkbox" id="noti-13" checked>
                                                                <label for="noti-13">Group invitations</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li> --}}
                                                <li>
                                                    <div class="cta1589">
                                                        <div class="cate-ttle-left">
                                                            <div class="tags_checkbox">
                                                                <input type="checkbox" id="noti-12" wire:model="birthdays" wire:click.prevent="birthdays">
                                                                <label for="noti-12">Birthdays in your connections</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



