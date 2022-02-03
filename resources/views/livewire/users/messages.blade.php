<div>

    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-12">
                <div class="full-width mb-0">
                    <form class="message-sidebar">
                        <div class="msg-top-left-items">
                            <div class="msg-search">
                                <i class="fas fa-search"></i>
                                <input class="search_input_1 refund-textarea" type="text" placeholder="Search" value="">
                            </div>
                            <div class="msg-create-btns">
                                <button type="button" class="btn-main btn-hover" data-toggle="tooltip" data-placement="top" title="Mark all conversations as read">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"><path fill="currentColor" d="M14,10H2V12H14V10M14,6H2V8H14V6M2,16H10V14H2V16M21.5,11.5L23,13L16,20L11.5,15.5L13,14L16,17L21.5,11.5Z"></path></svg>
                                </button>
                                <button type="button" class="btn-main btn-hover create_group_chat" data-toggle="tooltip" data-placement="top" title="Create Group">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M13,13C11,13 7,14 7,16V18H19V16C19,14 15,13 13,13M19.62,13.16C20.45,13.88 21,14.82 21,16V18H24V16C24,14.46 21.63,13.5 19.62,13.16M13,11A3,3 0 0,0 16,8A3,3 0 0,0 13,5A3,3 0 0,0 10,8A3,3 0 0,0 13,11M18,11A3,3 0 0,0 21,8A3,3 0 0,0 18,5C17.68,5 17.37,5.05 17.08,5.14C17.65,5.95 18,6.94 18,8C18,9.06 17.65,10.04 17.08,10.85C17.37,10.95 17.68,11 18,11M8,10H5V7H3V10H0V12H3V15H5V12H8V10Z"></path></svg>
                                </button>
                            </div>
                        </div>
                        <div class="msg-tabs">
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="pill" href="#users-message" role="tab">
                                        <i class="fas fa-user me-2"></i>Friends
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="pill" href="#groups-message" role="tab">
                                        <i class="fas fa-users me-2"></i>Groups
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content mt-30">
                                <div class="tab-pane fade active show" id="users-message" role="tabpanel">
                                    <div class="user-message-chat-list">
                                        @foreach ($friends as $friend)
                                        <div class="user-recipients-list active">
                                            <div class="recipient-avatar" wire:ignore>
                                                <img avatar="{{ $friend->user->getFullname() }}" loading="lazy" alt="" class="presence-entity__image nt-view-attr__img--centered">
                                                <div class="presence-entity__badge badge__online">
                                                    <span class="visually-hidden">
                                                        Status is online
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="msg-right-part">
                                                <div class="msg-last-sent" title="1 w">15m</div>
                                                <span class="user-recipient-name" wire:click.prevent="chat('{{ $friend->user->id }}')">{{ $friend->user->getFullname() }}</span>
                                                <p class=""> contact me on my email address i sent to you so that i can tell you more about myself</p>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="groups-message" role="tabpanel">
                                    <div class="group-message-chat-list">
                                        <span class="no-online-users text-center empty_state">
                                            <i class="fas fa-user-friends"></i>
                                            No groups to show
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @if ($chatView == $friendId && $chatView == true)
                <div class="col-xl-8 col-lg-7 col-md-12">
                    <div class="full-width mb-0 rrmt-30">
                        @php
                            $chatInfo = App\Models\User::find($friendId);
                            $chats = App\Models\Chat::where(function($query) use ($friendId) {
                                        $query->where('user_id', auth()->id())->where('friend_id', $friendId);
                                    })->orWhere(function ($query) use ($friendId) {
                                        $query->where('user_id', $friendId)->where('friend_id', auth()->id());
                                    })->orderBy('created_at', 'ASC')->get();
                        @endphp
                        <div class="messages-container">
                            <div class="recipients-top-dt">
                                <div class="msg-usr-dt">
                                    <div class="recipient-avatar">
                                        <img src="/assets/images/left-imgs/img-2.jpg" loading="lazy" alt="" class="presence-entity__image nt-view-attr__img--centered">
                                        <div class="presence-entity__badge badge__online">
                                            <span class="visually-hidden">
                                                Status is online
                                            </span>
                                        </div>
                                    </div>
                                    <div class="recipient-user-dt">
                                        <a href="#" target="_blank">{{ $chatInfo->getFullName() }}</a>
                                        <p class="user-last-seen"><span class="small-last-seen">2 d</span></p>
                                    </div>
                                </div>
                                <div class="usr-cht-opts-btns">
                                    <span class="option-icon"><i class="fas fa-phone-alt"></i></span>
                                    <span class="option-icon"><i class="fas fa-video"></i></span>
                                    <span class="option-icon"><i class="fas fa-trash-alt"></i></span>
                                </div>
                            </div>

                            <div class="chat-container" wire:poll.5s>
                                <div class="chat-content">
                                    <ul class="chats-lists">
                                        @foreach ($chats as $chat)
                                            <li class="{{ $chat->user_id == auth()->id() ? 'me' : 'you' }}">
                                                <div class="chat-thumb">
                                                    <img src="/assets/images/left-imgs/{{ $chat->user_id == auth()->id() ? 'img-1' : 'img-2' }}.jpg" alt="">
                                                </div>
                                                <div class="notifi-event">
                                                    <span class="chat-msg-item">
                                                       {{$chat->content}}
                                                    </span>
                                                    <span class="notifi-date">
                                                        <time datetime="2021-01-24T18:18" class="posted-date">Today at 4:52pm</time>
                                                    </span>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <form class="send_messages_form">
                                <div class="send_input_group">
                                    <div class="msg_write_combo">
                                        <div class="add_files">
                                            <div class="img-add" data-toggle="tooltip" data-placement="top" title="Files, Photos and Videos">
                                                <input type="file" id="file1">
                                                <label for="file1"><i class="fas fa-clone"></i></label>
                                            </div>
                                        </div>
                                        <textarea class="form-control custom-controls" placeholder="Write Something.." wire:model.lazy="message"></textarea>
                                        {{-- <div class="emoji-panel" data-toggle="tooltip" data-placement="top" title="Emoji">
                                            <button class="emoji-combo ml-2"><i class="fas fa-smile"></i></button>
                                        </div>
                                        <div class="mic_recording-icon" data-toggle="tooltip" data-placement="top" title="Audio Recording">
                                            <button class="mic-record"><i class="fas fa-microphone"></i></button>
                                        </div> --}}
                                    </div>
                                    <span class="input-send-btn">
                                        <button class="btn-main btn-hover send-button" type="button" wire:click.prevent="send('{{ $friendId }}')">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>

    <div class="popup-wrapper29">
		<div class="popup post-sharing">
			<span class="popup-closed"><i class="far fa-window-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h4>Create a Group Chat</h4>
				</div>
				<div class="popup-body">
					<div class="event_setting_container">
						<div class="evnt_cogs_list main-form">
							<div class="group-chat-form">
								<div class="form_group">
									<label class="label25">Group Name*</label>
									<input class="form_input_1" type="text" placeholder="" value="">
								</div>
								<div class="form_group mt-30">
									<label class="label25">Add participant (0)*</label>
									<input class="form_input_1" type="text" placeholder="" value="">
								</div>
								<div class="form_group mt-30">
									<label class="label25">Image*</label>
									<div class="group-image">
										<span class="mic_design_button btn-file">
											<span><i class="far fa-image"></i></span>
											<input type="file" id="avatar_image" accept="image/*" name="avatar_image">
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="postbox">
					<div class="share-submit-btns">
						<button class="main-btn cancel">Cancel</button>
						<button class="main-btn color btn-hover">Create</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


@include('scripts.avatar')
