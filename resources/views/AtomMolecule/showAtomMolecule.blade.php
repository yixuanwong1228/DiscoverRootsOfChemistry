@extends('layout.headerfooter')

@section('content')
<link rel="stylesheet" href="{{url('assets/css/AtomMolecule/showAtomMolecule.css')}}">

<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Atom & Molecule</h2>
        </div>
      </div>
    </div>
</section>

<main id="main" data-aos="fade" data-aos-delay="1500">

<section id="gallery" class="gallery">
    <div class="container-fluid">
        <div class="row gy-4 justify-content-center">
            @foreach($materials as $material)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                    <img class="atom-thumbnail" src="{{ asset('AtomMolecule/' . $material->thumbnail) }}" class="img-fluid" alt="">
                    <div class="gallery-links d-flex align-items-center justify-content-center">
                        <a href="{{route('atomMoleculeDetails', $material->id)}}" class="details-link">{{$material->title}}</a>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
</main>        
@endsection