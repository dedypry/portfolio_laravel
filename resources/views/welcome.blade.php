<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("layouts.landing.head")
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 sticky-lg-top vh-100">
                <div class="d-flex flex-column h-100 text-center overflow-auto shadow">
                    <img class="w-100 img-fluid mb-4" src="img/profile.jpg" alt="Image">
                    <h1 class="text-primary mt-2">John Doe</h1>
                    <div class="mb-4" style="height: 22px;">
                        <h4 class="typed-text-output d-inline-block text-light"></h4>
                        <div class="typed-text d-none">Web Designer, Web Developer, Front End Developer, Apps Designer,
                            Apps Developer</div>
                    </div>
                    <div class="d-flex justify-content-center mt-auto mb-3">
                        <a class="btn btn-secondary btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-secondary btn-square mx-1" href="#"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-secondary btn-square mx-1" href="#"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-secondary btn-square mx-1" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="d-flex align-items-end justify-content-between border-top">
                        <a href="" class="btn w-50 border-end">Download CV</a>
                        <a href="#contact" class="btn w-50 btn-scroll">Contact Me</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- About Start -->
                <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="title pb-3 mb-5">About Me</h1>
                    <p>Diam rebum sea stet rebum ea. Et kasd amet et accusam elitr voluptua. Tempor dolore sit et
                        accusam ipsum erat duo. Gubergren et takimata dolor duo amet et sanctus elitr lorem. Ipsum amet
                        duo rebum dolor labore. No diam duo lorem elitr dolor takimata elitr no. Magna et gubergren duo
                        ipsum sed, amet ea voluptua dolores voluptua dolor ipsum et. Sit takimata erat consetetur
                        invidunt lorem consetetur. Lorem magna diam vero nonumy. Aliquyam diam voluptua magna et magna
                        nonumy. Accusam rebum clita et sit vero lorem, voluptua amet sit eos no et labore vero, et
                        consetetur justo et et sit aliquyam labore, sit erat lorem justo dolores kasd est sit. Dolor et
                        accusam ea et dolor sit.</p>
                    <div class="row mb-4">
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Name:</span> John Doe
                        </div>
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Birthday:</span> 1 April 1990
                        </div>
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Degree:</span> Master
                        </div>
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Experience:</span> 10 Years
                        </div>
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Phone:</span> +012 345 6789
                        </div>
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Email:</span> info@example.com
                        </div>
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Address:</span> 123 Street, New York, USA
                        </div>
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Freelance:</span> Available
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4 col-lg-6 col-xl-4">
                            <div class="d-flex bg-secondary p-4">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">10</h1>
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
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">200
                                </h1>
                                <div class="ps-3">
                                    <p class="mb-0">Complete</p>
                                    <h5 class="mb-0">Projects</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- About End -->

                <!-- Skills Start -->
                <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="title pb-3 mb-5">Skills</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">HTML</p>
                                    <p class="mb-2">95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">CSS</p>
                                    <p class="mb-2">85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">PHP</p>
                                    <p class="mb-2">90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Javascript</p>
                                    <p class="mb-2">90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Angular JS</p>
                                    <p class="mb-2">95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Wordpress</p>
                                    <p class="mb-2">85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Skills End -->

                <!-- Expericence Start -->
                <section class="py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="title pb-3 mb-5">Expericence</h1>
                    <div class="border-start border-2 border-light pt-2 ps-5">
                        <div class="position-relative mb-4">
                            <span class="bi bi-arrow-right fs-4 text-light position-absolute"
                                style="top: -5px; left: -50px;"></span>
                            <h5 class="mb-1">Web Designer</h5>
                            <p class="mb-2">Soft Company | <small>2000 - 2050</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos
                                ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum
                                stet lorem diam</p>
                        </div>
                        <div class="position-relative mb-4">
                            <span class="bi bi-arrow-right fs-4 text-light position-absolute"
                                style="top: -5px; left: -50px;"></span>
                            <h5 class="mb-1">Web Designer</h5>
                            <p class="mb-2">Soft Company | <small>2000 - 2050</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos
                                ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum
                                stet lorem diam</p>
                        </div>
                        <div class="position-relative mb-4">
                            <span class="bi bi-arrow-right fs-4 text-light position-absolute"
                                style="top: -5px; left: -50px;"></span>
                            <h5 class="mb-1">Web Designer</h5>
                            <p class="mb-2">Soft Company | <small>2000 - 2050</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos
                                ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum
                                stet lorem diam</p>
                        </div>
                    </div>
                </section>
                <!-- Expericence End -->

                <!-- Subscribe Start -->
                <section class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary text-center p-5">
                        <h1 class="text-white font-weight-bold">Subscribe My Newsletter</h1>
                        <p class="text-white">Subscribe and get my latest article in your inbox</p>
                        <div class="position-relative w-100">
                            <input class="form-control bg-dark border-0 w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email">
                            <button type="button"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                        </div>
                    </div>
                </section>
                <!-- Subscribe End -->

                <!-- Services Start -->
                <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="title pb-3 mb-5">Services</h1>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="service-item">
                                <i class="fa fa-2x fa-laptop-code mx-auto mb-4"></i>
                                <h5 class="mb-2">Web Design</h5>
                                <p class="mb-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet
                                    lorem lorem lorem est amet labore</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <i class="fab fa-2x fa-android mx-auto mb-4"></i>
                                <h5 class="mb-2">Apps Development</h5>
                                <p class="mb-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet
                                    lorem lorem lorem est amet labore</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <i class="fa fa-2x fa-search mx-auto mb-4"></i>
                                <h5 class="mb-2">SEO</h5>
                                <p class="mb-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet
                                    lorem lorem lorem est amet labore</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <i class="fa fa-2x fa-edit mx-auto mb-4"></i>
                                <h5 class="mb-2">Content Creating</h5>
                                <p class="mb-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet
                                    lorem lorem lorem est amet labore</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Services End -->

                <!-- Portfolio Start -->
                <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="title pb-3 mb-5">Portfolio</h1>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 text-center mb-2">
                                    <ul class="list-inline mb-4" id="portfolio-flters">
                                        <li class="btn btn-secondary active" data-filter="*"><i
                                                class="fa fa-star me-2"></i>All</li>
                                        <li class="btn btn-secondary" data-filter=".first"><i
                                                class="fa fa-laptop-code me-2"></i>Design</li>
                                        <li class="btn btn-secondary" data-filter=".second"><i
                                                class="fa fa-mobile-alt me-2"></i>Development</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row portfolio-container">
                                <div class="col-md-6 mb-4 portfolio-item first">
                                    <div class="position-relative overflow-hidden mb-2">
                                        <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                            <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                                <i class="bi bi-plus text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 portfolio-item second">
                                    <div class="position-relative overflow-hidden mb-2">
                                        <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                            <a href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                                <i class="bi bi-plus text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 portfolio-item first">
                                    <div class="position-relative overflow-hidden mb-2">
                                        <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                            <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                                <i class="bi bi-plus text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 portfolio-item second">
                                    <div class="position-relative overflow-hidden mb-2">
                                        <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                            <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                                <i class="bi bi-plus text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Portfolio End -->

                <!-- Testimonial Start -->
                <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="title pb-3 mb-5">Testimonial</h1>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-left">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p class="fs-4 mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr
                                dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet
                                eirmod eos, labore diam clita</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid" src="img/testimonial-1.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <p class="text-primary fs-5 mb-1">Client Name</p>
                                    <i>Profession</i>
                                </div>
                            </div>
                        </div>
                        <div class="text-left">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p class="fs-4 mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr
                                dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet
                                eirmod eos, labore diam clita</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid" src="img/testimonial-2.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <p class="text-primary fs-5 mb-1">Client Name</p>
                                    <i>Profession</i>
                                </div>
                            </div>
                        </div>
                        <div class="text-left">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p class="fs-4 mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr
                                dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet
                                eirmod eos, labore diam clita</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid" src="img/testimonial-3.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <p class="text-primary fs-5 mb-1">Client Name</p>
                                    <i>Profession</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Testimonial End -->

                <!-- Contact Start -->
                <section class="py-5 wow fadeInUp" data-wow-delay="0.1s" id="contact">
                    <h1 class="title pb-3 mb-5">Contact Me</h1>
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form
                        with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're
                        done. <a href="https://htmlcodex.com/contact-form">Download Now</a></p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-secondary" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-secondary" id="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-secondary" id="subject"
                                        placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 bg-secondary" placeholder="Leave a message here" id="message"
                                        style="height: 200px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </section>
                <!-- Contact End -->

                <!-- Footer Start -->
                <section class="wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary text-light text-center p-5">
                        <div class="d-flex justify-content-center mb-4">
                            <a class="btn btn-dark btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-square mx-1" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-square mx-1" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-dark btn-square mx-1" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <a class="text-light px-3 border-end" href="#">Privacy</a>
                            <a class="text-light px-3 border-end" href="#">Terms</a>
                            <a class="text-light px-3 border-end" href="#">FAQs</a>
                            <a class="text-light px-3" href="#">Help</a>
                        </div>

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <p class="m-0">&copy; All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML
                                Codex</a></p>
                    </div>
                </section>
                <!-- Footer End -->
            </div>
        </div>
    </div>


    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

   @include("layouts.landing.script")
</body>

</html>
