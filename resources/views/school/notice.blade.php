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
        <h1>Notice</h1>
        <p>
            <a href="{{ url('/') }}" class="text-white">Home</a>
            <span> / Pages / Notice</span>
        </p>
    </div>-->
    </div>

    <div id="contact" class="section wb">
        <div class="container">
            @foreach ($notices as $notice)
                <div class="card bg-light shadow p-3 mb-4  rounded">
                    <div>
                        <h1 class="fs-2  text-center">{{ $notice->title }} </h1>
                        <p class=" text-justify">{{ $notice->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div><!-- end container -->
    </div><!-- end section -->
@endsection
