@extends('layouts.dashboard')

@section('content')

<a href="{{ route('admin.collections.create') }}" class="btn btn-primary">Add New Series</a>
<table class="table">
    
    <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>PREVIEW</th>
            <th>ACTION</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($collections as $collection)
        <tr>
            <td scope="row">{{ $collection->id }}</td>
            <td>{{ $collection->title }}</td>
            <td>
                @if($collection->preview)
                <img class="img_preview" src="{{asset('storage/' . $collection->preview )}}" alt="">
                @endif
            </td> 
            <td>
                <a href="{{ route('admin.collections.show', ['collection' => $collection->id ])}}" class="btn btn-primary"><i class="fas fa-eye fa-sm fa-fw"></i></a>
                <a href="{{ route('admin.collections.edit', ['collection' => $collection->id ])}}" class="btn btn-warning"><i class="fas fa-pencil-alt fa-sm fa-fw"></i>
                </a>
                <form action="{{ route('admin.collections.destroy', ['collection' => $collection -> id]) }}" method="POST">
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

