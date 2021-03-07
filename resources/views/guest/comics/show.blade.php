@extends('layouts.app')

@section('content')

<div class="bg_show"> 

    @if($comic->showim)
    <img class="showim" src="{{asset('storage/' . $comic->showim )}}" alt="">
    @endif            
            
            {{-- <div>{{ $comic->description }}</div> --}}
            {{-- <div>{{ $comic->price }}</div> --}}      
        
</div>
<div class="cont_show">
    @if($comic->cover)
    <img class="img_cover_show" src="{{asset('storage/' . $comic->cover )}}" alt="">
    @endif

</div>
<div class="bg_blue">

</div>
   
<div class="desc_container">
    <div class="tit_id">
        <h6>{{ $comic->title }}</h6>
        <h6>#{{ $comic->id }}</h6>
    </div>
    <div class="price_bar">
        <div class="price_bar_left">
            <div>US Price: $ {{ $comic->price }}</div>
            <div class="avaliable">
                @if ($comic->avaliable == 0)
                AVALIABLE
                @elseif ($comic->avaliable == 1)
                Not Available  
                @endif
            </div>
        </div> 
        <div class="price_bar_right">
            <a href="">Check Availability <i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
        </div>  
    </div>
    <div class="resume">
        <div>{{ $comic->description }}</div>
    </div>      
</div>
<div class="section_details">
    <div class="tab_left">
        <ul>
            <li>
                <h5>Talent</h5>
            </li>
            <li>
                <p>Art By:</p>
                <a  href="#">@if (count($comic->artists) > 0)
                    @foreach ($comic -> artists as $artist)
                    {{ $artist -> name }} ,   
                    @endforeach
                @else
                    No Artist
                @endif</a>
            </li>
            <li>
                <p>Written by:</p>
                <a  href="#">@if (count($comic->writers) > 0)
                    @foreach ($comic -> writers as $writer)
                    {{ $writer -> name }} ,   
                    @endforeach
                @else
                    No Writer
                @endif</a>
            </li>

    </div>
    <div class="tab_right">
        <ul>
            <li>
                <h5>Specs</h5>
            </li>
            <li>
                <p>Series:</p>
            </li>
            <li>
                <p>U.S. Price:</p>
            </li>
            <li>
                <p>On Sale Date:</p>
            </li>
            <li>
                <p>Volume/Issue #:</p>
            </li>
            <li>
                <p>Page Count:</p>
            </li>
            <li>
                <p>Rated:</p>
            </li>
        </ul>
    
        <ul>
            <li>
                <h5 id="tog">a</h5>
            </li>
            <li>
                <p><a href="#"> {{ $comic -> collection ?$comic->collection->title : 'N/A' }}       </a></p>
            </li>
            <li>
                <p class="attri">{{$comic->price}}</p>
            </li>
            <li>
                <p class="attri">@foreach ($details as $detail)
                        @if ($comic->id == $detail->comic_id)
                        {{$detail->date}}    
                        @endif
                    @endforeach</p>
            </li>
            <li>
                <p class="attri">@foreach ($details as $detail)
                        @if ($comic->id == $detail->comic_id)
                        {{$detail->volume}}    
                        @endif
                    @endforeach</p>
            </li>
            <li>
                <p class="attri">@foreach ($details as $detail)
                        @if ($comic->id == $detail->comic_id)
                        {{$detail->page}}    
                        @endif
                    @endforeach</p>
            </li>
            <li>
                <p class="attri">@foreach ($details as $detail)
                        @if ($comic->id == $detail->comic_id)
                        {{$detail->rated}}    
                        @endif
                    @endforeach</p>
            </li>
        </ul>

    </div>
</div>





@endsection