@extends('layouts.app')

@section('content')
<div class="jumbo">
    <div class="pre_card">
        <h2>Comics & graphic Novels</h2>
        <ul class="right_menu_jumbo list-unstyled">
            <li>
                <a  href="#">this week</a>
            </li>
            <li>
                <a  href="#">last week</a>
            </li>
            <li>
                <a  href="#">next week</a>
            </li>
            <li>
                <a  href="#">upcoming</a>
            </li>
            <li>
                <a  href="#">see all</a>
            </li>
        </ul>
    </div>
    <div class="card_container">     
        @foreach ($comics as $comic)
        <div>
            <div>
                @if($comic->cover)
                <img class="img_cover" src="{{asset('storage/' . $comic->cover )}}" alt="">
                @endif
            </div>
            <div>{{ $comic->title }}</div>
            {{-- <div>{{ $comic->description }}</div> --}}
            {{-- <div>{{ $comic->price }}</div> --}}
        
        </div>
        @endforeach
        
    </div>
</div>
</div>
</div>

@endsection