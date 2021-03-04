@extends('layouts.app')

@section('content')
<div class="bg_show"> 
                @if($comic->cover)
                <img class="img_cover" src="{{asset('storage/' . $comic->cover )}}" alt="">
                @endif
        
            <div class="tit_id">
                <h6>{{ $comic->title }}</h6>
                <h6>#{{ $comic->id }}</h6>
            </div>
            <div>
                @if ($comic->avaliable == 0)
                   <p>Available Now</p> 
                @elseif ($comic->avaliable == 1)
                <p>NotAvailable</p>    
                @endif
               
            </div>
            
            {{-- <div>{{ $comic->description }}</div> --}}
            {{-- <div>{{ $comic->price }}</div> --}}
        
       
        
    </div>
</div>
</div>
</div>

@endsection