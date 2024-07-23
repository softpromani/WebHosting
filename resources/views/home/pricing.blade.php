<style>
    /* Basic resets and font settings */


    /* Container for responsive layout */
    .pricing-container {
        max-width: 1200px;
        margin: auto;
        padding: 20px;
    }

    .tagline {
        background-color: #e8f0fe;
        color: #0056b3;
        border-radius: 50px;
        padding: 5px 25px;
        font-size: 13px;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 25px;
        margin-top: 25px;
    }

    .alt-font {
        font-weight: bold;
    }

    .text-dark-gray {
        color: #333;
    }

    .btn-dark-gray {
        background-color: #333;
        color: white;
        border: none;
        border-radius: 25px;
        padding: 10px 20px;
        text-decoration: none;
    }

    .btn:hover {
        opacity: 0.8;
    }

    /* Accordion styles for the plans */
    .pricing-table-style-04 .accordion-item {
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        padding: 15px;
    }

    .accordion-header .accordion-title {
        font-size: 18px;
        color: #333;
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    .icon-round {
        background-color: #333;
        color: #fff;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 10px;
    }

    .accordion-body {
        font-size: 16px;
        color: #666;
        margin-top: 10px;
    }

    .btn-transparent-white-light {
        background-color: rgba(255, 255, 255, 0.8);
        color: #333;
        border: none;
        border-radius: 20px;
        padding: 5px 15px;
        text-decoration: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .btn-box-shadow {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }


    .accordion-button::after {
        display: none;
    }

    .icon-round {
        transition: transform 0.3s ease;
    }

    .accordion-title {
        display: flex;
        justify-content: space-between;
        /* Ensures space between the plan name and the icon */
        align-items: center;
        width: 100%;
    }


    .accordion-button:not(.collapsed) .icon-round i {
        transform: rotate(180deg);
    }

    .btn-get {
        background-color: #0056b3;
        color: #fff;
    }
</style>
<div class="pricing-container">
    <div class="row  justify-content-center">
        <div class="col-xl-5 col-lg-6 md-mb-50px p-4 text-center text-lg-start">
            <span
                class="tagline  bg-solitude-blue text-uppercase fs-13 ps-25px  text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">Flexible
                pricing</span>
            <h1 class="alt-font text-dark-gray fw-600 ls-minus-1px">Tailored pricing plans for everyone.</h1>
            <p style="font-weight: 300rem; font-size:18px; color:darkgray">We are excited for our work and how it
                positively impacts clients. With over 12 years of experience
                we
                have been constantly providing excellent solutions.</p>
            <a href="#" class="btn btn-large btn-box-shadow btn-rounded btn-dark-gray mt-10px">View all
                plans</a>
        </div>
        <div class="col-xl-5 col-lg-6 offset-xl-2 position-relative">
            <div class="accordion pricing-table-style-04" id="accordion-style-01">
                <!-- Accordion item for Basic Plan -->
                <div class="accordion-item bg-white box-shadow-large mb-20px">
                    <div class="accordion-header" id="headingOne">
                        <a class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            <div
                                class="accordion-title d-flex align-items-center justify-content-between text-dark-gray fw-500 alt-font">
                                Basic plan
                                <span class="icon-round bg-dark-gray text-white w-25px h-25px"><i
                                        class="fa-solid fa-angle-up"></i></span>
                            </div>
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordion-style-01">
                        <div class="accordion-body">
                            <p class="opacity-6 w-90 fw-300">Lorem ipsum dolor sit amet consectetur adipiscing elit sed
                                do eiusmod.</p>
                            <div class="d-flex align-items-end mt-20px">
                                <h5 class="text-dark-gray mb-0"><span class="fs-16">$</span>19.99 <span
                                        class="fs-16 opacity-6 fw-300 ls-0px">/ Monthly</span></h5>
                                <a href="#"
                                    class="btn btn-transparent-white-light btn-rounded btn-small ms-auto fw-500 btn-box-shadow btn-get">Get
                                    started</a>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Accordion item for Standard Plan -->
                <div class="accordion-item bg-white box-shadow-large mb-20px">
                    <div class="accordion-header" id="headingTwo">
                        <a class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <div class="accordion-title d-flex align-items-center text-dark-gray fw-500 alt-font">
                                Standard plan<span class="icon-round bg-dark-gray text-white w-25px h-25px ml-10px"><i
                                        class="fa-solid fa-angle-down"></i></span>
                            </div>
                        </a>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordion-style-01">
                        <div class="accordion-body">
                            <p class="opacity-6 w-90 fw-300">Lorem ipsum dolor sit amet consectetur adipiscing elit sed
                                do eiusmod.</p>
                            <div class="d-flex align-items-end mt-20px">
                                <h5 class="text-dark-gray mb-0"><span class="fs-16">$</span>29.99 <span
                                        class="fs-16 opacity-6 fw-300 ls-0px">/ Monthly</span></h5>
                                <a href="#"
                                    class="btn btn-transparent-white-light btn-rounded btn-small ms-auto fw-500 btn-box-shadow btn-get">Get
                                    started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion item for Premium Plan -->
                <div class="accordion-item bg-white box-shadow-large">
                    <div class="accordion-header" id="headingThree">
                        <a class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            <div class="accordion-title d-flex align-items-center text-dark-gray fw-500 alt-font">
                                Premium plan<span class="icon-round bg-dark-gray text-white w-25px h-25px ml-10px"><i
                                        class="fa-solid fa-angle-down"></i></span>
                            </div>
                        </a>
                    </div>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordion-style-01">
                        <div class="accordion-body">
                            <p class="opacity-6 w-90 fw-300">Lorem ipsum dolor sit amet consectetur adipiscing elit sed
                                do eiusmod.</p>
                            <div class="d-flex align-items-end mt-20px">
                                <h5 class="text-dark-gray mb-0"><span class="fs-16">$</span>39.99 <span
                                        class="fs-16 opacity-6 fw-300 ls-0px">/ Monthly</span></h5>
                                <a href="#"
                                    class="btn btn-transparent-white-light btn-rounded btn-small ms-auto fw-500 btn-box-shadow btn-get">Get
                                    started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
