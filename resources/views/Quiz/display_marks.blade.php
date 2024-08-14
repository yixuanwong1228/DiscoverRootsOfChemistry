<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
      
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>ChemistoryExplorer</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="/assets/img/favicon.png" rel="icon">
        <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="/assets/vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="/assets/css/main.css" rel="stylesheet">

      <style>
        main {
            color:white;
        }

        body{
            margin-top:150px;
            background-color: black;
        }
        

        .navigation-buttons {
            display: flex;
            justify-content: space-between;
            width: 15%;
            margin-top:20px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: white;
            color: black;
            cursor: pointer;
        }

        button:hover{
            background-color: #E0E0E0;
        }
    </style>
   </head>
   <body>
        
     <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="/assets/img/nuclearlogo.png" alt="">

        <h1>ChemistryExplorer</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="gallery.html">Nature</a></li>
              <li><a href="gallery.html">People</a></li>
              <li><a href="gallery.html">Architecture</a></li>
              <li><a href="gallery.html">Animals</a></li>
              <li><a href="gallery.html">Sports</a></li>
              <li><a href="gallery.html">Travel</a></li>
              <li class="dropdown"><a href="#"><span>Sub Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="services.html">Services</a></li>
          <li><a href="contact.html">Contact</a></li>
          @if(Route::has('login'))
            @auth
            <li>
              <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
              </a>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
            
          @else
            <li><a href="{{ route('login') }}">Sign In</a></li>
          @endauth
          @endif
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
      <main>
        <h3 class="fw-bold text-center mt-4">{{$quizName}}</h3>
        <br/>
        <div class="d-flex justify-content-center">
            <img src="/assets/img/correct_logo.png" style="max-width:200px;" alt="">
        </div>
        <br/>
        <div class="d-flex justify-content-center mt-2">
            <p class="fw-bold me-2">STATUS: </p> <p>Completed</p>
        </div>
        <div class="d-flex justify-content-center">
            <p class="fw-bold me-2">MARKS: </p><p>{{ number_format($marks, 2) }}</p>
        </div>
        
        
        <div class="mx-auto navigation-buttons">
                <a href="{{ route('preview_quiz', ['id' => $quizID]) }}"><button>Preview</button></a>
                <a href="{{ route('completed')}}"><button>Back</button></a>
            </div>
      </main>
      <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>ArtSpaceinnovator</span></strong>. All Rights Reserved
            </div>
        
            </div>
        </footer><!-- End Footer -->
   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>