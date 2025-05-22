<div class="container cta-design">
    <style>
        .card{
            height: 250px;
        }
        .cta-design .card-body *{
            color:white;
        }
        .fa-regular{
            transform: rotate(315deg);
        }
    </style>
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 mb-5 position-relative">
            <div class="card shadow rounded-4 overflow-hidden position-relative" style="background: linear-gradient(to right,var(--primary-color), #e9ecef);">
                <!-- Main Image -->
                <div class="card-body p-0">
                    <div class="row g-0">
                        <!-- Logo Column: full-width on XS, 4/12 on MD+, order first on XS, second on MD+ -->
                        <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-end align-items-start p-3
                                    order-1 order-md-2">
                        <img
                            src="{{ $productimg }}"
                            alt="logo"
                            class="rounded-circle border border-white"
                            style="width: 120px; height: 120px; object-fit: cover;"
                        >
                        </div>

                        <!-- Text Column: full-width on XS, 8/12 on MD+, order second on XS, first on MD+ -->
                        <div class="col-12 col-md-8 text-center text-md-start
                                    order-2 order-md-1 pt-2 ps-4">
                            {!! $proimgcontent !!}
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="col-md-4 mb-5">
            <div class="card shadow rounded-4" style="background: linear-gradient(to right,var(--primary-color), #e9ecef);" >
                <div class="card-body">
                    <h5 class="mb-3">Fast & Secure Access</h5>
                    <p>
                        Enjoy seamless access to your QuickBooks Pro anytime,anywhere.
                    </p>
                    <div class="row mt-5">
                        <div class="col-6"><i class="fa-regular fa-circle-right fa-2x"></i></div>
                        <div class="col-6"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card shadow rounded-4" >
                <div class="card-body rounded-4" style="background: linear-gradient(to right,var(--primary-color), #e9ecef);" >
                    <h5 class="mb-3">Reliable Support</h5>
                    <p>
                        Count on our expert team for assistance when you need it.
                    </p>
                    <div class="row mt-5">
                        <div class="col-6"><i class="fa-regular fa-circle-right fa-2x"></i></div>
                        <div class="col-6"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5 ">
            <div class="card shadow bg-light rounded-4">
                <div class="card-body ">
                    <h5 style="color:black !important;">Scalable Solutions</h5>
                    <p style="color:black !important;">
                        Trailored hosting plans that grow with your business.
                    </p>
                    <div class="row mt-5">
                        <div class="col-6"><i class="fa-regular fa-circle-right fa-2x" style="color:black !important;"></i></div>
                        <div class="col-6"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5" >
            <div class="card shadow rounded-4">
                <div class="card-body rounded-4" style="background: var(--secondary-color)" >
                    <h5 class="mb-3">Enhanced Collaboration</h5>
                    <p>
                        Work effortlessly with your team in real-time.

                    </p>
                    <div class="row mt-5">
                        <div class="col-6"><i class="fa-regular fa-circle-right fa-2x"></i></div>
                        <div class="col-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
