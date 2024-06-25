<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.includes.head')
</head>

<body>

    <!-- ======= Top Bar ======= -->
    @include('home.includes.topbar')
    <!-- End Top Bar -->

    <!-- ======= Header ======= -->
    @include('home.includes.navbar')
    <!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    @include('home.includes.footer')
    @include('sweetalert::alert')
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('home.includes.foot')

</body>

</html>
