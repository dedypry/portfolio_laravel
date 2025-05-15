<section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
    <h1 class="title pb-3 mb-5">Portfolio</h1>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-secondary active" data-filter="*"><i class="fa fa-star me-2"></i>All</li>
                        <li class="btn btn-secondary" data-filter=".first"><i class="fa fa-laptop-code me-2"></i>Design
                        </li>
                        <li class="btn btn-secondary" data-filter=".second"><i
                                class="fa fa-mobile-alt me-2"></i>Development</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                @foreach ($portfolio as $pp)
                    <div class="col-md-6 mb-4 portfolio-item second">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid w-100" style="height: 150px" src="{{ asset($pp->img_url) }}" alt="">
                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                <a href="{{ asset($pp->img_url) }}" data-lightbox="portfolio">
                                    <i class="bi bi-plus text-light"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
