@include('layouts.head')
<section class="">
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
                        <li><a href="{{ route('listing.show') }}">Food Listings</a></li>

                        <li><a href="#team">Team</a></li>

                        <li><a href="{{ route('contact.create') }}">Contact</a></li>

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
    
</div>


<div class="">
    <!-- component -->
<!-- Tailwind Play: https://play.tailwindcss.com/qIqvl7e7Ww  -->


<div class="flex min-h-screen items-center justify-start bg-white">
    <div class="mx-auto w-full max-w-lg">
      <h1 class="text-4xl font-medium">Contact us</h1>
      <p class="mt-3">Email us at help@domain.com or message us here:</p>
  
      <form action="https://api.web3forms.com/submit" class="mt-10">
      
      <!-- This is a working contact form. 
           Get your free access key from: https://web3forms.com/  -->
  
        <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" /> 
        <div class="grid gap-6 sm:grid-cols-2">
          <div class="relative z-0">
            <input type="text" name="name" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
            <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your name</label>
          </div>
          <div class="relative z-0">
            <input type="text" name="email" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
            <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your email</label>
          </div>
          <div class="relative z-0 col-span-2">
            <textarea name="message" rows="5" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" "></textarea>
            <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your message</label>
          </div>
        </div>
        <button type="submit" class="mt-5 rounded-md bg-black px-10 py-2 text-white">Send Message</button>
      </form>
    </div>
  </div>
</div>


<footer id="footer" class="footer accent-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span class="sitename">Zero Hunger</span>
                </a>
                <p>
                    Our mission is to combat hunger by connecting food donors with needy children and families. Through
                    collaboration and kindness, we can make a difference and ensure no child goes to bed hungry.
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
</section>
