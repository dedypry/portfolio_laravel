<section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
    <h1 class="title pb-3 mb-5">About Me</h1>
    <p>{{ $profile->about_me }}</p>
    <div class="row mb-4">
        <div class="col-sm-6 py-1">
            <span class="fw-medium text-primary">Name:</span> {{ $profile->name }}
        </div>
        <div class="col-sm-6 py-1">
            <span class="fw-medium text-primary">Birthday:</span> {{ \Carbon\Carbon::parse($profile->birthday)->format('d F Y') }}
        </div>
        <div class="col-sm-6 py-1">
            <span class="fw-medium text-primary">Degree:</span> {{ $profile->degree }}
        </div>
        <div class="col-sm-6 py-1">
            <span class="fw-medium text-primary">Experience:</span> {{ $profile->experience }} Years
        </div>
        <div class="col-sm-6 py-1">
            <span class="fw-medium text-primary">Phone:</span> {{ $profile->phone }}
        </div>
        <div class="col-sm-6 py-1">
            <span class="fw-medium text-primary">Email:</span> {{ $profile->email }}
        </div>
        <div class="col-sm-6 py-1">
            <span class="fw-medium text-primary">Address:</span> {{ $profile->address }}
        </div>
        <div class="col-sm-6 py-1">
            <span class="fw-medium text-primary">Freelance:</span>
            {{ $profile->freelance ? 'Available' : 'Not Available' }}
        </div>
    </div>
    <div class="row g-4">
        <div class="col-md-4 col-lg-6 col-xl-4">
            <div class="d-flex bg-secondary p-4">
                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                    {{ $profile->experience }}</h1>
                <div class="ps-3">
                    <p class="mb-0">Years of</p>
                    <h5 class="mb-0">Experience</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-6 col-xl-4">
            <div class="d-flex bg-secondary p-4">
                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">100</h1>
                <div class="ps-3">
                    <p class="mb-0">Happy</p>
                    <h5 class="mb-0">Clients</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-6 col-xl-4">
            <div class="d-flex bg-secondary p-4">
                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                    {{ $profile->complete_project }}
                </h1>
                <div class="ps-3">
                    <p class="mb-0">Complete</p>
                    <h5 class="mb-0">Projects</h5>
                </div>
            </div>
        </div>
    </div>
</section>
