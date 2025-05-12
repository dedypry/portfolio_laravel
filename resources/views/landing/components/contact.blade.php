<section class="py-5 wow fadeInUp" data-wow-delay="0.1s" id="contact">
    <h1 class="title pb-3 mb-5">Contact Me</h1>
    <p class="mb-4">
        Interested in collaborating on a project, building scalable web or mobile applications, or discussing technical
        solutions for your business? Feel free to reach out. I'm open to freelance work, consulting, or full-time
        opportunities.
    </p>
    <form method="POST" action="{{ route('message.create') }}">
        @csrf
        <input type="hidden" name="profile_id" value="{{ $profile->id }}">
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control border-0 bg-secondary" id="name"
                        placeholder="Your Name" name="from">
                    <label for="name">Your Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control border-0 bg-secondary" id="email" name="from_email"
                        placeholder="Your Email">
                    <label for="email">Your Email</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control border-0 bg-secondary" id="subject" name="subject"
                        placeholder="Subject">
                    <label for="subject">Subject</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control border-0 bg-secondary" placeholder="Leave a message here" id="message" name="content"
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
