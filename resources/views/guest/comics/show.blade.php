@extends('layouts.app')

@section('content')
{{-- {{dd($details)}} --}}
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
                avaliable
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
                <a  href="#"></a>
            </li>
            <li>
                <p>Written by:</p>
                <a  href="#"></a>
            </li>

    </div>
    <div class="tab_right">
        <ul>
            <li>
                <h5>Specs</h5>
            </li>
            <li>
                <p>Series:</p>
                <a  href="#">
                    @foreach ($details as $detail)
                        @if ($comic->id == $detail->comic_id)
                        {{$detail->series}}    
                        @endif
                    @endforeach
                    
                </a>
            </li>
            <li>
                <p>U.S. Price:</p>
                <p class="attri">{{$comic->price}}</p>
            </li>
            <li>
                <p>On Sale Date:</p>
                <p class="attri">@foreach ($details as $detail)
                        @if ($comic->id == $detail->comic_id)
                        {{$detail->date}}    
                        @endif
                    @endforeach</p>
            </li>
            <li>
                <p>Volume/Issue #:</p>
                <p class="attri">@foreach ($details as $detail)
                        @if ($comic->id == $detail->comic_id)
                        {{$detail->volume}}    
                        @endif
                    @endforeach</p>
            </li>
            <li>
                <p>Page Count:</p>
                <p class="attri">@foreach ($details as $detail)
                        @if ($comic->id == $detail->comic_id)
                        {{$detail->page}}    
                        @endif
                    @endforeach</p>
            </li>
            <li>
                <p>Rated:</p>
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