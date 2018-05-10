@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>动漫</h2>
        <ul class="list-group">
            @foreach ($animes as $anime)
                <li class="list-group-item">{{$anime->name}}</li>
            @endforeach
        </ul>
        {{ $animes->links() }}
    </div>

@endsection
