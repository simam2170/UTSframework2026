<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing.layouts.head')
</head>
<!-- page wrapper -->

<body>
    <div class="boxed_wrapper">
        <!-- preloader -->
        <div class="preloader">
            <div class="boxes">
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fal fa-long-arrow-up"></i>
        </button>

        <!-- header-area -->
        @include('landing.layouts.header')
        <!-- header-area-end -->

        <!-- main-area -->
        @yield('content')
        <!-- main-area-end -->

        <!-- footer-area -->
        @include('landing.layouts.footer')
        <!-- footer-area-end -->

        <!-- JS here -->
        @include('landing.layouts.script')
    </div>
</body><!-- End of .page_wrapper -->

</html>