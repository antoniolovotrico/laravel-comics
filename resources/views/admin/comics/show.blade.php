
@extends('layouts.dashboard')

@section('content')
<h1>Show post</h1>   
<table class="table">
    <thead>
        <tr>
            <th class="id">ID</th>
            <th class="title">Title</th>
            <th class="body">Description</th>
            <th class="created">Created</th>
            <th class="created">Price</th>
            <th class="created">Availability</th>
            <th class="created">Series</th>
            <th class="created">Cover</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="id">{{ $comic -> id  }}</td>
            <td class="title">{{ $comic -> title  }}</td>
            <td class="body">{{ $comic -> body  }}</td>
            <td class="created">{{ $comic -> created_at  }}</td>
            <td class="created">{{ $comic -> price  }}</td>
            <td class="created">{{ $comic -> availability  }}</td>
            <td class="created">{{ $comic -> collection_id  }}</td>
            <td>
                @if($comic->cover)
                <img class="img_cover" src="{{asset('storage/' . $comic->cover )}}" alt="">
                @endif
            </td>
        </tr>     
    </tbody>
</table>
@endsection