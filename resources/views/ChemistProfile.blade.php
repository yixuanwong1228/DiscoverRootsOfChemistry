@extends('layout.headerfooter')
<link href="/assets/css/ChemistProfile.css" rel="stylesheet">
@section('content')
<style>
   #about {
   background-color: #dee2d9;
   color:black;
   }
   .chemist-img {
       width: 100%;
       max-width: 300px; /* Adjust based on your requirements */
       height: auto; /* Maintains aspect ratio */
       object-fit: cover; /* Ensures the image covers the area without distortion */
       border-radius: 8px; /* Optional: rounds the corners of the image */
       box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: adds a shadow for better visual effect */
   }
   .content {
       margin-top: 20px;
   }

   /* Ensures that image and content are aligned correctly */
   .about .row {
       display: flex;
       align-items: center; /* Vertically centers content */
   }

   .about .col-lg-3,
   .about .col-lg-9 {
       padding: 25px; /* Adds padding around content */
   }


   .about .col-lg-3 {
       display: flex;
       justify-content: center; /* Centers the image horizontally */
   }

   .about .col-lg-9 {
       flex: 1; /* Allows this column to take up the remaining space */
   }
   .content h1 {
       font-size: 2rem; /* Adjust the font size as needed */
       text-align: left; /* Aligns the text to the left */
       margin-bottom: 1rem; /* Adds space below the heading */
   }
   .about .col-lg-7 {
       margin-left: 200px; /* Pushes this column to the right */
   }
   .chemist-intro {
       font-size: 1.1rem; /* Adjust the size as needed */
       line-height: 1.6; /* Adjusts the space between lines for readability */
       color: #333; /* Text color */
       text-align: justify; /* Justify the text for a more uniform appearance */
       margin-top: 10px; /* Space above the paragraph */
       margin-bottom: 10px; /* Space below the paragraph */
       padding: 10px; /* Adds padding around the text */

       border-radius: 5px; /* Rounds the corners of the paragraph background */
   }
   .biography-description {
       text-align: justify;
       font-size: 16px;
       line-height: 1.6;
   }

</style>

<!-- ======= About Section ======= -->
<section id="about" class="about" style="margin-top:150px;">
   <div class="container">
      <div class="row gy-4 ">
         <div class="col-lg-3">
            <img src="{{ asset($chemist->profilePicture) }}" class="img-fluid chemist-img" alt="{{ $chemist->name }}">
         </div>
         <div class="col-lg-9 content">
            <h1>{{ $chemist->name }}</h1>
            <div class="row">
               <div class="col-lg-5">
                  <ul>
                     <li><i class="bi bi-chevron-right"></i> <strong>> Born:</strong> <span>{{ $chemist->birthdate }}
                        </span>
                     </li>
                     <li><i class="bi bi-chevron-right"></i> <strong>> Died:</strong> <span>{{ $chemist->deathdate }}
                        </span>
                     </li>
                     <li><i class="bi bi-chevron-right"></i> <strong>> Nationality:</strong> <span>{{ $chemist->nationality }}</span></li>
                  </ul>
               </div>
               <div class="col-lg-7">
                  <ul>
                     <li><i class="bi bi-chevron-right"></i> <strong>> Institution:</strong> <span>{{ $chemist->institution }}</span></li>
                     <li><i class="bi bi-chevron-right"></i> <strong>> Born Place:</strong> <span>{{ $chemist->birthPlace }}</span></li>
                     <li><i class="bi bi-chevron-right"></i> <strong>> Death Age:</strong> <span>{{ $chemist->deathAge }}</span></li>
                  </ul>
               </div>
            </div>
            <p class="chemist-intro">
                {{ $chemist->intro }}
            </p>
         </div>
      </div>
   </div>
</section>
<!-- End About Section -->
<section class="design-section">
    @foreach($biographies as $biography)
   <div class="timeline">
      <div class="timeline-year">
         <strong>{{ $biography->title }}</strong>
         <p>{{ $biography->timeline }}</p>
      </div>
      <div class="timeline-middle">
         <div class="timeline-circle"></div>
      </div>
      <div class="timeline-component timeline-content">
         <div class="row">
            <div class="col-12">
               <img class="img-fluid float-left biography-image" src="{{ asset($biography->imageURL) }}" alt="image" style="max-width:200px; margin-right: 20px;">
               <div class="biography-description">
                {{ $biography->description }}
               </div>
            </div>
         </div>
      </div>
   </div>
   @endforeach

</section>

@endsection
