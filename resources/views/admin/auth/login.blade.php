<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin/assets/auth/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/auth/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/auth/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('admin/assets/auth/css/style.css') }}">

    <title>Admin Login</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="{{ asset('admin/assets/auth/images/undraw_file_sync_ot38.svg') }}" alt="Image"
                        class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-5">
                                <h3>Sign In as <strong>Admin</strong></h3>

                            </div>
                            <form action="{{ route('loginStore') }}" method="post">
                                @csrf
                                <label for="username">Email</label>
                                <div class="form-group first">
                                    <input type="text" class="form-control" id="username" name="email">

                                </div>
                                <label for="password">Password</label>
                                <div class="form-group last mb-4">
                                    <input type="password" class="form-control" id="password" name="password">

                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    {{-- <span class="ml-auto"><a href="#" class="forgot-pass">Forgot
                                            Password</a></span> --}}
                                </div>

                                <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

                                {{-- <span class="d-block text-left my-4 text-muted"> or sign in with</span>

                                 <div class="social-login">
                                    <a href="#" class="facebook">
                                        <span class="icon-facebook mr-3"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="icon-twitter mr-3"></span>
                                    </a>
                                    <a href="#" class="google">
                                        <span class="icon-google mr-3"></span>
                                    </a>
                                </div> --}}
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('admin/assets/auth/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin/assets/auth/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/auth/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/auth/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--Toaster Js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    @include('sweetalert::alert')

    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif

            $('#password-addon').click(function() {
                var passwordInput = $('#password-input');
                var icon = $(this).find('i');

                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    icon.removeClass('ri-eye-fill').addClass('ri-eye-off-fill');
                } else {
                    passwordInput.attr('type', 'password');
                    icon.removeClass('ri-eye-off-fill').addClass('ri-eye-fill');
                }
            });
        });
    </script>
</body>

</html>
