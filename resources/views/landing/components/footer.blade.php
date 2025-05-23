<section class="wow fadeIn" data-wow-delay="0.1s">
    <div class="bg-secondary text-light text-center p-5">
        <div class="d-flex justify-content-center mb-4">
            @foreach ($sosmed as $item)
            <a class="btn btn-dark btn-square mx-1" href="{{$item->url}}"><i class="fab {{$item->icon}}"></i></a>
            @endforeach
            {{-- <a class="btn btn-dark btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark btn-square mx-1" href="https://www.linkedin.com/in/dedy-priyatna-2b1801202/"><i
                    class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-dark btn-square mx-1" href="#"><i class="fab fa-instagram"></i></a> --}}
        </div>
        <div class="d-flex justify-content-center mb-3">
            <a class="text-light px-3 border-end" href="#">Privacy</a>
            <a class="text-light px-3 border-end" href="#">Terms</a>
            <a class="text-light px-3 border-end" href="#">FAQs</a>
            <a class="text-light px-3" href="#">Help</a>
        </div>

        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        <p class="m-0">&copy; All Rights Reserved. Designed by <a
                href="https://www.linkedin.com/in/dedy-priyatna-2b1801202/">
                Dedy Pry</a></p>
    </div>
</section>
