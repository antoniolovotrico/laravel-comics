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





@endsection