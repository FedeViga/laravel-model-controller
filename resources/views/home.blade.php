@extends('layouts/app')

@section('content')

<main class="container text-white py-5">

    @foreach($movies as $movie)
        <li>
            {{$movie->title}}
        </li>
    @endforeach

</main>

@endsection