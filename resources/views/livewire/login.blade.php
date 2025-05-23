
    <!-- Start Main content -->
    <main class="bg-grey pt-80 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap widget-taber-content p-30 bg-white border-radius-10">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1 text-center">
                                <h3 class="mb-30 font-weight-900">Login</h3>
                            </div>
                            <form wire:submit.prevent="submit">
                            @csrf
                                <div class="form-group" >
                                    <input wire:model='Email' type="text" required="" class="form-control" name="email" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <input wire:model='Password' class="form-control" required="" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                            <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                    <a class="text-muted" href="#">Forgot password?</a>
                                </div>
                                @error('logerror') 
                                        <div class="alert alert-danger" >{{ $message }}</div> 
                                    @enderror
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn-block">Log in</button>
                                </div>
                            </form>
                            <div class="divider-text-center mt-15 mb-15">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center mb-15">
                                <li><a href="#" class="btn btn-facebook"><i class="elegant-icon social_facebook  mr-5"></i>Facebook</a></li>
                                <li><a href="#" class="btn btn-google"><i class="elegant-icon social_googleplus mr-5"></i>Google</a></li>
                            </ul>
                            <div class="text-muted text-center">Don't Have an Account? <a href="{{ route('register') }}">Sign up now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
