@extends('layouts.dashboard')

@section('content')

<a href="{{ route('admin.comics.create') }}" class="btn btn-primary">Add New Comic</a>
<table class="table">
    
    <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th>SERIES</th>
            <th>PREVIEW</th>
            <th>ACTION</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <td scope="row">{{ $comic->id }}</td>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td>{{ $comic->collection_id }}</td>
            <td>
                @if($comic->cover)
                <img class="img_cover" src="{{asset('storage/' . $comic->cover )}}" alt="">
                @endif
            </td> 
            <td>
                <a href="{{ route('admin.comics.show', ['comic' => $comic->slug ])}}" class="btn btn-primary"><i class="fas fa-eye fa-sm fa-fw"></i></a>
                <a href="{{ route('admin.comics.edit', ['comic' => $comic->slug ])}}" class="btn btn-warning"><i class="fas fa-pencil-alt fa-sm fa-fw"></i>
                </a>
                <form action="{{ route('admin.comics.destroy', ['comic' => $comic -> slug]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash fa-sm fa-fw"></i></button>
                </form> 
                
            </td>
            
        </tr>
        @endforeach
    </tbody>
    
</table>
@endsection

