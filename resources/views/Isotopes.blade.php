@extends('layout.headerfooter')



@section('content')
<style>
.hero {
  width: 100%;
  min-height: 30vh;
  background: url('/assets/img/isotopesbackground.png') no-repeat center center;
  background-size: cover;
  position: relative;
  padding: 140px 0 60px 0;
}
.isotope-container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 20px 0;
  }

  .isotope {
    position: relative;
    width: 400px;
    height: 300px;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s;
  }

  .isotope img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .isotope:hover {
    transform: scale(1.05);
  }

  .isotope-info {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    top:0;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 10px;
    text-align: center;
    opacity: 0;
    transition: opacity 0.3s;
  }

  .isotope:hover .isotope-info {
    opacity: 1;
  }
</style>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="text-center">
          <h2>Isotopes and Application</h2>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->
  <section id="gallery-single" class="gallery-single">
  <div class="row p-2">
    <div class="col-6">
    <video width="640" height="360" autoplay muted playsinline>
  <source src="/assets/video/IsotopesAnimation.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

    </div>
    <div class="col-6">
   
    <div class="portfolio-info" style="margin-top:70px;">
              <h3>What is Isotopes?</h3>
              <p>Isotopes are variants of a particular chemical element that have the same number of protons but differ in the number of neutrons within their nuclei. This difference in neutron count leads to variations in the atomic mass of the isotopes of the same element, though they retain identical chemical properties due to having the same number of protons.</p>
            </div>
</div>

  </section>

<hr>
<div class="isotope-container">
    <div class="isotope">
      <img src="assets/img/Isotopes/Carbon14.png" alt="Protium">
      <div class="isotope-info">
        <h3>Carbon-14</h3>
        <p>To determine the age of ancient artifacts or fossils.</p>
      </div>
    </div>
    <div class="isotope">
      <img src="assets/img/Isotopes/Lead210.png" alt="Deuterium">
      <div class="isotope-info">
        <h3>Lead-210</h3>
        <p>To determine the age of sand and earth layers.</p>
      </div>
    </div>
    <div class="isotope">
      <img src="assets/img/Isotopes/Phosphorus32.png" alt="Tritium">
      <div class="isotope-info">
        <h3>Phosphorus-32</h3>
        <p>To determine the rate of phosphate absorption of fertilisers and metabolism in plants.</p>
      </div>
    </div>
    
  </div>

  <div class="isotope-container">
  <div class="isotope">
      <img src="assets/img/Isotopes/Hydrogen3.png" alt="Tritium">
      <div class="isotope-info">
        <h3>Hydrogen-3</h3>
        <p>As a detector to study sewage and liquid wastes</p>
      </div>
    </div>
    <div class="isotope">
      <img src="assets/img/Isotopes/Sodium24.png" alt="Tritium">
      <div class="isotope-info">
        <h3>Sodium-24</h3>
        <p>To detect the leakage in underground pipe.</p>
      </div>
    </div>
    <div class="isotope">
      <img src="assets/img/Isotopes/Cobalt60.png" alt="Tritium">
      <div class="isotope-info">
        <h3>Cobalt-60</h3>
        <p>To sterilise surgucal tools.</p>
      </div>
    </div>
  </div>

@endsection
