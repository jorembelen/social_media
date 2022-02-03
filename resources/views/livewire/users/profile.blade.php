<div>

    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-12">
                @include('layouts.partials.settings-sidebar')
            </div>
            <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="event-card rrmt-30">
                    <div class="headtte14m item-setting-top">
                        <span class="color_bb"><i class="fas fa-user"></i></span>
                        <h4>Basic</h4>
                        <a href="#" class="view-link-btn btn-hover"><i class="fas fa-user me-2"></i>View Profile</a>
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
                                <div class="col-lg-6 col-md-6">
                                    <div class="form_group mt-30">
                                        <label class="label25">First Name*</label>
                                        <input class="form_input_1" type="text" placeholder="" wire:model.lazy="f_name">
                                        @error('f_name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form_group mt-30">
                                        <label class="label25">Last Name*</label>
                                        <input class="form_input_1" type="text" placeholder="" wire:model.lazy="l_name">
                                        @error('l_name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form_group mt-30" wire:ignore>
                                        <label class="label25">Gender* </label>
                                        <select class="selectpicker"  wire:model="gender">
                                            <option >{{ Str::ucfirst($gender) ?? 'Select Gender' }}</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form_group mt-30" wire:ignore>
                                        <label class="label25">Relationship Status*</label>
                                        <select class="selectpicker"  wire:model.lazy="status">
                                            <option >{{ Str::ucfirst($status) ?? 'Select Status' }}</option>
                                            <option value="single">Single</option>
                                            <option value="relationship">In a relationship</option>
                                            <option value="married">Married</option>
                                            <option value="complicated">It's complicated</option>
                                            <option value="separated">Separated</option>
                                            <option value="divorced">Divorced</option>
                                            <option value="widowed">Widowed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form_group mt-30">
                                        <label class="label25">Birthdate* </label>
                                        <input class="form_input_1 datepicker-here" data-language='en' type="date" placeholder="Select Date" wire:model.lazy="birth_date">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form_group mt-30">
                                        <label class="label25">Website*</label>
                                        <input class="form_input_1" type="text" placeholder="" wire:model.lazy="website">
                                        @error('website') <span class="text-danger">{{ $message }}</span> @enderror
                                        <span class="alt-text">Website link must start with http:// or https://</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form_group mt-30">
                                        <label class="label25">Phone*</label>
                                        <input class="form_input_1" type="text" placeholder="" wire:model.lazy="phone">
                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form_group mt-30">
                                        <label class="label25">About*</label>
                                        <textarea class="form_textarea_1" wire:model.lazy="about"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="terms-dt">
                                        <div class="form_group mt-30">
                                            <div class="cogs-toggle">
                                                <label class="switch">
                                                    <input type="checkbox" id="publish_post" wire:model="phone_visibilty" wire:click.prevent="phoneStatus">
                                                    <span></span>
                                                </label>
                                                <label for="publish_post" class="lbl-quiz">
                                                    Members can see phone number? (on/off)
                                                    <small class="block-small">Privacy</small>
                                                </label>
                                            </div>
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
