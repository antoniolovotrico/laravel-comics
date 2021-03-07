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
                <a href="{{ route('comics.show', ['comic' => $comic->slug ]) }}"><img class="img_cover" src="{{asset('storage/' . $comic->cover ) }}" alt=""></a>
                @endif
            </div>
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
        </div>
        @endforeach   
    </div>
</div>
<div class="must_read">
    <div class="title_container">
        <h2>MUST READS</h2>
    </div>
    <div class="card_container">
        <div class="card_reads">
            <img src="{{asset('img/mustRead_DCC_5_v2_5f6b8b49bfd6a9.60761869.jpg')}}" alt="">
            <h6>GET THE INSIDE TRACK ON ALL THINGS DC</h6>
            <h4>DC CONNECT</h4>
            <p>The monthly, downloadable catalog of DC's comics, graphic novels, collectibles and more!</p>
        </div>
        <div class="card_reads">
            <img src="{{asset('img/MUSTREAD_20190114_SandmanUniverse_5c3e4bab834ac9.58189616.jpg')}}" alt="">
            <h6>FROM THE MIND OF NEIL GAIMAN</h6>
            <h4>THE SANDMAN UNIVERSE</h4>
            <p>Four new series set in the world of the Vertigo classic.</p>
        </div>
        <div class="card_reads">
            <img src="{{asset('img/MUSTREAD_20190114_WonderComics_5c3e4b8d091c94.82772322.jpg')}}" alt="">
            <h6>THESE KIDS ARE ALL FIGHT!</h6>
            <h4>WONDER COMICS</h4>
            <p>Brian Michael Bendis shines the spotlight on DC’s youngest heroes!</p>
        </div>
    </div>

</div>
<div class="series">
    <div class="title_container">
        <h2>CURRENT SERIES</h2>
    </div>
    <div class="card_container">
        @foreach ($collections as $collection)
        <div class="card_series">
            <div>
                @if($collection->preview)
                <img class="img_cover" src="{{asset('storage/' . $collection->preview ) }}" alt="">
                @endif
            </div>
            <h6>{{$collection->title}}</h6>
        </div>  
        @endforeach
    </div>
    

</div>


@endsection