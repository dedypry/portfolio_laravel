<section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
    <h1 class="title pb-3 mb-5">Portfolio</h1>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-secondary active" data-filter="*"><i class="fa fa-star me-2"></i>All</li>
                        @foreach ($portfolio as $port)
                            <li class="btn btn-secondary" data-filter=".{{ $port->slug }}"><i
                                    class="fa {{ $port->icon }} me-2"></i>{{ $port->title }}
                            </li>
                        @endforeach
                        {{-- <li class="btn btn-secondary" data-filter=".second"><i
                                class="fa fa-mobile-alt me-2"></i>Development</li> --}}
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                @foreach ($portfolio as $app)
                    @php
                        $images = is_string($app->img_url) ? json_decode($app->img_url, true) : $app->img_url;
                    @endphp

                    @if ($images != null && count($images) > 0)
                        @foreach ($images as $img)
                            <div class="col-md-6 mb-4 portfolio-item {{ $app->slug }}">
                                <div class="position-relative overflow-hidden mb-2">
                                    <img class="img-fluid w-100" style="height: 150px"
                                        src="{{ asset('storage/' . $img) }}" alt="">
                                    <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                        <a href="{{ asset('storage/' . $img) }}" data-lightbox="portfolio">
                                            <i class="bi bi-plus text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach

            </div>
        </div>
    </div>
</section>
