<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/hotel-alpha-html/HTML/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 12:23:58 GMT -->

<head>
    @include('web.layouts.head.meta_data')

   @include('web.layouts.head.style')

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="web/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="web/js/ie-emulation-modes-warning.js"></script>

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

    @include('web.layouts.navigation.header')
    @include('web.layouts.navigation.sidebar')

    @yield('content')

    @include('web.layouts.bottom.footer')

    @include('web.layouts.bottom.scripts')
</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/hotel-alpha-html/HTML/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 12:26:11 GMT -->

</html>
