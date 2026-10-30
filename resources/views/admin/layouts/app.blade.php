<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>

        <!-- header and sidebar -->
        @include('admin.layouts.header')
        <!-- header and sidebar end -->

        <!-- main-area -->
        @yield('content')
        <!-- main-area-end -->

        <!-- JS here -->
        @include('admin.layouts.script')

    </div>
    <!-- END layout-wrapper -->

</body>

</html>