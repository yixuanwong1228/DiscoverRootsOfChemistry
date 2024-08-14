@extends('layout.headerfooter')

<style>
.thumbnail-card {
    cursor: pointer;
    transition: transform 0.2s;
}
.thumbnail-card:hover {
    transform: scale(1.05);
}
.thumbnail-img {
    width:300px;
    height:500px;
    margin:auto;
    object-fit: cover;
}
 </style>

@section('content')


<main id="main" data-aos="fade" data-aos-delay="1500" class="mt-5">
    <img src="/assets/img/Puzzle/puzzlefont.png" style="margin-top:70px; max-width:400px;">
    <div class="row mt-2">
    <div class="col-md-4 mb-4">
            <a href="{{ route('puzzle_board', ['name' => 'Carbon']) }}" class="thumbnail-card" style="text-decoration:none;">
                <img src="/assets/img/Puzzle/carbon.jpg" class="card-img-top thumbnail-img" alt="Atom Name">
                <div class="card-body text-center">
                    <h5 class="card-title">Carbon</h5>
                </div>
            </a>
    </div>
    <div class="col-md-4 mb-4">
            <a href="{{ route('puzzle_board', ['name' => 'Magnesium']) }}" class="thumbnail-card" style="text-decoration:none;">
                <img src="/assets/img/Puzzle/magnesium.jpg" class="card-img-top thumbnail-img" alt="Atom Name">
                <div class="card-body text-center">
                    <h5 class="card-title">Magnesium</h5>
                </div>
            </a>
    </div>
    <div class="col-md-4 mb-4">
            <a href="{{ route('puzzle_board', ['name' => 'Oxygen']) }}" class="thumbnail-card" style="text-decoration:none;">
                <img src="/assets/img/Puzzle/oxygen.jpg" class="card-img-top thumbnail-img" alt="Atom Name">
                <div class="card-body text-center">
                    <h5 class="card-title">Oxygen</h5>
                </div>
            </a>
    </div>
    </div>


  </main><!-- End #main -->
@endsection
