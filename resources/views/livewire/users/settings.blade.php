
<div>

    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-12">
                @include('layouts.partials.settings-sidebar')
            </div>
            <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="event-card rrmt-30">
                    <div class="headtte14m item-setting-top">
                        <span class="color_bb"><i class="fas fa-cog"></i></span>
                        <h4>Account Setting</h4>
                    </div>
                    <div class="item-setting">
                        <div class="item-padding30 main-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form_group mt-30">
                                        <label class="label25">Email Addresss*</label>
                                        <input type="text" class="form_input_1" wire:model.lazy="email">
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group mt-30">
                                        <label class="label25">Page URL*</label>
                                        <div class="group-inputs">
                                            <span class="input-group-addon">https://demo.micko.com/</span>
                                            <input class="form_input_1" type="text" wire:model.lazy="username">
                                        </div>
                                        @error('username') <span class="text-danger">{{ $message }}</span> @enderror
                                        <span class="alt-text">Can only contain alphanumeric characters (A–Z, 0–9) and periods ('.')</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group mt-30">
                                        <label class="label25">Profile Category*</label>
                                        <input class="form_input_1" type="text" placeholder="" value="Frontend Developer">
                                        <span class="alt-text">(eg:- frontend developer, wordpress developer, digital marketplace etc.)</span>
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
