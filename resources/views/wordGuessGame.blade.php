@extends('layout.headerfooter')
<link href="/assets/css/wordguessgame.css" rel="stylesheet">
@section('content')


<main id="main" data-aos="fade" data-aos-delay="1500">  

<div class="wrapper">
      <h3 class="text-black">Guess the word!</h3>
  </br>
   <div class="hint-ref"></div>
   <div id="user-input-section"></div>
   <div id="message"></div> 
   <div id="letter-container"></div>    
  </div>
  <div class="controls-container">
      <div id="result"></div>
      <div id="word"></div>
      <button id="start">Start</button>
  </div>

</main><!-- End #main -->
<script src="/assets/js/wordguessgame.js"></script>
@endsection
