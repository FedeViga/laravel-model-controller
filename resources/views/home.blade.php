@extends('layouts/app')

@section('content')

<main class="container text-white py-5">

    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">

        @foreach($movies as $movie)
            <div class="col p-2">

                <div class="my_card card h-100 p-3">

                    <h2>
                        {{$movie->title}}
                    </h2>

                    <div class="details">

                        @if("{{$movie->title}}" != "{{$movie->original_title}}")
                            <h3>
                                Original Title: <span>{{$movie->original_title}}</span>
                            </h3>
                        @endif
    
                        <h3>
                            Nationality: <span>{{$movie->nationality}}</span>
                        </h3>
    
                        <h3>
                            Release: <span>{{$movie->date}}</span>
                        </h3>
    
                        <h3>
                            Average vote: <span>{{$movie->vote}}</span>
                        </h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</main>

@endsection