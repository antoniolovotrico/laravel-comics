
@extends('layouts.dashboard')

@section('content')
<h1>Show {{$collection->title}}</h1>   
<table class="table">
    <thead>
        <tr>
            <th class="id">ID</th>
            <th class="title">Title</th>
            <th class="body">Preview</th>
            <th class="created">Created</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="id">{{ $collection -> id  }}</td>
            <td class="title">{{ $collection -> title  }}</td>
            <td class="body">
                @if($collection->preview)
                <img class="img_preview" src="{{asset('storage/' . $collection->preview )}}" alt="">
                @endif
            </td>
            <td class="created">{{ $collection -> created_at  }}</td>
            
        </tr>     
    </tbody>
</table>
@endsection