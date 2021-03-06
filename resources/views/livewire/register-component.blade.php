<div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10">
                <div class="app-top-items">
                    <div class="app-top-left-logo">
                        <img src="/assets/images/logo.png" alt="">
                    </div>
                    <div class="app-top-right-link">
                        Already have an account?<a class="SidebarRegister__link" href="{{ route('login') }}">Sign In</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-7">
                <div class="registration">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <h2 class="registration_title">Sign up to Social</h2>
                        <div class="form_group mt-30">
                            <label class="label25">First Name*</label>
                            <input class="reg_form_input_1" name="first_name" type="text" placeholder="" value="{{ old('first_name') }}">
                            @error('first_name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form_group mt-30">
                            <label class="label25">Last Name*</label>
                            <input class="reg_form_input_1" name="last_name" type="text" placeholder="" value="{{ old('last_name') }}">
                            @error('last_name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form_group mt-25">
                            <label class="label25">Your Email*</label>
                            <input class="reg_form_input_1" name="email" type="email" placeholder="" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form_group mt-25">
                            <label class="label25">Create Password*</label>
                            <div class="loc_group">
                                <input class="reg_form_input_1" name="password" type="{{ $toggle }}" placeholder="" wire:model.lazy="password">
                                <span class="slry-dt cursor">
                                    <a href="#" wire:click.prevent="{{ $toggle == 'password' ? 'showPassword' : 'hidePassword' }}">
                                        <i class="{{ $toggle == 'password' ? 'fas fa-eye-slash' : 'fas fa-eye' }}"></i>
                                    </a>
                                </span>
                                @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form_group mt-25">
                            <label class="label25">Confirm Password*</label>
                            <div class="loc_group">
                                <input class="reg_form_input_1" name="password_confirmation" type="{{ $toggle2 }}" placeholder="confirm password" wire:model.lazy="password_confirmation">
                                <span class="slry-dt cursor">
                                    <a href="#" wire:click.prevent="{{ $toggle2 == 'password' ? 'showPassword2' : 'hidePassword2' }}">
                                        <i class="{{ $toggle2 == 'password' ? 'fas fa-eye-slash' : 'fas fa-eye' }}"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form_group mt-35">
                                <h5>Gender</h5>
                                <div class="radio_group">
                                    <div class="tax-radio-btn">
                                        <input type="radio" id="gender_1" name="gender" value="male" checked="">
                                        <label for="gender_1">Male</label>
                                    </div>
                                    <div class="tax-radio-btn">
                                        <input type="radio" id="gender_2" name="gender" value="female">
                                        <label for="gender_2">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="signup_check_checkbox mt-30">
                            <input type="checkbox" id="google_analytics_check">
                            <label for="google_analytics_check">I agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms and Conditions</a></label>
                        </div> --}}
                        <button class="btn-register btn-hover" type="submit" onclick="window.location.href='sign_up_steps.html'">Create Account</button>
                    </form>
                    <div class="registration_line">
                        <span class="registration_linetext">or</span>
                    </div>
                    <div class="social_buttons">
                        <div class="social_buttons_list">
                            <button class="google_login">
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="google_login__icon" width="20" height="20"><path d="M18.453 8.355h-7.441a.593.593 0 00-.594.594v2.38c0 .327.266.593.594.593h4.191a5.587 5.587 0 01-2.406 2.82l1.785 3.094c2.863-1.656 4.559-4.566 4.559-7.82a6.11 6.11 0 00-.102-1.168.601.601 0 00-.586-.493z" fill="#167EE6"></path><path d="M10.02 15.492a5.55 5.55 0 01-4.801-2.777l-3.094 1.781a9.106 9.106 0 007.895 4.566 9.105 9.105 0 004.562-1.222v-.004l-1.785-3.094a5.5 5.5 0 01-2.777.75z" fill="#12B347"></path><path d="M14.578 17.84v-.004l-1.785-3.094a5.519 5.519 0 01-2.773.75v3.57a9.08 9.08 0 004.558-1.222z" fill="#0F993E"></path><path d="M4.469 9.941c0-1.011.277-1.957.75-2.773L2.125 5.387A9.008 9.008 0 00.898 9.94c0 1.66.446 3.215 1.227 4.555l3.094-1.781a5.479 5.479 0 01-.75-2.774z" fill="#FFD500"></path><path d="M10.02 4.39c1.335 0 2.566.477 3.523 1.266.238.196.582.18.797-.035l1.683-1.684a.598.598 0 00-.035-.874A9.064 9.064 0 0010.02.82a9.106 9.106 0 00-7.895 4.567l3.094 1.781a5.55 5.55 0 014.8-2.777z" fill="#FF4B26"></path><path d="M13.543 5.656c.238.196.582.18.797-.035l1.683-1.684a.598.598 0 00-.035-.874A9.064 9.064 0 0010.02.82v3.57c1.335 0 2.566.473 3.523 1.266z" fill="#D93F21"></path></svg>
                                <span class="google_login__text">Sign up with Google</span>
                            </button>
                            {{-- <button class="facebook_login facebook_login--small" data-toggle="tooltip" data-placement="top" title="Sign up with Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="facebook_login__icon" width="20" height="20"><path d="M8.434 11.3H5.959c-.4 0-.525-.15-.525-.525V7.75c0-.4.15-.525.525-.525h2.475v-2.2c0-1 .175-1.95.675-2.825.525-.9 1.275-1.5 2.225-1.85a5.562 5.562 0 011.925-.325h2.45c.35 0 .5.15.5.5v2.85c0 .35-.15.5-.5.5-.675 0-1.35 0-2.025.025-.675 0-1.025.325-1.025 1.025-.025.75 0 1.475 0 2.25h2.9c.4 0 .55.15.55.55v3.025c0 .4-.125.525-.55.525h-2.9v8.15c0 .425-.125.575-.575.575H8.959c-.375 0-.525-.15-.525-.525V11.3z"></path></svg>
                            </button>
                            <button class="twitter_login" data-toggle="tooltip" data-placement="top" title="Sign up with Twitter">
                                <svg data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                            </button> --}}
                        </div>
                    </div>
                    <div class="app_responsive_signup_link">
                        Already have an account?<a class="SidebarRegister__link" href="{{ route('login') }}">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
