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
                        <h4>Change Password</h4>
                    </div>
                    <div class="item-setting">
                        <div class="item-padding30 main-form">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form_group mt-30">
                                        <label class="label25">Confirm Current Password*</label>
                                        <div class="loc_group">
                                            <input class="form_input_1" type="{{ $toggleOld }}" placeholder="old password" wire:model.lazy="old_password">
                                            <span class="slry-dt cursor">
                                                <a href="#" wire:click.prevent="{{ $toggleOld == 'password' ? 'showPasswordOld' : 'hidePasswordOld' }}">
                                                    <i class="{{ $toggleOld == 'password' ? 'fas fa-eye-slash' : 'fas fa-eye' }}"></i>
                                                </a>
                                            </span>
                                            @error('old_password') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form_group mt-30">
                                        <label class="label25">Your New Password*</label>
                                        <div class="loc_group">
                                            <input class="form_input_1" type="{{ $toggleNew }}" placeholder="new password" wire:model.lazy="password">
                                               <span class="slry-dt cursor">
                                                <a href="#" wire:click.prevent="{{ $toggleNew == 'password' ? 'showPasswordNew' : 'hidePasswordNew' }}">
                                                    <i class="{{ $toggleNew == 'password' ? 'fas fa-eye-slash' : 'fas fa-eye' }}"></i>
                                                </a>
                                            </span>
                                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form_group mt-30">
                                        <label class="label25">Confirm New Password*</label>
                                        <div class="loc_group">
                                            <input class="form_input_1" type="{{ $toggleCon }}" placeholder="confirm password" wire:model.lazy="password_confirmation">
                                               <span class="slry-dt cursor">
                                                <a href="#" wire:click.prevent="{{ $toggleCon == 'password' ? 'showPasswordCon' : 'hidePasswordCon' }}">
                                                    <i class="{{ $toggleCon == 'password' ? 'fas fa-eye-slash' : 'fas fa-eye' }}"></i>
                                                </a>
                                            </span>
                                            @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="alert alert-warning alert-action mt-30 mb-0">
                                        <div class="icon">
                                            <i class="fa fa-exclamation-triangle fa-2x"></i>
                                        </div>
                                        <div class="text pt5">
                                            Changing password will log you out from all other sessions
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="save-change-btns">
                            <button class="main-save-btn color btn-hover" wire:click.prevent="submit">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
