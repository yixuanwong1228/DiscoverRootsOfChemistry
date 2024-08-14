@extends('layout.headerfooter')
<link href="/assets/css/puzzle.css" rel="stylesheet">

 
@section('content')

<main id="main" data-aos="fade" data-aos-delay="1500" style="margin-bottom:90px; margin-top:100px;">
    <h3 class="p-1 text-center" >{{ $name }}</h3>
        <input type="text" value="{{ $name }}" hidden id="puzzlename">
        <div id="board"></div>
        <h4 class="text-center">Turns: <span id="turns">0</span></h4>
        <div id="pieces"></div>

  </main><!-- End #main -->
  <script src="/assets/js/puzzle.js"></script>
@endsection
