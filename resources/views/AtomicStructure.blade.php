@extends('layout.headerfooter')
<link href="assets/css/AtomicStructure.css" rel="stylesheet">
@section('content')
<style>
   .hero {
   width: 100%;
   min-height: 30vh;
   background: url('/assets/img/atomicmodelbackground.png') no-repeat center center;
   background-size: cover;
   position: relative;
   padding: 140px 0 60px 0;
   }
   #check-button{
   padding: 8px 40px;
   background: var(--color-primary);
   color: #fff;
   border-radius: 50px;
   transition: 0.3s;
   }
</style>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
   <div class="container">
      <div class="row justify-content-center">
         <div class="text-center">
            <h2>Atomic Model</h2>
         </div>
      </div>
   </div>
</section>
<!-- End Hero Section -->
<div class="row">
   <div class="col-3" style="margin-top:60px;">
      <div id="game-instructions" style="padding-left:20px;">
         <p>Select the atom to build:</p>
         <select id="atom-select">
            <option value="oxygen">Oxygen (O)</option>
            <option value="sodium">Sodium (Na)</option>
            <option value="magnesium" selected>Magnesium (Mg)</option>
         </select>
         <p>Build the atom for: <span id="atom-name">Magnesium (Mg)</span></p>
         <p>Nuclear Notation: 
            <span id="nuclear-notation">
            <span class="notation">
            <sup id="nucleon-number" class="nucleon-number">24</sup>
            <sub id="proton-number" class="proton-number">12</sub>
            </span>
            <span id="element-symbol">Mg</span>
            </span>
         </p>
         <p>Protons: <span id="current-protons">0</span></p>
         <p>Neutrons: <span id="current-neutrons">0</span></p>
         <p>Electrons: <span id="current-electrons">0</span></p>
      </div>
   </div>
   <div class="col-4">
      <div id="atom-container">
         <canvas id="atomCanvas"></canvas>
      </div>
   </div>
   <div class="col-5" style="margin-top:90px;">
      <div id="particle-container">
         <div id="proton-container" class="particle-box">
            <h3 class="mt-3">Protons</h3>
            <div class="particle proton" id="proton1" draggable="true"></div>
            <div class="particle proton" id="proton2" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <div class="particle proton" draggable="true"></div>
            <!-- Add more proton elements as needed -->
         </div>
         <div id="neutron-container" class="particle-box">
            <h3 class="mt-3">Neutrons</h3>
            <div class="particle neutron" id="neutron1" draggable="true"></div>
            <div class="particle neutron" id="neutron2" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <div class="particle neutron" draggable="true"></div>
            <!-- Add more neutron elements as needed -->
         </div>
         <div id="electron-container" class="particle-box">
            <h3 class="mt-3">Electrons</h3>
            <div class="particle electron" id="electron1" draggable="true"></div>
            <div class="particle electron" id="electron2" draggable="true"></div>
            <div class="particle electron" id="electron3" draggable="true"></div>
            <div class="particle electron" id="electron4" draggable="true"></div>
            <div class="particle electron" id="electron5" draggable="true"></div>
            <div class="particle electron" id="electron6" draggable="true"></div>
            <div class="particle electron" id="electron7" draggable="true"></div>
            <div class="particle electron" id="electron9" draggable="true"></div>
            <div class="particle electron" id="electron10" draggable="true"></div>
            <div class="particle electron" id="electron11" draggable="true"></div>
            <div class="particle electron" id="electron12" draggable="true"></div>
            <div class="particle electron" id="electron13" draggable="true"></div>
            <div class="particle electron" id="electron14" draggable="true"></div>
            <div class="particle electron" id="electron15" draggable="true"></div>
            <div class="particle electron" id="electron16" draggable="true"></div>
            <div class="particle electron" id="electron17" draggable="true"></div>
            <div class="particle electron" id="electron18" draggable="true"></div>
            <!-- Add more electron elements as needed, up to 8 -->
         </div>
      </div>
      <button id="check-button" style="margin-top:100px;">Check Atom</button>
   <div id="feedback"></div>
   </div>
   
</div>
<script src="/assets/js/AtomicStructure.js"></script>
@endsection