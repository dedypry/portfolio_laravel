<section class="py-5 wow fadeInUp" data-wow-delay="0.1s">
    <h1 class="title pb-3 mb-5">Expericence</h1>
    <div class="border-start border-2 border-light pt-2 ps-5">
        @foreach ($experience as $exp)
            <div class="position-relative mb-4">
                <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                <h5 class="mb-1">{{ $exp->position }}</h5>
                <p class="mb-2">{{ $exp->company_name }}
                    <small>{{ \Carbon\Carbon::parse($exp->start_at)->format('M Y') }} -
                        {{ $exp->finish_at ? \Carbon\Carbon::parse($exp->finish_at)->format('M Y') : 'Now' }}</small>
                </p>
                {!! $exp->description !!}
            </div>
        @endforeach
    </div>
</section>
