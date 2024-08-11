<!DOCTYPE html>
<html lang="en">

{{-- ===================== Head ================== --}}

@include('admin.includes.head')
@yield('header-area')

{{-- ===================== Head_end ================== --}}

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('admin/assets/dist/img/AdminLTELogo.png') }}" height="60" width="60">
        </div>

        {{-- ===================== Topbar ================== --}}

        @include('admin.includes.topbar')

        {{-- ===================== Top_end ================== --}}


        {{--  ================= Sidebar ============   --}}

        @include('admin.includes.sidebar')

        {{--  ================= Sidebar ============   --}}

        <div class="content-wrapper">


            @include('admin.includes.breadcrumb')
            {{-- Main section --}}

            <section class="content">
                @yield('main-content')
            </section>


        </div>
        {{--   content-wrapper --}}


        {{--  ================= footer ============   --}}

        @include('admin.includes.footer')

        {{--  ================= footer ============   --}}
    </div>

    <!-- Foot -->
    @include('admin.includes.foot');

    <!-- Foot End -->
    <!-- JAVASCRIPT -->
    @yield('script-area');
</body>

</html>
