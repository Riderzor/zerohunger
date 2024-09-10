<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body class="index-page">
    <!---------header start--------------->
    <div class="main">
        <div class="header">
            <header id="header" class="header fixed-top">
                <div class="topbar d-flex align-items-center">
                    <div class="container d-flex justify-content-center justify-content-md-between">
                        <div class="contact-info d-flex align-items-center">
                            <i class="bi bi-envelope d-flex align-items-center"><a
                                    href="mailto:contact@example.com">contact@example.com</a></i>
                            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+977 9810102020</span></i>
                        </div>
                        <div class="social-links d-none d-md-flex align-items-center">
                            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Top Bar -->

                <div class="branding d-flex align-items-cente">
                    <div class="container position-relative d-flex align-items-center justify-content-between">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <!-- Uncomment the line below if you also wish to use an image logo -->
                            <!-- <img src="assets/img/logo.png" alt=""> -->
                            <h1 class="sitename">Zero Hunger</h1>
                            <span>.</span>
                        </a>

                        <nav id="navmenu" class="navmenu">
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}" class="active">Dashboard<br /></a>
                                </li>
                                <li><a href="#about">About</a></li>

                                <li><a href="{{ route('listing.show')}}">Food Listings</a></li>

                                <li><a href="#team">Team</a></li>

                                <li><a href="#contact">Contact</a></li>
                                
                                <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
                                @if (Route::has('register'))
                                <li><a class="getstarted scrollto" href="{{ route('register') }}">Register</a></li>
                                @endif
                                
                            </ul>
                            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- Hero Section -->
            <section id="hero" class="hero section accent-background">
                <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-5 justify-content-between">
                        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                            <h2>
                                <span>Welcome to </span><span class="accent">Zero Hunger</span>
                            </h2>
                            <p>
                                We collect food and donate it to the needy children and other
                                needy people.
                            </p>
                            <div class="d-flex">
                                <a href="#about" class="btn-get-started">Donate Food</a>
                            </div>
                        </div>
                        <div class="col-lg-5 order-1 order-lg-2">
                            <img src="{{ asset('assets/image/hero-img.svg') }}" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>

                <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="container position-relative">
                        <div class="row gy-4 mt-5">
                            <div class="col-xl-4 col-md-6">
                                <div class="icon-box">
                                    <div class="icon"><i class="bi bi-easel"></i></div>
                                    <h4 class="title">
                                        <a href="" class="stretched-link">Partner With Us</a>
                                    </h4>
                                </div>
                            </div>
                            <!--End Icon Box -->

                            <div class="col-xl-4 col-md-6">
                                <div class="icon-box">
                                    <div class="icon"><i class="bi bi-gem"></i></div>
                                    <h4 class="title">
                                        <a href="" class="stretched-link">Feed The Children</a>
                                    </h4>
                                </div>
                            </div>
                            <!--End Icon Box -->

                            <div class="col-xl-4 col-md-6">
                                <div class="icon-box">
                                    <div class="icon"><i class="bi bi-geo-alt"></i></div>
                                    <h4 class="title">
                                        <a href="" class="stretched-link">Kaula Lumpur, Malaysia</a>
                                    </h4>
                                </div>
                            </div>
                            <!--End Icon Box -->

                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Hero Section -->



            <!-- About Section -->
            <section id="about" class="about section bg-white">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2 class="text-black">About Us</h2>
                    <p>
                        Dedicated to nourishing Malaysia's future by combating child hunger
                    </p>
                </div>
                <!-- End Section Title -->

                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <h3>
                                Working tirelessly to ensure no child in Malaysia goes to bed
                                hungry
                            </h3>
                            <img src="{{asset('assets/image/about.jpg')}}" class="img-fluid rounded-4 mb-4"
                                alt="Children receiving food" />
                            <p>
                                In Malaysia, child hunger remains a pressing issue, affecting
                                thousands of young lives daily. Our organization is committed to
                                addressing this challenge head-on, working with communities,
                                schools, and government agencies to provide nutritious meals to
                                children in need.
                            </p>
                            <p>
                                We believe that proper nutrition is fundamental to a child's
                                growth, development, and future success. By combating hunger,
                                we're not just filling stomachs – we're fueling dreams,
                                supporting education, and building a stronger future for
                                Malaysia.
                            </p>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                            <div class="content ps-0 ps-lg-5">
                                <p class="fst-italic">
                                    Our mission is to eradicate child hunger in Malaysia through
                                    sustainable, community-driven initiatives.
                                </p>
                                <ul>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Providing nutritious meals to children in underprivileged
                                            areas</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Educating communities about proper nutrition and food
                                            security</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Collaborating with local farmers and businesses to create
                                            sustainable food sources</span>
                                    </li>
                                </ul>
                                <p>
                                    Since our inception, we've served over 1 million meals to
                                    children across Malaysia. But our work is far from over. With
                                    your support, we can reach more children, expand our programs,
                                    and make a lasting impact on child nutrition in our country.
                                </p>

                                <div class="position-relative mt-4">
                                    <img src="{{ asset('assets/image/about-2.jpg') }}" class="img-fluid rounded-4"
                                        alt="Volunteers serving food to children" />
                                    <a href="https://www.youtube.com/watch?v=your-video-id"
                                        class="glightbox pulsating-play-btn"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /About Section -->

            <!-- Clients Section -->
            <section id="clients" class="clients section bg-white">
                <div class="container">
                    <h2 class="text-center fw-semibold mb-4 text-black">
                        Our Partner NGOs and Resturants
                    </h2>
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                  },
                  "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                  },
                  "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                  },
                  "992": {
                    "slidesPerView": 6,
                    "spaceBetween": 120
                  }
                }
              }
            </script>
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/image/clients/client-1.png') }}" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/image/clients/client-2.png') }}" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/image/clients/client-3.png') }}" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/image/clients/client-4.png') }}" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/image/clients/client-5.png') }}" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/image/clients/client-6.png') }}" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/image/clients/client-7.png') }}" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/image/clients/client-8.png') }}" class="img-fluid"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Clients Section -->

            <!-- Stats Section -->
            <section id="stats" class="stats section bg-white">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4 align-items-center">
                        <div class="col-lg-5">
                            <img src="{{ asset('assets/image/stats-img.svg') }}" alt=""
                                class="img-fluid" />
                        </div>

                        <div class="col-lg-7">
                            <div class="row gy-4">
                                <div class="col-lg-6">
                                    <div class="stats-item d-flex">
                                        <i class="bi bi-emoji-smile flex-shrink-0"></i>
                                        <div>
                                            <span data-purecounter-start="0" data-purecounter-end="232"
                                                data-purecounter-duration="1" class="purecounter text-black"></span>
                                            <p>
                                                <strong>Happy Childrens</strong>
                                                <span>we served</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Stats Item -->

                                <div class="col-lg-6">
                                    <div class="stats-item d-flex">
                                        <i class="bi bi-journal-richtext flex-shrink-0"></i>
                                        <div>
                                            <span data-purecounter-start="0" data-purecounter-end="521"
                                                data-purecounter-duration="1" class="purecounter text-black"></span>
                                            <p>
                                                <strong>NGOs and Restaurant</strong>
                                                <span>partners across the country</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Stats Item -->

                                <div class="col-lg-6">
                                    <div class="stats-item d-flex">
                                        <i class="bi bi-headset flex-shrink-0"></i>
                                        <div>
                                            <span class="fw-bolder fs-2"> 24/7 </span>
                                            <p>
                                                <strong>Support</strong>
                                                <span>provided for any queries</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Stats Item -->

                                <div class="col-lg-6">
                                    <div class="stats-item d-flex">
                                        <i class="bi bi-people flex-shrink-0"></i>
                                        <div>
                                            <span data-purecounter-start="0" data-purecounter-end="32"
                                                data-purecounter-duration="1" class="purecounter text-black">+</span>
                                            <p>
                                                <strong>Hard Working</strong>
                                                <span>volunteers around kaula lumpur</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Stats Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Stats Section -->



            <!-- Team Section -->
            <section id="team" class="team section bg-white">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2 class="text-black">Our Team</h2>
                    <p>
                        Meet our team of experts that developed this application.
                    </p>
                </div>
                <!-- End Section Title -->

                <div class="container">
                    <div class="row gy-4">
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <img src="{{ asset('assets/image/team/team-1.jpg') }}" class="img-fluid"
                                    alt="" />
                                <h4 class="text-black">Bharat Kumar Rawal</h4>
                                <span>MERN Developer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Team Member -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="member">
                                <img src="{{ asset('assets/image/team/team-2.jpg') }}" class="img-fluid"
                                    alt="" />
                                <h4 class="text-black">Sunil Kumar Bhagat</h4>
                                <span>Laravel Developer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Team Member -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                            <div class="member">
                                <img src="{{ asset('assets/image/team/team-3.jpg') }}" class="img-fluid"
                                    alt="" />
                                <h4 class="text-black">Silon Maharjan</h4>
                                <span>UI/UX Designer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Team Member -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div class="member">
                                <img src="{{ asset('assets/image/team/team-4.jpg') }}" class="img-fluid"
                                    alt="" />
                                <h4 class="text-black">Prabesh Shrestha</h4>
                                <span>Java Developer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Team Member -->
                    </div>
                </div>
            </section>
            <!-- /Team Section -->



            <!-- Faq Section -->
            <section id="faq" class="faq section bg-white">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="content px-xl-5">
                                <h3 class="text-black">
                                    <span>Frequently Asked </span><strong>Questions</strong>
                                </h3>
                                <p>
                                    Learn more about how our Zero Hunger platform connects donors with children in need.
                                    If you have additional questions, feel free to contact us!
                                </p>
                            </div>
                        </div>
            
                        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                            <div class="faq-container">
                                <div class="faq-item faq-active">
                                    <h3>
                                        <span class="num">1.</span>
                                        <span>How does the Zero Hunger platform work?</span>
                                    </h3>
                                    <div class="faq-content">
                                        <p>
                                            Our platform allows donors to register and list available food items that can be given to children and families in need. Charitable organizations and beneficiaries can view these donations and arrange for pickup or delivery. It's a simple, transparent way to fight hunger together.
                                        </p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div>
                                <!-- End Faq item-->
            
                                <div class="faq-item ">
                                    <h3>
                                        <span class="num">2.</span>
                                        <span>Who can donate food?</span>
                                    </h3>
                                    <div class="faq-content">
                                        <p>
                                            Anyone can become a donor—individuals, restaurants, supermarkets, and other businesses. Whether you have surplus food or you're simply looking to contribute, we encourage you to sign up and share with those in need.
                                        </p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div>
                                <!-- End Faq item-->
            
                                <div class="faq-item">
                                    <h3>
                                        <span class="num">3.</span>
                                        <span>Is there any cost involved?</span>
                                    </h3>
                                    <div class="faq-content">
                                        <p>
                                            No, there are no costs involved for either donors or recipients. Our goal is to facilitate a seamless and free flow of food from those who can give to those who need it most.
                                        </p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div>
                                <!-- End Faq item-->
            
                                <div class="faq-item">
                                    <h3>
                                        <span class="num">4.</span>
                                        <span>What types of food can be donated?</span>
                                    </h3>
                                    <div class="faq-content">
                                        <p>
                                            Donors can contribute fresh produce, packaged foods, and even prepared meals, as long as they are in good condition and safe to eat. We encourage donors to follow local food safety guidelines when donating.
                                        </p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div>
                                <!-- End Faq item-->
            
                                <div class="faq-item">
                                    <h3>
                                        <span class="num">5.</span>
                                        <span>How do beneficiaries receive the food?</span>
                                    </h3>
                                    <div class="faq-content">
                                        <p>
                                            Beneficiaries can browse available food donations and either request a pickup or opt for a delivery, depending on the arrangements made with the donor. Charitable organizations also help facilitate the distribution process to ensure it reaches those most in need.
                                        </p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div>
                                <!-- End Faq item-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
       
            <!-- /Faq Section -->

          

            <!-- Contact Section -->
            <section id="contact" class="contact section bg-white">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2 class="text-black">Contact</h2>
                    <p>
                        We'd love to hear from you! Have a question, comment, or just want to say hi?
                    </p>
                </div>
                <!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gx-lg-0 gy-4">
                        <div class="col-lg-4">
                            <div class="info-container d-flex flex-column align-items-center justify-content-center">
                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                                    <div>
                                        <h3>Address</h3>
                                        <p>Kaula Lumpur, Malaysia</p>
                                    </div>
                                </div>
                                <!-- End Info Item -->

                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-telephone flex-shrink-0"></i>
                                    <div>
                                        <h3>Call Us</h3>
                                        <p>++977 9810102020</p>
                                    </div>
                                </div>
                                <!-- End Info Item -->

                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-envelope flex-shrink-0"></i>
                                    <div>
                                        <h3>Email Us</h3>
                                        <p>info@example.com</p>
                                    </div>
                                </div>
                                <!-- End Info Item -->

                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                                    <i class="bi bi-clock flex-shrink-0"></i>
                                    <div>
                                        <h3>Open Hours:</h3>
                                        <p>Mon-Sat: 11AM - 23PM</p>
                                    </div>
                                </div>
                                <!-- End Info Item -->
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <form action="{{ route('contact.store') }}" method="post" class="php-email-form" >
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Your Name" required="" />
                                    </div>

                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Your Email" required="" />
                                    </div>

                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="subject"
                                            placeholder="Subject" required="" />
                                    </div>

                                    <div class="col-md-12">
                                        <textarea class="form-control" name="message" rows="8" placeholder="Message" required=""></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">
                                            Your message has been sent. Thank you!
                                        </div>

                                        <button type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Contact Form -->
                    </div>
                </div>
            </section>
            <!-- /Contact Section -->
        </div>
        <!---------header end--------------->



    </div>
    <footer id="footer" class="footer accent-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Zero Hunger</span>
                    </a>
                    <p>
                        Our mission is to combat hunger by connecting food donors with needy children and families. Through collaboration and kindness, we can make a difference and ensure no child goes to bed hungry.
                    </p>
                    <div class="social-links d-flex mt-4">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
    
                <div class="col-lg-2 col-6 footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Donate Food</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
    
                <div class="col-lg-2 col-6 footer-links">
                    <h4>Get Involved</h4>
                    <ul>
                        <li><a href="#">Become a Donor</a></li>
                        <li><a href="#">Partner with Us</a></li>
                        <li><a href="#">Volunteer</a></li>
                        <li><a href="#">Contact Support</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
    
                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>123 Charity Street</p>
                    <p>Kuala Lumpur, 50000</p>
                    <p>Malaysia</p>
                    <p class="mt-4">
                        <strong>Phone:</strong> <span>+60 123 456 789</span>
                    </p>
                    <p><strong>Email:</strong> <span>support@zerohunger.org</span></p>
                </div>
            </div>
        </div>
    
        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span>
                <strong class="px-1 sitename">Zero Hunger</strong>
                <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                Designed by <a href="#">Zero hunger</a>
            </div>
        </div>
    </footer>
    



    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

   @include('layouts.script')
</body>


</html>
