@extends('layouts.main')
@section('middle')
@foreach ($settings as $set)
    @if ($set->siteKey == 'Banner')
    <div class="all-title-box" 
     style="background: url('{{ asset('uploads/' . $set->siteValue) }}') no-repeat center center; 
            background-size: cover; 
            width: 80%; 
            height: 80px; 
            margin: 30px auto; /* Adds space on top, bottom, left, and right */
            padding: 20px;
            border-radius: 15px; /* Makes corners curved */
            overflow: hidden;"> <!-- Ensures content inside also gets rounded corners -->
</div>
    @endif
@endforeach
    <!--<div class="container text-center">
        <h1>Contact</h1>
        <p>
            <a href="{{ url('/') }}" class="text-white">Home</a>
            <span>/ Contact</span>
        </p>
    </div>-->
    </div>

    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Need Help? Sure we are Online!</h3>
                <p class="lead">Let us give you more details about the special offer website you want us. Please fill out
                    the form below. <br>We have million of website owners who happy to work with us!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form action="{{ route('contactForm.store') }}" method="POST" enctype="multipart/form-data"
                            class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-light">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="firstName">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-light">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="lastName">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-light">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-light">Phone</label>
                                        <input type="tel" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleInputMessage1" class="form-label text-light">message</label>
                                        <textarea class="form-control" id="exampleInputMessage1" name='message'></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div><!-- end col -->
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="map-box">
                        <div id="custom-places" class="small-map"><iframe
                                src="https://www.google.com/maps/place/Kiembeni+Estate,+Mombasa/@-3.9842642,39.694848,16z/data=!3m1!4b1!4m6!3m5!1s0x18400c5a45aec68f:0x22b0189cf3ba4931!8m2!3d-3.9831419!4d39.7001824!16s%2Fg%2F1tkrc8zc?entry=ttu&g_ep=EgoyMDI1MDIxNy4wIKXMDSoASAFQAw%3D%3D"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
@endsection
