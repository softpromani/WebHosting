<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">WebHosting</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->




        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul> --}}
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.product.index') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.product.index' ? 'active' : '' }}">
                        <i class="nav-icon fa-brands fa-product-hunt"></i>
                        <p>
                            Product
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('admin.webSetting') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.webSetting' ? 'active' : '' }}">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Web Setting
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.newsletter.index') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.newsletter.index' ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-envelope"></i>
                        <p>
                            Newsletter
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.contact-us.index') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.contact-us.index' ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-address-book"></i>
                        <p>
                            Contact Us
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.faqs.index') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.faqs.index' ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-question-circle"></i>
                        <p>
                            Faqs
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.team.index') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.team.index' ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p>
                            Teams
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.testimonial.index') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.testimonial.index' ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-quote-left"></i>
                        <p>
                            Testimonial
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.blog.index') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.blog.index' ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-quote-left"></i>
                        <p>
                            BLogs
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.price-plan.index') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.price-plan.index' ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-quote-left"></i>
                        <p>
                            Price Plan
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
