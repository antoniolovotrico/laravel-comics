@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @foreach ($comics as $comic)
            <div class="card">
                <div class="card-header">{{ $comic->title }}</div>
                <div class="card-body">{{ $comic->description }}</div>
                <div class="card-body">{{ $comic->price }}</div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
@endsection