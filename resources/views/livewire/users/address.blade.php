<div>

    <div class="middle-sidebar-bottom">
        <div class="middle-sidebar-left">
            <div class="middle-wrap">
                <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                    <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                        <a href="{{ route('settings') }}" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a>
                        <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2">Contact Information</h4>
                    </div>
                    <div class="card-body p-lg-5 p-4 w-100 border-0 mb-0">


                    <form action="#">


                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label class="mont-font fw-600 font-xsss">Country</label>
                                    <input type="text" wire:model.lazy="country" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label class="mont-font fw-600 font-xsss">City</label>
                                    <input type="text" wire:model.lazy="city" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label class="mont-font fw-600 font-xsss">Address</label>
                                    <input type="text" wire:model.lazy="address" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label class="mont-font fw-600 font-xsss">Postal</label>
                                    <input type="text" wire:model.lazy="postal" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12 mb-0 mt-2 ps-0">
                            <a href="#" class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-3 d-inline-block" wire:click.prevent="submit">Save</a>
                        </div>
                    </form>
                    </div>
                </div>
                <!-- <div class="card w-100 border-0 p-2"></div> -->
            </div>
        </div>

    </div>

</div>
