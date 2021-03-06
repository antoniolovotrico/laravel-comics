@extends('layouts.dashboard')

@section('content')
<h1>Insert a new Comic</h1>
<form class="form_container" action="{{ route('admin.comics.store')}}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="draw_container">
        <label for="title">Title</label>
        <input id="input_title" type="text" name="title" placeholder="Write here the title of your comic">
        @error('title')
            <div class="error_field_required">{{ $message }}</div>
        @enderror
        <label for="description">Description</label>
        <textarea cols="30" rows="10" id="input_body" type="text" name="description" placeholder="Write here the description of your comic"></textarea>
        @error('description')
            <div class="error_field_required">{{ $message }}</div>
        @enderror
        <label for="availability">Availability</label>
        <select name="availability" id="availability">  
                <option value="0">true</option>
                <option value="1">false</option>    
        </select>
        <label for="collection_id">Series</label>
        <select name="collection_id" id="collection_id">
            @foreach ($collections as $collection)
                <option value="{{$collection->id}}">{{$collection->title}}</option>     
            @endforeach  
        </select>
        <label for="price">Price</label>
        <input id="input_title" type="text" name="price" placeholder="Write here the price">
    </div>
    <aside>
        <div class="form-group">
            <label for="cover">Cover Image</label>
            <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Add a cover image" aria-describedby="coverImgHelper">
            <small id="coverImgHelper" class="form-text text-muted">Add a cover image</small>
        </div>
        <div class="form-group">
            <label for="showim">Cover Image</label>
            <input type="file" class="form-control-file" name="showim" id="cover" placeholder="Add a show image" aria-describedby="showImHelper">
            <small id="showImHelper" class="form-text text-muted">Add a show image</small>
        </div>
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
        
            <button id="create_btn" type="submit">Publish</button>
        
    </aside>
</form>
@endsection