<section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
    <h1 class="title pb-3 mb-5">Skills</h1>
    <div class="row">
        @foreach ($skills as $skill)
            <div class="col-sm-6">
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">{{ $skill->title }}</p>
                        <p class="mb-2">{{ $skill->value }}%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="background-color: {{$skill->color}}" role="progressbar"
                            aria-valuenow="{{ $skill->value }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

            </div>
        @endforeach

    </div>
</section>
