
    <!-- Start Main content -->
    <main class="bg-grey pt-80 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap widget-taber-content p-30 bg-white border-radius-10">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1 text-center">
                                <h3 class="mb-30 font-weight-900">Create an account</h3>
                            </div>
                            <form wire:submit.prevent="register">
                                <div class="form-group">
                                    <input wire:model="user_name" type="text" required="" class="form-control" name="user_name" placeholder="User name">
                                    @error('user_name') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <input wire:model="account" type="text" required="" class="form-control" name="account" placeholder="account">
                                    @error('account') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <input wire:model="email" type="text" required="" class="form-control" name="email" placeholder="Email">
                                    @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <input wire:model="password" class="form-control" required="" type="password" name="password" placeholder="Password">
                                    @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <input wire:model="password_confirmation" class="form-control" required="" type="password" name="password" placeholder="Confirm password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn-block">Xác nhận &amp; Đăng kí</button>
                                </div>
                            </form>
                            <div class="divider-text-center mt-15 mb-15">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center mb-15">
                                <li><a href="#" class="btn btn-facebook"><i class="elegant-icon social_facebook  mr-5"></i>Facebook</a></li>
                                <li><a href="#" class="btn btn-google"><i class="elegant-icon social_googleplus mr-5"></i>Google</a></li>
                            </ul>
                            <div class="text-muted text-center">Already have an account? <a href="page-login.html.htm">Sign up now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->
    