@extends('layouts/app')

@section('content')

<main class="container text-white py-5">

    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">

        @foreach($movies as $movie)
            <div class="col p-2">

                <div class="card h-100 bg-black text-danger text-center p-3">

                    <h2>
                        {{$movie->title}}
                    </h2>

                    @if("{{$movie->title}}" != "{{$movie->original_title}}")
                        <h3>
                            Original Title: {{$movie->original_title}}
                        </h3>
                    @endif

                    <h4>
                        Nationality: {{$movie->nationality}}
                    </h4>

                    <h4>
                        Release: {{$movie->date}}
                    </h4>

                    <h4>
                        Average vote: {{$movie->vote}}
                    </h4>
                </div>
            </div>
        @endforeach
        </div>

</main>

@endsection