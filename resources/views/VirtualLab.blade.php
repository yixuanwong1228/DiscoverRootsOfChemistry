@extends('layout.headerfooter')

<link href="assets/css/VirtualLab.css" rel="stylesheet">

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
</style>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="text-center">
          <h2>Alkali Metals Reaction with Water</h2>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <div class="container mt-4">
        <div class="row">
            <div class="col-md-6" id="experiment-container">
            <div id="chat-header" class="border-bottom mb-3">
                        <h4>Apparatus and Materials</h4>
                    </div>
                <div class="row">
                    <div id="metal-container" class="col-6 d-flex flex-column align-items-center">
                        <div class="metal-item">
                            <img class="metal" id="lithium" src="assets/img/VirtualLab/lithium.png" alt="Lithium" draggable="true">
                            <p class="label">Lithium</p>
                        </div>
                        <div class="metal-item">
                            <img class="metal" id="sodium" src="assets/img/VirtualLab/sodium.png" alt="Sodium" draggable="true">
                            <p class="label">Sodium</p>
                        </div>
                        <div class="metal-item">
                            <img class="metal" id="potassium" src="assets/img/VirtualLab/potassium.png" alt="Potassium" draggable="true">
                            <p class="label">Potassium</p>
                        </div>
                        <div class="metal-item">
                            <img class="metal" id="rubidium" src="assets/img/VirtualLab/rubidium.png" alt="Rubidium" draggable="true">
                            <p class="label">Rubidium</p>
                        </div>
                    </div>
                    <div id="reaction-container" class="col-6 d-flex justify-content-center align-items-center">
                        <img src="assets/img/VirtualLab/petridish.png" alt="Water" id="water-image">
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-between">
                <div id="chatbox" class="d-flex flex-column flex-grow-1 border rounded p-3">
                <div id="chat-header" class="border-bottom mb-3 d-flex align-items-center">
                    <img src="/assets/img/labAssistant.png" alt="Profile Picture" class="profile-picture mr-2">
                    <h4>Lab Assistant</h4>
                </div>

                    <div id="chat-messages" class="overflow-auto">
                        <!-- Chat messages will appear here -->
                    </div>
                    <div class="input-group mt-2">
                        <input type="text" id="chat-input" class="form-control" placeholder="Type your message...">
                        <div class="input-group-append">
                            <button id="send-button" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="assets/js/VirtualLab.js"></script>