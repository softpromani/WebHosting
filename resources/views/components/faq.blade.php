<div>
   <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>F.A.Q</h2>
                    <h3>Frequently Asked <span>Questions</span></h3>

                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-4 ">
                        <div class="card-img mb-3">
                            <img src="{{ asset('home/assets/img/faqimage.png') }}" alt="no available"
                                class="img-fluid services-img rounded hover-animate" style="position: relative;width: 400px;height: 400px;">
                        </div>

                        <style>
                            .hover-animate:hover {
                                animation: moveAround 3s infinite alternate ease-in-out;
                            }

                            @keyframes moveAround {
                                0% {
                                    top: 0px;
                                    left: 0px;
                                }

                                25% {
                                    top: -15px;
                                    left: 15px;
                                }

                                50% {
                                    top: 15px;
                                    left: -15px;
                                }

                                75% {
                                    top: -15px;
                                    left: -15px;
                                }

                                100% {
                                    top: 0px;
                                    left: 0px;
                                }
                            }
                        </style>

                    </div>
                    <div class="col-xl-8">
                        <ul class="faq-list">

                            @foreach ($faqs as $index => $faq)
                                <li>
                                    <div data-bs-toggle="collapse" class="collapsed question"
                                        href="#faq{{ $index }}">
                                        {{ $faq->question }} <i class="bi bi-chevron-down icon-show"></i><i
                                            class="bi bi-chevron-up icon-close"></i>
                                    </div>
                                    <div id="faq{{ $index }}" class="collapse" data-bs-parent=".faq-list">
                                        <p>{!! $faq->answer !!}</p>
                                    </div>
                                </li>
                            @endforeach



                        </ul>
                    </div>
                </div>

            </div>
        </section>
</div>
