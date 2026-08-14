<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.includes.head')
    @yield('header-area')
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LHD9QWN"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
    @include('components.schedule-form')
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
