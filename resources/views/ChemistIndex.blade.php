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
      <div class="col-md-4 mb-4 d-flex align-items-stretch">
        <div class="card thumbnail-card mx-auto">
          <a href="{{url('/Chemist_Profile')}}" style="text-decoration:none;"> 
            <img src="/assets/img/Chemist/MarieCurie.png" class="card-img-top thumbnail-img" alt="Marie Curie">
            <div class="card-body text-center">
              <h5 class="card-title">Marie Curie</h5>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4 mb-4 d-flex align-items-stretch">
        <div class="card thumbnail-card mx-auto">
          <a href="#" style="text-decoration:none;"> 
            <img src="/assets/img/Chemist/IsaacNewton.jpg" class="card-img-top thumbnail-img" alt="Isaac Newton">
            <div class="card-body text-center">
              <h5 class="card-title">Isaac Newton</h5>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4 mb-4 d-flex align-items-stretch">
        <div class="card thumbnail-card mx-auto">
          <a href="#" style="text-decoration:none;"> 
            <img src="/assets/img/Chemist/AmedeoAvogadro.jpg" class="card-img-top thumbnail-img" alt="Amedeo Avogadro">
            <div class="card-body text-center">
              <h5 class="card-title">Amedeo Avogadro</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

