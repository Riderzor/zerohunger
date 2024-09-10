@include('layouts.head')

<body class="blog-page">
    <header id="header" class="header fixed-top">
        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:contact@example.com">contact@example.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
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
                        <li><a href="{{ route('listing.show') }}">Food Listings</a></li>

                        <li><a href="team.html">Team</a></li>

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

    <main class="main">
        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Available Food Donations</h1>
                            <p class="mb-0">
                                Discover food donations available for those in need. Our platform connects generous donors with children and families facing hunger. Together, we can reduce food waste and fight hunger.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Available Food Donations</li>
                    </ol>
                </div>
            </nav>
        </div>
    
        <!-- End Page Title -->

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">
          {{-- {{ dd($food) }} --}}
            <div class="container">
                <div class="row gy-4">
                     @foreach ($foods as $food)

                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                <img src="/foods/{{$food->image}}" alt="" class="img-fluid"  style="height: 300px; object-fit: cover;"/>
                                
                            </div>

                            <h2 class="post-category">Donated By: {{ $food->name }}</h2>

                            <div class="">
                                <div>
                                    <p>Food Type: {{ $food->food_type }}</p>
                                    <p>Qty: {{ $food->quantity }}</p>
                                    <p>Contact: {{ $food->contact }}</p>

                                    <p>Time: {{ $food->time }}</p>
                                    <p>Date: {{ $food->date }}</p>
                                    <p>Address: {{ $food->address }}</p>
                                </div>
                            </div>
                            <a  href="{{ route('acceptor.create') }}" class="btn btn-outline-danger">Accept Food</a>
                        </article>
                    </div>
                  
          @endforeach

                </div>
            </div>
        </section>
        <!-- /Blog Posts Section -->

       
    </main>

    <footer id="footer" class="footer accent-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Impact</span>
                    </a>
                    <p>
                        Cras fermentum odio eu feugiat lide par naso tierra. Justo eget
                        nada terra videa magna derita valies darta donna mare fermentum
                        iaculis eu non diam phasellus.
                    </p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p>United States</p>
                    <p class="mt-4">
                        <strong>Phone:</strong> <span>+1 5589 55488 55</span>
                    </p>
                    <p><strong>Email:</strong> <span>info@example.com</span></p>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span>
                <strong class="px-1 sitename">Impact</strong>
                <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>



    @include('layouts.script')

</body>
