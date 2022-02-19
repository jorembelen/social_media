
<div>


    <div class="container">
        <div class="row">

            <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">


                <div class="full-width mb-30">
                    <div class="home-upload-links">
                        <a href="#" class="home-upload-cate" wire:click.prevent="addPost"><i class="fas fa-edit"></i>Add Post</a>
                        {{-- <a href="post_a_job.html" class="home-upload-cate"><i class="fas fa-briefcase"></i>Post a Job</a>
                        <a href="add_product.html" class="home-upload-cate"><i class="fas fa-shopping-cart"></i>Add Product</a>
                        <a href="#" class="home-upload-cate add_course_popup"><i class="fas fa-book"></i>Add Course</a> --}}
                    </div>
                </div>



                @if (session()->has('message'))
                <div class="col-lg-12 col-md-12">
                    <div class="alert alert-danger alert-action mt-4 mb-4">
                        <div class="icon">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="text pt5 text-center">
                            {{ session('message') }}
                        </div>
                    </div>
                </div>
                @endif
                {{-- <div class="full-width mb-30">
                    <div class="recent-title">
                        <div class="explore-heading">
                            <h4>Recent Jobs </h4>
                            <div class="ellipsis-options dropdown dropdown-account">
                                <a href="#" class="option-eps" role="button" data-bs-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                <ul class="dropdown-menu dropdown-ellipsis dropdown-menu-end">
                                    <li class="media-list">
                                        <a href="#" class="item channel_item">Hide</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="recent-items">
                        <div class="jobs-list">
                            <div class="media">
                                <div class="job-left">
                                    <img class="ft-plus-square job-bg-circle bg-cyan mr-0" src="/assets/images/jobs-imgs/img-1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="job_detail_view.html" class="job-heading">Php Developer</a>
                                    <p class="notification-text font-small-4">
                                        <a href="#" class="cmpny-dt">Gambolthemes</a>
                                        <span class="job-loca"><i class="fas fa-location-arrow"></i>Ludhiana, India</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="jobs-list">
                            <div class="media">
                                <div class="job-left">
                                    <img class="ft-plus-square job-bg-circle bg-cyan mr-0" src="/assets/images/jobs-imgs/img-1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="job_detail_view.html" class="job-heading">Wordpress Developer</a>
                                    <p class="notification-text font-small-4 text-muted-1">
                                        <a href="#" class="cmpny-dt">Gambolthemes</a>
                                        <span class="job-loca"><i class="fas fa-location-arrow"></i>Ludhiana, India</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="jobs-list">
                            <div class="media">
                                <div class="job-left">
                                    <img class="ft-plus-square job-bg-circle bg-cyan mr-0" src="/assets/images/jobs-imgs/img-2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="job_detail_view.html" class="job-heading">UI / UX Designer</a>
                                    <p class="notification-text font-small-4 text-muted-1">
                                        <a href="#" class="cmpny-dt">Envato</a>
                                        <span class="job-loca"><i class="fas fa-location-arrow"></i>Melbourne, Australia</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-link">
                        <a href="all_jobs.html">See More Jobs</a>
                    </div>
                </div>
                <div class="full-width mb-30">
                    <div class="recent-items">
                        <div class="posts-list">
                            <div class="feed-shared-author-dt">
                                <div class="author-dts">
                                    <a href="job_detail_view.html" class="job-heading">Php Developer</a>
                                    <p class="notification-text font-small-4">
                                        <span class="job-loca"><i class="fas fa-location-arrow ml-0"></i>Ludhiana, India</span>
                                    </p>
                                </div>
                                <div class="ellipsis-options ads-options">
                                    <span class="ad-text">Ad</span>
                                    <div class="dropdown dropdown-account">
                                        <a href="#" class="option-eps" role="button" data-bs-toggle="dropdown"><i class="fas fa-window-close"></i></a>
                                        <ul class="dropdown-menu dropdown-ads dropdown-menu-end">
                                            <li class="media-list">
                                                <span class="ad-title">Why are you reporting this?</span>
                                                <a href="#" class="item channel_item">I think it's annoying or not interesting</a>
                                                <a href="#" class="item channel_item">I have seen the same ad too often</a>
                                                <a href="#" class="item channel_item">I think it's something else</a>
                                                <a href="#" class="item channel_item">Manage ad preferences</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="feed-shared-dt-1">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel urna.</p>
                                <span class="ads-job-price-rang">From $25K - $45K Annual</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
                @foreach ($posts as $post)
                <div class="full-width mb-30">
                    <div class="recent-items">
                        <div class="posts-list">
                            <div class="feed-shared-author-dt">
                                <div class="author-left" wire:ignore>
                                    <a href="#"><img class="ft-plus-square job-bg-circle bg-cyan mr-0" src="/assets/images/left-imgs/img-{{ $post->user->avatar() }}.jpg" alt=""></a>
                                </div>
                                <div class="author-dts">
                                    <a href="#" class="job-heading">{{ $post->user->getFullName() }}</a>
                                    <p class="notification-text font-small-4">
                                        <span class="time-dt">{{ $post->created_at->diffForHumans() }}</span>
                                        {{-- <span class="job-loca"><i class="fas fa-location-arrow"></i><ins class="state-name">{{ $post->user->userInfo->city ?? null }},</ins>{{ $post->user->userInfo->country ?? null }}</span> --}}
                                    </p>
                                </div>
                                <div class="ellipsis-options post-ellipsis-options dropdown dropdown-account">
                                    <a href="#" class="option-eps" role="button" data-bs-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu dropdown-ellipsis dropdown-menu-end">
                                        <li class="media-list">
                                            <a href="#" class="item channel_item"><i class="fas fa-eye-slash icon-mr1"></i>Hide this post</a>
                                            <a href="#" class="item channel_item"><i class="far fa-bookmark icon-mr1"></i>Save</a>
                                            <a href="#" class="item channel_item"><i class="fas fa-link icon-mr1"></i>Copy Link</a>
                                            <a href="#" class="item channel_item"><i class="fas fa-times-circle icon-mr1"></i>Unfollow John</a>
                                            <a href="#" class="item channel_item"><i class="fas fa-flag icon-mr1"></i>Report this post</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="post-meta">
                            <div class="feed-shared-dt-1">
                                <p class="mb-0">{{ $post->content }}</p>
                                @if ($post->image)
                                    <div class="post-img">
                                        <img src="{{ $post->image_url }}" alt="">
                                    </div>
                                @endif
                            </div>
                            <div class="feed-shared-result">
                                <ul class="social-counts">
                                    <li class="social-counts-items">
                                        <button class="social-dts-social-counts__count-value">Likes<span class="social-counts-reactions-count">{{ $post->postLikesCount() }}</span></button>
                                    </li>
                                    <li class="social-counts-items">
                                        <button class="social-dts-social-counts__count-value all_comments">Comments<span class="social-counts-reactions-count">{{ $post->postCommentsCount() }}</span></button>
                                    </li>
                                    {{-- <li class="social-counts-items">
                                        <button class="social-dts-social-counts__count-value">Share<span class="social-counts-reactions-count">3</span></button>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="feed-shared-social-actions">
                                <div class="reactions-button-left">
                                    @if ($post->userLikePost() == true)
                                    <button class="react-button__trigger action-btn" wire:click.prevent="unLike('{{ $post->id }}')"><i class="fas fa-thumbs-up icon-mr" style="color:blue"></i>Like</button>
                                    @else
                                    <button class="react-button__trigger action-btn" wire:click.prevent="like('{{ $post->id }}')"><i class="fas fa-thumbs-up icon-mr"></i>Like</button>
                                    @endif
                                    @if ($commentId == $post->id)
                                    <button class="react-button__comment action-btn leave_a_comment" wire:click.prevent="hideComment({{ $post->id }})"><i class="fas fa-comment-alt icon-mr"></i>Comment</button>
                                    @else
                                    <button class="react-button__comment action-btn leave_a_comment" wire:click.prevent="showComment({{ $post->id }})"><i class="fas fa-comment-alt icon-mr"></i>Comment</button>
                                    @endif
                                </div>
                                {{-- <div class="reactions-button-right">
                                    <button class="react-button__share action-btn"><i class="fas fa-share-alt icon-mr"></i>Share</button>
                                </div> --}}
                            </div>
                        </div>
                        <div class="main-comment-section" wire:ignore.self>
                                @php
                                    $postComments = \App\Models\PostComment::with(['user', 'post'])->wherepost_id($post->id)->take($commentDisplay)->latest()->get();
                                    $totalComment = $post->comments->pluck('id')->count();
                                @endphp
                            @if ($commentId == $post->id)
                                <ul class="we-comment-dt">
                                    @foreach ($postComments as $comment)
                                    <li>
                                        <div class="comet-avatar" wire:ignore>
                                            <img src="/assets/images/left-imgs/img-{{ $comment->user->avatar() }}.jpg" alt="">
                                        </div>
                                        <div class="we-comment">
                                            <a href="#" title="" class="user-name">{{ $comment->user->getFullName() }}</a>
                                            <p>{{ $comment->content }}</p>
                                            <div class="inline-itms">
                                                <span>{{ $comment->created_at->diffForHumans() }}</span>
                                                <a class="we-reply" href="#" title="Reply" wire:click.prevent="replyComment('{{ $comment->id }}')"><i class="fa fa-reply"></i></a>
                                                @if ($comment->userLikePostComment() == true)
                                                <a href="#" title="" wire:click.prevent="commentUnlike({{ $comment->id }})"><i class="fas fa-thumbs-up" style="color:blue"></i>
                                                    @else
                                                    <a href="#" title="" wire:click.prevent="commentLike({{ $comment->id }})"><i class="fas fa-thumbs-up"></i>
                                                        @endif
                                                        <span class="social-counts-reactions-count">{{ $comment->postCommentLikesCount() }}</span>
                                                    </a>
                                                </div>

                                            </div>

                                                {{-- This is the comment reply area --}}
                                                @php
                                                    $commentReply = \App\Models\PostCommentReply::with(['user'])->wherepost_comment_id($comment->id)->get();
                                                @endphp

                                                @foreach ($commentReply as $data)
                                                    <div class="comet-avatar" wire:ignore>
                                                            <img src="/assets/images/left-imgs/img-{{ $data->user->avatar() }}.jpg" alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <a href="#" title="" class="user-name">{{ $data->user->getFullName() }} replied</a>
                                                        <p>{{ $data->content }}</p>
                                                        <div class="inline-itms">
                                                            <span>{{ $data->created_at->diffForHumans() }}</span>
                                                        </div>
                                                    </div>
                                                @endforeach


                                                {{-- Write you reply here --}}
                                                @if ($reply == $comment->id)
                                                <div class="post-commet-textarea mt-2">
                                                    <div class="post-base-1 post_comment_combo">
                                                        <div class="post-base-1">
                                                            <textarea class="auto-resize comment-textarea textarea" placeholder="Write a reply" autocomplete="off" wire:model.lazy="comReply"></textarea>
                                                            @error('comReply') <span class="text-danger">{{ $message }}</span> @enderror
                                                            <div class="post-base-1 comment_option_footer">
                                                                {{-- <div class="img-add">
                                                                    <input type="file" id="file4">
                                                                    <label for="file4"><i class="fas fa-image"></i></label>
                                                                </div> --}}
                                                                <div class="emoji-panel">
                                                                    <button class="emoji-combo"><i class="fas fa-paper-plane" wire:click.prevent="addComReply('{{ $comment->id }}')"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif

                                            </li>
                                            @endforeach
                                            @if ($totalComment > $commentDisplay)
                                            <li>
                                                <div class="viewcmnts">
                                                    <span class="pointer" wire:click.prevent="loadComment">View more comments</span>
                                                </div>
                                            </li>
                                            @endif
                                            <li>
                                                <div class="post-commet-textarea">
                                                    <div class="post-base-1 post_comment_combo">
                                                        <img src="/assets/images/left-imgs/img-3.jpg" alt="">
                                                        <div class="post-base-1">
                                                            <textarea class="auto-resize comment-textarea textarea" placeholder="Write a comment" autocomplete="off" wire:model.lazy="content"></textarea>
                                                            <div class="post-base-1 comment_option_footer">

                                                                <div class="emoji-panel">
                                                                    <button class="emoji-combo"><i class="fas fa-paper-plane" wire:click.prevent="addComment('{{ $post->id }}')"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @if (session()->has('content')) <span class="text-danger text-center">  {{ session('content') }}</span> @endif
                                        </ul>
                            @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="full-width mb-30">
                            <div class="recent-title">
                                <div class="explore-heading">
                                    <h4>Recent Products</h4>
                                    <div class="ellipsis-options dropdown dropdown-account">
                                        <a href="#" class="option-eps" role="button" data-bs-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                        <ul class="dropdown-menu dropdown-ellipsis dropdown-menu-end">
                                            <li class="media-list">
                                                <a href="#" class="item channel_item">Hide</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-items">
                                <div class="jobs-list">
                                    <div class="product-item">
                                        <div class="product-left">
                                            <a href="product_detail_view.html"><img class="ft-plus-square product-bg-circle bg-cyan mr-0" src="/assets/images/products-imgs/img-2.jpg" alt=""></a>
                                        </div>
                                        <div class="product-body">
                                            <a href="product_detail_view.html" class="job-heading pt-0">Cursus - LMS & Online Courses Marketplace HTML Template</a>
                                            <p class="notification-text font-small-4">
                                                <a href="#" class="cmpny-dt2">Gambolthemes</a>
                                                <span class="product-price">$18</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="product-left">
                                            <a href="product_detail_view.html"><img class="ft-plus-square product-bg-circle bg-cyan mr-0" src="/assets/images/products-imgs/img-5.jpg" alt=""></a>
                                        </div>
                                        <div class="product-body">
                                            <a href="product_detail_view.html" class="job-heading pt-0">Jobby - Job Portal Multi-Purpose Marketplace HTML Template</a>
                                            <p class="notification-text font-small-4">
                                                <a href="#" class="cmpny-dt2">Gambolthemes</a>
                                                <span class="product-price">$20</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="product-left">
                                            <a href="product_detail_view.html"><img class="ft-plus-square product-bg-circle bg-cyan mr-0" src="/assets/images/products-imgs/img-4.jpg" alt=""></a>
                                        </div>
                                        <div class="product-body">
                                            <a href="product_detail_view.html" class="job-heading pt-0">Goeveni - Event Sharing Social Network Html Template</a>
                                            <p class="notification-text font-small-4">
                                                <a href="#" class="cmpny-dt2">Gambolthemes</a>
                                                <span class="product-price">$20</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-link">
                                <a href="all_products.html">See More Products</a>
                            </div>
                        </div>
                        <div class="full-width mb-30">
                            <div class="recent-title">
                                <div class="explore-heading">
                                    <h4>Recent Courses</h4>
                                    <div class="ellipsis-options dropdown dropdown-account">
                                        <a href="#" class="option-eps" role="button" data-bs-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                        <ul class="dropdown-menu dropdown-ellipsis dropdown-menu-end">
                                            <li class="media-list">
                                                <a href="#" class="item channel_item">Hide</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-items">
                                <div class="jobs-list">
                                    <div class="product-item">
                                        <div class="product-left course-img">
                                            <a href="course_detail_view.html"><img class="ft-plus-square product-bg-circle bg-cyan mr-0" src="/assets/images/courses-imgs/img-2.jpg" alt=""></a>
                                            <div class="timing">12 hours</div>
                                        </div>
                                        <div class="product-body">
                                            <a href="course_detail_view.html" class="job-heading pt-0">The Complete JavaScript Course 2020: Build Real Projects!</a>
                                            <p class="notification-text font-small-4">
                                                <a href="#" class="ccate-dt">Development</a>
                                                <a href="#" class="ccate-dt1">JavaScript</a>
                                                <span class="product-price">$12</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="product-left course-img">
                                            <a href="course_detail_view.html"><img class="ft-plus-square product-bg-circle bg-cyan mr-0" src="/assets/images/courses-imgs/img-6.jpg" alt=""></a>
                                            <div class="timing">6 hours</div>
                                        </div>
                                        <div class="product-body">
                                            <a href="course_detail_view.html" class="job-heading pt-0">Angular 8 - The Complete Guide(2020 Edition)</a>
                                            <p class="notification-text font-small-4">
                                                <a href="#" class="ccate-dt">Development</a>
                                                <a href="#" class="ccate-dt1">Angular</a>
                                                <span class="product-price">$8</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="product-left course-img">
                                            <a href="course_detail_view.html"><img class="ft-plus-square product-bg-circle bg-cyan mr-0" src="/assets/images/courses-imgs/img-20.jpg" alt=""></a>
                                            <div class="timing">8 hours</div>
                                        </div>
                                        <div class="product-body">
                                            <a href="course_detail_view.html" class="job-heading pt-0">WordPress Development - Themes, Plugins & Gutenberg</a>
                                            <p class="notification-text font-small-4">
                                                <a href="#" class="ccate-dt">Development</a>
                                                <a href="#" class="ccate-dt1">WordPress</a>
                                                <span class="product-price">$20</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-link">
                                <a href="all_learning.html">See More Courses</a>
                            </div>
                        </div> --}}

                        @if ($allPost > $amount)
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


                    </main>
                    @include('layouts.partials.sidebar')

                </div>
            </div>




        <div class="modal" tabindex="-1" id="addModal" wire:ignore.self>
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Post</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="add-post-section lead emoji-picker-container">
                        <div class="add-textarea-dt">
                            <textarea class="add-post-textarea" placeholder="Share your thoughts..." wire:model.lazy="content"></textarea>
                            @error('content') <span class="text-danger" style="font-size: 15px;">{{ $message }}</span> @enderror <br>
                            @error('image') <span class="text-danger" style="font-size: 15px;">{{ $message }}</span> @enderror
                        </div>
                        <div class="add-post-items">
                            <div class="add-left-items">
                                <ul>
                                    <li>
                                        <div class="upload-icon">
                                            <input type="file" id="file1" wire:model="image">
                                            <label for="file1" title="Image"><i class="fas fa-camera"></i>
                                                <span class="icon-text">
                                                    @if ($image)
                                                    {{ $image->getClientOriginalName()}}
                                                    @else
                                                    Image
                                                    @endif
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                                @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" class="img img-circle d-block" width="150px;" alt="">
                                @endif
                            </div>
                            <div class="add-right-items">
                                <ul>
                                    <li>
                                        <span class="tag-hash" title="Hashtag"><i class="fas fa-hashtag"></i></span>
                                    </li>
                                    <li>
                                        <span class="tag-hash" title="Tag"><i class="fas fa-at"></i></span>
                                    </li>
                                    <li>
                                        <div class="emoji-panel">
                                            <button class="emoji-combo" title="Emo"><i class="fas fa-smile"></i></button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button class="main-btn cancel" data-bs-dismiss="modal">Cancel</button>
                  <button class="main-btn color btn-hover" wire:click.prevent="post">Publish</button>
                </div>
              </div>
            </div>
          </div>




</div>
