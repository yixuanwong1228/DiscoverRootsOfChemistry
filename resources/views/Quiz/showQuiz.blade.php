@extends('layout.headerfooter')

@section('content')
<link rel="stylesheet" href="{{url('assets/css/AtomMolecule/showAtomMolecule.css')}}">

  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Test Your Knowledge</h2>
          <a class="history" href="{{route('completed')}}">Quiz History</a>
        </div>
      </div>
    </div>
</section>

<main id="main" data-aos="fade" data-aos-delay="1500">

<section id="gallery" class="gallery">
    <div class="container-fluid">
        <div class="row gy-4 justify-content-center">
            @foreach($quizzes as $quiz)

            @php
                $isCompleted = false;
            @endphp

            @foreach($completedQuizzes as $completedQuiz)
                @if($quiz->id == $completedQuiz->quizID)
                    @php
                        $isCompleted = true;
                    @endphp
                    @break
                @endif
            @endforeach

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                    <img class="atom-thumbnail" src="{{ asset('Quiz/' . $quiz->thumbnail) }}" class="img-fluid" alt="">
                    @if($isCompleted)
                        <img class="completed-logo" src="{{ asset('assets/img/completed_logo.png') }}" alt="Completed Logo" style="height:100px;position: absolute; top: 0; left: 0;">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <p class="details-link">{{$quiz->name}}</p>
                        </div>
                    @else
                    <div class="gallery-links d-flex align-items-center justify-content-center">
                        <a href="{{ route('start_quiz', ['id' => $quiz['id']]) }}" class="details-link">{{$quiz->name}}</a>
                    </div>
                    @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
</main>
@endsection