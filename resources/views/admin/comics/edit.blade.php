@extends('layouts.dashboard')

@section('content')
<h1>Edit {{ $comic -> title }}</h1>
        <form class="form_container" action="{{ route('admin.comics.update', ['comic'=> $comic-> slug])}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('Put')
            <div class="draw_container">
                <label for="title">Title</label>
                <input id="input_title" type="text" name="title" value="{{ $comic -> title }}">
                @error('title')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror
                <label for="description">Description</label>
                <textarea cols="30" rows="10" id="input_body" type="text" name="description">{{ $comic -> description }}</textarea>
                @error('description')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror
                <label for="collection_id">Series</label>
                <select name="collection_id" id="collection_id">
                @foreach ($collections as $collection)
                    <option value="{{$collection->id}}">{{$collection->title}}</option>     
                @endforeach  
                </select>
                <label for="price">Price</label>
                <input id="input_title" type="text" name="price" value="{{ $comic->price }}">
            </div>
            <aside>
                <div class="form-group">
                    <label for="cover">Cover Image</label>
                    <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Add a cover image"  aria-describedby="coverImgHelper">
                    <small id="coverImgHelper" class="form-text text-muted">Add a cover image</small>
                </div>
                @error('cover')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="showim">showim Image</label>
                    <input type="file" class="form-control-file" name="showim" id="showim" placeholder="Add a showim image"  aria-describedby="showimImgHelper">
                    <small id="showimImgHelper" class="form-text text-muted">Add a showim image</small>
                </div>
                @error('showim')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="artists">Artists</label>
                    <select name="artists[]" id="artists" multiple>
                        @if ($artists)
                            @foreach ($artists as $artist)
                            <option value="{{ $artist -> id }}">{{ $artist -> name }}</option>    
                            @endforeach 
                        @endif
                    </select>
                </div>
                @error('artists')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror
        
                <div>
                    <label for="writers">Writer</label>
                    <select name="writers[]" id="writers" multiple>
                        @if ($writers)
                            @foreach ($writers as $writer)
                            <option value="{{ $writer -> id }}">{{ $writer -> name }}</option>    
                            @endforeach
                        @endif
                    </select>
                </div>
                @error('writers')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror
                <button id="create_btn" type="submit">Edit</button>
            </aside>
        </form>
@endsection
