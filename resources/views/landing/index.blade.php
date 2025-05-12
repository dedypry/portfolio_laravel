@extends('layouts.landing.index')

@section('content')
    <div class="container">
        <div class="row g-5">
            @include('landing.components.sidebar')
            <div class="col-lg-8">
                <!-- About Start -->
                @include('landing.components.about')
                <!-- About End -->

                <!-- Skills Start -->
                @include('landing.components.skill')
                <!-- Skills End -->

                <!-- Expericence Start -->
                @include('landing.components.expericence')
                <!-- Expericence End -->

                <!-- Subscribe Start -->
                @include('landing.components.subscribe')
                <!-- Subscribe End -->

                <!-- Services Start -->
                @include('landing.components.service')
                <!-- Services End -->

                <!-- Portfolio Start -->
                {{-- @include('landing.components.portfolio') --}}
                <!-- Portfolio End -->

                <!-- Testimonial Start -->
                {{-- @include("landing.components.testimoni") --}}
                <!-- Testimonial End -->

                <!-- Contact Start -->
                @include('landing.components.contact')
                <!-- Contact End -->

                <!-- Footer Start -->
                @include('landing.components.footer')
                <!-- Footer End -->
            </div>
        </div>
    </div>
@endsection
