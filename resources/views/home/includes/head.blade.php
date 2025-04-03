<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>@yield('title') </title>
<meta name="keywods" content="@yield('meta-keyword')">
<meta name="description" content="@yield('meta-description')">

<!-- Favicons -->
<link href="{{ asset('home/assets/img/favicon.png') }}" rel="icon">
<link href="{{ asset('home/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="{{ asset('home/assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('home/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('home/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('home/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('home/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('home/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
<!-- Template Main CSS File -->
<link href="{{ asset('home/assets/css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Jarallax -->
<script src="https://cdn.jsdelivr.net/npm/jarallax/dist/jarallax.min.js"></script>
<meta name="google-site-verification" content="TowyqeqANQPzTSTRfMIifyCC6_1dyStdpZq7GiGa4KE" />

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EQNV0FBQ99"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-EQNV0FBQ99');
</script>

<style>
    :root {
        --primary-color: {{ $theme_setting->where('key', 'primary')->first()->value ?? '#65E82E' }};
        --secondary-color: {{ $theme_setting->where('key', 'secondary')->first()->value ?? '#3b8af2' }};
        --text-color: #fff !important;
    }
</style>
