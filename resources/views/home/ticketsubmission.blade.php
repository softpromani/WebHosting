@extends('home.includes.layout')
@section('title', 'Ticket Submission')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Submit Your Ticket</h3>
    </div>

    {{-- contact --}}
    <div class="container">



    <div class="starter-template">

        <div class="row">

            <div class="col-sm-4 px-sm-5">

                <section class="hover-div" style="opacity: 1;"> <img src="{{ asset('home/assets/homepage/images/ticketsubmission/contact us-call.jpg'}}" width="100">

                    <div class="hover-div_inner mt-5">

                        <h3><a href="#">Call us</a></h3>

                        <div class="hover-div-lower">

                            <div class="col-xs-6 text-left"><a href="tel:+1-801-436-5575">+1-801-436-5575 (toll free)</a></div>

                            <!-- <div class="col-xs-6 text-left"><a href="tel:+18013264926">009-215-5595</a></div> -->

                        </div>

                    </div>

                </section>

            </div>

            <div class="col-sm-4 px-sm-5">

                <section class="hover-div special" style="opacity: 1;">

                    <a href="">

                        <img src="{{ asset('home/assets/homepage/images/ticketsubmission/contact us-chat.jpg'}}" width="100">
'
                        </a><div class="hover-div_inner mt-5"><a href="">

                            </a><h3><a href=""></a><a href="#">Chat with us</a></h3>

                            <div class="hover-div-lower">

                                <!-- <div class="col-xs-6 text-left">009-215-5596 (toll free)</div>

                                <div class="col-xs-6 text-left">009-215-5595</div> -->

                            </div>

                        </div>



                </section>

            </div>

            <div class="col-sm-4 px-sm-5">

                <section class="hover-div " style="opacity: 1;"> <img src="{{ asset('home/assets/homepage/images/ticketsubmission/contact us-email.jpg'}}" width="100">

                    <div class="hover-div_inner mt-5">

                        <h3><a href="#">Send Email</a></h3>

                        <div class="hover-div-lower">
                            <div class="col-xs-6 text-left"><a href="mailto:info@quickcloudhosting.com">info@quickcloudhosting.com</a></div>

                        </div>

                    </div>

                </section>

            </div>

        </div>

    </div>

</div>
    {{-- <form action="{{ route('ticket.store') }}" method="POST">
        @csrf --}}
        <div class="card-body row">
            <div class="col-12 mb-3">
                <label for="name">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control" required>
                @error('name') <div class="text-danger mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="col-12 mb-3">
                <label for="phone">Phone<span class="text-danger">*</span></label>
                <input type="text" name="phone" id="phone" class="form-control">
                @error('phone') <div class="text-danger mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="col-12 mb-3">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input type="email" name="email" id="email" class="form-control" required>
                @error('email') <div class="text-danger mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="col-12 mb-3">
                <label for="subject">Subject <span class="text-danger">*</span></label>
                <input type="text" name="subject" id="subject" class="form-control" required>
                @error('subject') <div class="text-danger mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="col-12 mb-3">
                <label for="company_name">Company Name</label>
                <input type="text" name="company_name" id="company_name" class="form-control">
                @error('company_name') <div class="text-danger mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="col-12 mb-3">
                <label for="user_name">User Name</label>
                <input type="text" name="user_name" id="user_name" class="form-control">
                @error('user_name') <div class="text-danger mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="col-12 mb-3">
                <label for="message">Message <span class="text-danger">*</span></label>
                <textarea name="message" id="message" rows="4" class="form-control" required></textarea>
                @error('message') <div class="text-danger mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="row mt-3">
                <div class="col-12" style="background-color: #0172a2;">
                    <div class="text-center py-1">
                        <button type="submit" class="btn text-white px-4 py-2" style="background-color: #0172a2; border: none; font-size: 1.1rem; border-radius: 4px; width: 100%;">
                            Submit Ticket
                        </button>
                    </div>
                </div>
            </div>




        </div>

    {{-- </form> --}}
</div>
@endsection
