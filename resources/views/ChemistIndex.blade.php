@extends('layout.headerfooter')


@section('content')
<style>
.hero {
  width: 100%;
  min-height: 30vh;
  background: url('/assets/img/virtuallabbackground.png') no-repeat center center;
  background-size: cover;
  position: relative;
  padding: 140px 0 60px 0;
}
.thumbnail-card {
  cursor: pointer;
  transition: transform 0.2s;
  border: none;
  
}
.thumbnail-card:hover {
  transform: scale(1.05);
}
.thumbnail-img {
  width: 100%;
  height: 300px; /* Fixed height */
  width:310px;
  object-fit: cover; /* Ensures the image covers the area without distortion */
}
.card-body {
  padding: 15px;
}
</style>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="text-center">
          <h2>Notable Chemist</h2>
        </div>
      </div>
    </div>
</section><!-- End Hero Section -->

<section>
  <div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        @foreach($chemists as $chemist)
      <div class="col-md-4 mb-4 d-flex align-items-stretch">
        <div class="card thumbnail-card mx-auto">
          <a href="{{ route('chemist.profile', $chemist->chemistID) }}" style="text-decoration:none;">
            <img src="{{ asset($chemist->profilePicture) }}" class="card-img-top thumbnail-img" alt="Marie Curie">
            <div class="card-body text-center">
              <h5 class="card-title">{{ $chemist->name }}</h5>
            </div>
          </a>
        </div>
    </div>
    @endforeach
</div>

</section>

@endsection

