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
                <a  href="#"></a>
            </li>
            <li>
                <p>U.S. Price:</p>
                <a  href="#"></a>
            </li>
            <li>
                <p>On Sale Date:</p>
                <a  href="#"></a>
            </li>
            <li>
                <p>Volume/Issue #:</p>
                <a  href="#"></a>
            </li>
            <li>
                <p>Trim Size:</p>
                <a  href="#"></a>
            </li>
            <li>
                <p>Page Count:</p>
                <a  href="#"></a>
            </li>
            <li>
                <p>Rated:</p>
                <a  href="#"></a>
            </li>
        </ul>

    </div>


</div>





@endsection