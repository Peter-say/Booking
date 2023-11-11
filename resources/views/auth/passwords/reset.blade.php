<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/hotel-alpha-html/HTML/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 12:23:58 GMT -->

<head>
    @include('web.layouts.head.meta_data')

    @include('web.layouts.head.style')

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="web/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ $web_assets }}/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="web/js/html5shiv.min.js"></script>
    <script src="web/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFC5925" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    {{-- <div class="page_loader"></div> --}}

    <!-- Option Panel -->
    <div class="option-panel option-panel-collased">
        <h2>Change Color</h2>
        <div class="color-plate sandybrown-plate" data-color="sandybrown"></div>
        <div class="color-plate blue-light-2-plate" data-color="blue-light-2"></div>
        <div class="color-plate yellow-plate" data-color="yellow"></div>
        <div class="color-plate red-plate" data-color="red"></div>
        <div class="color-plate green-light-plate" data-color="green-light"></div>
        <div class="color-plate purple-plate" data-color="purple"></div>
        <div class="color-plate blue-plate" data-color="blue"></div>
        <div class="color-plate peru-plate" data-color="peru"></div>
        <div class="color-plate green-plate" data-color="green"></div>
        <div class="color-plate blue-light-plate" data-color="blue-light"></div>
        <div class="color-plate green-light-2-plate" data-color="green-light-2"></div>
        <div class="color-plate royalblue-plate" data-color="royalblue"></div>
        <div class="setting-button">
            <i class="fa fa-gear"></i>
        </div>
    </div>
    <!-- /Option Panel -->

    <!-- Registration section start -->
    <div class="login-section">
        <div class="container-fluid">
            <div class="row login-box">
                <div class="col-lg-6 align-self-center form-section">
                    <div class="form-inner">
                        <a href="/" class="logo">
                            <img src="{{ $web_assets }}/img/logos/logo.png" alt="logo">
                        </a>
                        <h3>Use the form below to change your password</h3>
                        <!-- Display success message -->
                        @if (session('success_message'))
                            <div class="alert alert-success">
                                {{ session('success_message') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="hidden" name="email" value="{{ $email }}">



                            <div class="form-group clearfix">
                                <input id="new_password" type="password"
                                    class="form-control @error('new_password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password" placeholder="New Password">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group clearfix">
                                <input id="new_password_confirmation" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Enter New Password Again">
                            </div>

                            <div class="form-group clearfix">
                                <button type="submit" class="btn-md btn-theme w-100">Change Password</button>
                            </div>
                        </form>

                        <div class="clearfix"></div>
                        <div class="social-list">
                            <a href="#" class="facebook-bg">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="twitter-bg">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="google-bg">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="#" class="linkedin-bg">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                        <p>Already a member? <a href="{{ route('login') }}">Login here</a></p>
                    </div>
                </div>
                <div class="col-lg-6 bg-color-15 none-992 bg-img">
                    <div class="info clearfix">
                        <h1>Welcome to <span>Hotel Alpha</span></h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type unknown printer took a galley of type and scrambled
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        setTimeout(function() {
            window.location.href = '{{ route('login') }}';
        }, 5000);
    </script> --}}

    @include('web.layouts.bottom.scripts')
</body>


</html>
