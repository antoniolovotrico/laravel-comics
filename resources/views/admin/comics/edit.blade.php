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
                <button id="create_btn" type="submit">Edit</button>
            </aside>
        </form>
@endsection
