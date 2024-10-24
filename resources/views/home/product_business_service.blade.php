<style>
    .nav-tabs {
        border-bottom: none;
    }

    .nav-item {
        margin-bottom: 28px;
    }

    .tab-style-05 .nav-tabs .nav-item .nav-link.active,
    .tab-style-05 .nav-tabs .nav-item .nav-link.show,
    .tab-style-05 .nav-tabs .nav-item .nav-link:hover i {
        /* color: #0056b3; */
        color: var(--primary-color);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);

    }

    .tab-style-05 .nav-tabs .nav-item .nav-link.active i,
    .tab-style-05 .nav-tabs .nav-item .nav-link.show,
    .tab-style-05 .nav-tabs .nav-item .nav-link:hover i {
        /* color: #0056b3; */
        color: var(--primary-color);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);

    }

    .nav-link {
        border-radius: 5px;
        padding: 20px 25px;
        color: #333;
        transition: background-color 0.3s ease, color 0.3s ease;
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .nav-link:hover {
        background: #e9ecef;
        /* color: #0056b3; */
        color: var(--primary-color);
    }

    .nav-link.active,
    .nav-link.active:hover {
        background: #ffffff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        color: var(--primary-color);
        /* color: #0056b3; */
    }

    .icon-extra-medium {
        font-size: 1.2rem;
    }

    .fs-18 {
        font-size: 18px;
    }

    .fw-500 {
        font-weight: 500;
    }

    .fw-600 {
        font-weight: 600 !important;
    }

    .mb-25px {
        margin-bottom: 30px !important;
    }

    .icon-text-wrapper {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        color: var(--primary-color);
        /* color: #5057ac; */
    }

    .icon-circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-right: 15px;
    }

    .icon-circle i {
        font-size: 22px;
        color: var(--primary-color);
        /* color: #5057ac; */
    }

    .header-text {
        font-size: 20px;
        font-weight: 600;
    }

    .alt-font {
        font-family: 'Arial', sans-serif;
        /* Custom font family */
        color: #333;
        /* Darker text color */
    }

    .bg-solitude-blue {
        background-color: #F0F4FD;
    }

    .explore-button {
        background-color: var(--primary-color);
        /* Button background color */
        color: white;
        /* Button text color */
        padding: 10px 20px;
        /* Padding inside the button */
        border: none;
        border-radius: 20px;
        /* Rounded corners for the button */
        text-decoration: none;
        /* Remove underline from link */
        display: inline-block;
        /* Allows margin and padding adjustments */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        /* Button shadow */
    }

    .btn-box-shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Consistent shadow for buttons */
    }

    .btn-rounded {
        border-radius: 20px;
        /* Consistent border-radius */
    }

    .mt-10px {
        margin-top: 10px;
        /* Consistent top margin */
    }

    .fw-500 {
        font-weight: 500 !important;
    }

    .mb-20px {
        margin-bottom: 20px !important;
    }

    .ls-minus-1px {
        letter-spacing: -1px !important;
    }

    .border-radius-6px {
        border-radius: 6px !important;
    }





    .show-pricing {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        color: #333;
    }
</style>
<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-xl-7 col-lg-9 col-md-10 text-center">
            <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px"
                data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                Professional and highly dedicated business services</h3>
        </div>
    </div>
    <div class="row align-items-center"
        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 150, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

        <div class="col-xl-3 col-lg-4 col-md-12 tab-style-05 md-mb-30px sm-mb-20px">
            <ul class="nav nav-tabs flex-column justify-content-center border-0 text-left fw-500 fs-18 alt-font">
                @forelse ($products->productBusinessServices as $plan)
                    <li class="nav-item">
                        <a class="nav-link @if ($loop->first) active @endif" data-bs-toggle="tab"
                            href="#tab_four{{ $plan->id }}">
                            <i
                                class="{{ $plan->tab_icon }} icon-extra-medium text-dark-gray"></i><span>{{ $plan->tab_name }}</span>
                        </a>
                    </li>
                @empty
                    <li class="nav-item">
                        <a data-bs-toggle="tab" href="#tab_four1" class="nav-link d-flex align-items-center active">
                            <i class="fas fa-briefcase icon-extra-medium text-dark-gray"></i><span>Business
                                planning</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_four2">
                            <i class="fas fa-search icon-extra-medium text-dark-gray"></i><span>Business research</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_four3">
                            <i class="fas fa-compass icon-extra-medium text-dark-gray"></i><span>Tracking
                                operations</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_four4">
                            <i class="fas fa-bullhorn icon-extra-medium text-dark-gray"></i><span>Business
                                campaign</span>
                        </a>
                    </li>
                @endforelse

            </ul>
        </div>

        <div class="col-xl-9 col-lg-8 col-md-12">
            <div class="tab-content">
                @forelse ($products->productBusinessServices as $plan)
                    <div class="tab-pane fade @if ($loop->first) show active @endif"
                        id="tab_four{{ $plan->id }}">
                        <div class="row ">
                            <div class="col-md-6 offset-xl-1 sm-mb-30px">
                                @isset($plan->businessServiceImg->media)
                                    <img src="{{ asset('storage/' . $plan->businessServiceImg->media ?? '') }}"
                                        alt="Business Planning" class="border-radius-6px w-100" />
                                @endisset

                            </div>
                            <div class="col-xl-4 col-md-6 offset-xl-1  text-md-start">

                                <div class="icon-text-wrapper mb-25px ">
                                    <div class="icon-circle bg-white box-shadow-medium">
                                        <i class="{{ $plan->header_icon }} fs-22"></i>
                                    </div>
                                    <span class="header-text ">{{ $plan->header_text ?? '' }}</span>
                                </div>
                                <h2 class="alt-font text-dark-gray mb-20px fw-500 ls-minus-1px"><span
                                        class="fw-600">{{ $plan->title ?? '' }}</h2>
                                <p class="justify" style="font-weight: 400rem; font-size:20px; color:darkgray">
                                    {{ $plan->description }}</p>
                                <a href="#" class="explore-button btn-box-shadow btn-rounded mt-10px">
                                    Explore now
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Tab 1: Business Planning -->
                    <div class="tab-pane fade show active" id="tab_four1">
                        <div class="row ">
                            <div class="col-md-6 offset-xl-1 sm-mb-30px">
                                <img src="{{ asset('home/assets/img/demo-business-tab-01.jpg') }}"
                                    alt="Business Planning" class="border-radius-6px w-100" />
                            </div>
                            <div class="col-xl-4 col-md-6 offset-xl-1  text-md-start">

                                <div class="icon-text-wrapper mb-25px ">
                                    <div class="icon-circle bg-white box-shadow-medium">
                                        <i class="fas fa-briefcase fs-22"></i>
                                    </div>
                                    <span class="header-text ">Grow and succeed</span>
                                </div>
                                <h2 class="alt-font text-dark-gray mb-20px fw-500 ls-minus-1px"><span
                                        class="fw-600">Work
                                        together</span> to make experience</h2>
                                <p class="justify" style="font-weight: 400rem; font-size:20px; color:darkgray">We always
                                    want
                                    our
                                    client
                                    grow
                                    with the
                                    product
                                    we
                                    have
                                    delivered and
                                    maintaining
                                    strong
                                    long-term good relationship.</p>
                                <a href="#" class="explore-button btn-box-shadow btn-rounded mt-10px">
                                    Explore now
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 2: Business Research -->
                    <div class="tab-pane fade" id="tab_four2">
                        <div class="row ">
                            <div class="col-md-6 offset-xl-1 sm-mb-30px">
                                <img src="{{ asset('home/assets/img/demo-business-tab-02.jpg') }}"
                                    alt="Business Planning" class="border-radius-6px w-100" />
                            </div>
                            <div class="col-xl-4 col-md-6 offset-xl-1  text-md-start">

                                <div class="icon-text-wrapper mb-25px ">
                                    <div class="icon-circle bg-white box-shadow-medium">
                                        <i class="fas fa-edit fs-22"></i>
                                    </div>
                                    <span class="header-text ">Identity strategy</span>
                                </div>
                                <h2 class="alt-font text-dark-gray mb-20px fw-500 ls-minus-1px"><span
                                        class="fw-600">Help
                                        our clients </span>succeed by brand</h2>
                                <p class="justify" style="font-weight: 400rem; font-size:20px; color:darkgray">We always
                                    want our client grow with the product we have delivered and maintaining strong
                                    long-term
                                    good relationship.</p>
                                <a href="demo-business-services-details.html"
                                    class="explore-button btn-box-shadow btn-rounded mt-10px">
                                    Explore now
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 3: Tracking Operations -->
                    <div class="tab-pane fade" id="tab_four3">
                        <div class="row ">
                            <div class="col-md-6 offset-xl-1 sm-mb-30px">
                                <img src="{{ asset('home/assets/img/demo-business-tab-03.jpg') }}"
                                    alt="Business Planning" class="border-radius-6px w-100" />
                            </div>
                            <div class="col-xl-4 col-md-6 offset-xl-1  text-md-start">

                                <div class="icon-text-wrapper mb-25px ">
                                    <div class="icon-circle bg-white box-shadow-medium">
                                        <i class="fas fa-compass icon-extra-medium fs-22"></i>
                                    </div>
                                    <span class="header-text ">Grow and succeed</span>
                                </div>
                                <h2 class="alt-font text-dark-gray mb-20px fw-500 ls-minus-1px"><span
                                        class="fw-600">Work
                                        together</span> to make experience</h2>
                                <p class="justify" style="font-weight: 400rem; font-size:20px; color:darkgray">We
                                    always
                                    want
                                    our
                                    client
                                    grow
                                    with the
                                    product
                                    we
                                    have
                                    delivered and
                                    maintaining
                                    strong
                                    long-term good relationship.</p>
                                <a href="demo-business-services-details.html"
                                    class="explore-button btn-box-shadow btn-rounded mt-10px">
                                    Explore now
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 4: Business Campaign -->
                    <div class="tab-pane fade" id="tab_four4">
                        <div class="row ">
                            <div class="col-md-6 offset-xl-1 sm-mb-30px">
                                <img src="{{ asset('home/assets/img/demo-business-tab-04.jpg') }}"
                                    alt="Business Planning" class="border-radius-6px w-100" />
                            </div>
                            <div class="col-xl-4 col-md-6 offset-xl-1  text-md-start">

                                <div class="icon-text-wrapper mb-25px ">
                                    <div class="icon-circle bg-white box-shadow-medium">
                                        <i class="fas fa-bullhorn icon-extra-medium fs-22"></i>
                                    </div>
                                    <span class="header-text ">Experience strategy</span>
                                </div>
                                <h2 class="alt-font text-dark-gray mb-20px fw-500 ls-minus-1px"><span
                                        class="fw-600">Help
                                        our clients </span> succeed by brand</h2>
                                <p class="justify" style="font-weight: 400rem; font-size:20px; color:darkgray">We
                                    always
                                    want our client grow with the product we have delivered and maintaining strong
                                    long-term
                                    good relationship.</p>
                                <a href="demo-business-services-details.html"
                                    class="explore-button btn-box-shadow btn-rounded mt-10px">
                                    Explore now
                                </a>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
