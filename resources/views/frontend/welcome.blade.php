@extends('frontend.master.master')
@section('content')
    <!-- ======= hero Section ======= -->
    <section id="hero">

        <div class="hero-content" data-aos="fade-up">
            <h2>Design <span>you might</span><br>love!</h2>
            <div>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="#portfolio" class="btn-projects scrollto">Our Design</a>
            </div>
        </div>

        <div class="hero-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/1.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/2.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/3.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/4.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/5.jpg');"></div>
            </div>
        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 about-img">
                        <img src="assets/img/railling.jpg" alt="" style="height: 404px">
                    </div>

                    <div class="col-lg-6 content">
                        <h2>Everest Classic Says, Your home is our heaven..</h2>
                        <h3>At Everest Classic, our unique design process allows for complete customization of your
                            stairs or railing. As long as it meets building code standards, we can design and craft
                            whatever you envision.
                        </h3>

                        <ul>
                            <li><i class="bi bi-check-circle"></i>Cable Railings with Exposed Beam Architecture
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i> 10 Floating Stair Styles
                            </li>
                            <li><i class="bi bi-check-circle"></i> Spiral Stairs with Railing
                            </li>
                            <li><i class="bi bi-check-circle"></i> Sleek Stainless Steel and Railings
                            </li>
                            <li><i class="bi bi-check-circle"></i> Railings for Stairs
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Services</h2>
                    <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet
                        veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute
                        nulla ipsum velit export irure minim illum fore</p>
                </div>

                <div class="row gy-4">
                    @foreach($services as $service)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="box">
                                <div class="icon"><i class="bi bi-briefcase"></i></div>
                                <h4 class="title"><a href="">{{$service->name}}</a></h4>
                                <p class="description">{{$service->desc}}</p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Clients</h2>
                    <p>These are our happy client, they have own experience with our service. we never ever compromise
                        on our service. that's why they with us.</p>
                </div>

                <div class="clients-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Our Designs</h2>
                    <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet
                        veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute
                        nulla ipsum velit export irure minim illum fore</p>
                </div>

{{--                <div class="row" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <div class="col-lg-12 d-flex justify-content-center">--}}
{{--                        <ul id="portfolio-flters">--}}
{{--                            <li data-filter="*" class="filter-active">All</li>--}}
{{--                            <li data-filter=".filter-app">App</li>--}}
{{--                            <li data-filter=".filter-card">Card</li>--}}
{{--                            <li data-filter=".filter-web">Web</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($items as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{'images/items/'.$item->image}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$item->name}}</h4>
                            <p>{{$item->butta}}</p>
                            <a href="{{'images/items/'.$item->image}}" data-gallery="portfolioGallery"
                               class="portfolio-lightbox preview-link" title="Design"><i class="bx bx-plus"></i></a>
                            <a href="{{url('/design/details/'.$item->id)}}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet
                        veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute
                        nulla ipsum velit export irure minim illum fore</p>
                </div>

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                                </p>
                                <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                                </p>
                                <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                                </p>
                                <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                                </p>
                                <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                                </p>
                                <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container" data-aos="zoom-out">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3 class="cta-title">Call To Action</h3>
                        <p class="cta-text">Make a phone call whenever you want . your home be our home that way we will
                            reach you home for the design. take a phone and start calling.. </p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>
            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Team Section ======= -->
        <section id="team">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Our Team</h2>
                </div>
                <div class="row">
                    @foreach($teams as $team)
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="{{'images/teams/'.$team->img}}" alt=""></div>
                            <div class="details">
                                <h4>{{$team->name}}</h4>
                                <span>{{$team->position}}</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Contact Us</h2>
                    <p>For ideas and inspiration, take a look at our diverse profile of projects.For more interior
                        design ideas see our blog. If you see something you like, just let us know when you request a
                        quote to begin your project.</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <address>Everest Classic Traders, Tilottama-4, Rupendehi, Next to Dev False Ceiling
                            </address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+155895548855">+977 9861643966</a>,<a href="tel:+155895548855">
                                    9817443245</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">everestclassic2077@gmail.com</a></p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container mb-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.237968271464!2d83.46235795061854!3d27.648108282732196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3996879c1b0a0fe7%3A0x8a990c7925073192!2sDev%20False%20Ceiling%20%26%20Decoration%20House!5e0!3m2!1sen!2snp!4v1627798972739!5m2!1sen!2snp"
                    width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="container">
                <div class="section-header">
                    <h2>Need Help ?</h2>
                    <small>Leave Your Message Below</small>
                </div>
                <div class="form">
                    <form action="{{url('help/message')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       required>
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="contact" id="subject"
                                   placeholder="Enter Contact" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="4" placeholder="Message"
                                      required></textarea>
                        </div>
                        <div class="row">
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
