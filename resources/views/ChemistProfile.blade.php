@extends('layout.headerfooter')
<link href="/assets/css/ChemistProfile.css" rel="stylesheet">
@section('content')
<style>
   #about {
   background-color: #dee2d9;
   color:black;
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
