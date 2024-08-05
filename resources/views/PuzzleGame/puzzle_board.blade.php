@extends('layout.headerfooter')
<style>
    .gallery-img {
    display: block;
    width: 100%; /* Adjust the width as needed */
    max-width: 700px; /* Optional: Limit the maximum width of the image */
    margin-right:20px;
    border: 15px solid white; /* Add a thick border with a wood-like color */
    }
  </style>
@section('content')

<main id="main" data-aos="fade" data-aos-delay="1500">
    <h3 class="p-1" style="margin-top:90px;">{{ $name }}</h3>
        <input type="text" value="{{ $name }}" hidden id="puzzlename">
        <div id="board"></div>
        <h4>Turns: <span id="turns">0</span></h4>
        <div id="pieces"></div>

  </main><!-- End #main -->
@endsection
