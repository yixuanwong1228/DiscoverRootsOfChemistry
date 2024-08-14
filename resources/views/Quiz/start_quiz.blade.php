<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
      <link rel="stylesheet" href="/assets/css/Quiz/quiz.css"/>
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
        .sidebar {
    position: fixed;
    top: 80px;
    bottom: 0;
    left: 0;
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
    width: 200px;
    background-color:black;
}
.sidebar .active {
    border-radius: 5px;
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    background-color: #54671f;
    font-weight: bold;
}
.sidebar a {
    background-color:#acb984;
}
.sidebar-sticky {
    position: relative;
    top: 0;
    height: calc(100vh - 48px);
    overflow-x: hidden;
    overflow-y: auto;
   /* Scrollable contents if viewport is shorter than content. */
}
main {
    padding-left: 240px;

}

body{
    background-color: #CBD6DB;
}
.custom-navbar {
    background-color: lightgrey;
    border-bottom: 2px solid #1c3e3d;
}

.question-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 10px;
}

.question-rect {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;

    background-color: #425560 !important;
    color: black;
    text-align: center;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
}

.question-rect:hover {
    background-color: #425560;
    color:white;
}

.question-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 20px;
}

#question-display {
    margin-bottom: 20px;
    padding: 30px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 90%;
    background-color: #f9f9f9;
    color:black;
}

.navigation-buttons {
    display: flex;
    justify-content: space-between;
    width: 50%;
}

button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: black;
    color: white;
    cursor: pointer;
}

button:hover{
    background-color: #425560;
}

button:disabled{
    background-color: #425560;
    cursor: not-allowed;
}

.current-question {
    border: 3px solid white;
}

h3{
    color:black;
}

</style>

<meta name="csrf-token" content="{{ csrf_token() }}">
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

      <!-- Sidebar -->
      <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse p-2">
      <br/>
         <h4>Questions</h4>
         <div class="position-sticky">
            <div class="question-grid" id="question-grid">
               <!-- Dynamic question links will be injected here -->
            </div>
         </div>
      </nav>
      <main>
        <br/><br/><br/><br/><br/> 
         <h3>{{$quiz->name}}</h3>
         <input id="quizID" type="hidden" value="{{$quiz->id}}">
         <div class="question-container">
            <div id="question-display">
               <!-- Question content will be injected here -->
            </div>
            <div class="navigation-buttons">
               <button id="prev-btn" onclick="prevQuestion()">Previous</button>
               <button id="action-btn" onclick="nextQuestion()">Next</button>
            </div>
         </div>
      </main>
   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="/assets/js/Quiz/quiz.js"></script>
</html>