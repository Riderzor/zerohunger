
@include('layouts.head')
<body class="blog-page p-10">
<div class="container m-5">
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
<br>
<br>
<br>

<br>

<br>

  <form action="{{route('acceptor.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Name</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name" name="name" value="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Food Name</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name" name="food_name" value="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Phone Number</label>
      <input type="number" class="form-control" id="exampleInputPassword1" placeholder="contact" name="contact" value="">
    </div>
    <button type="submit" class="btn btn-primary m-2">Submit</button>
  </form>
</div>


</body>
