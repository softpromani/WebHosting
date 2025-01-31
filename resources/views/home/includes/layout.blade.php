<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.includes.head')
    @yield('header-area')
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

    @yield('script-area')

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/675ab164af5bfec1dbdadf2a/1iet49svi';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
