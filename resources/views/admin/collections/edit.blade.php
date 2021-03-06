@extends('layouts.dashboard')

@section('content')
<h1>Edit {{ $collection -> title }}</h1>
        <form class="form_container" action="{{ route('admin.collections.update', ['collection'=> $collection-> id])}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('Put')
            <div class="draw_container">
                <label for="title">Title</label>
                <input id="input_title" type="text" name="title" value="{{ $collection -> title }}">
                @error('title')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="preview">Preview Image</label>
                    <input type="file" class="form-control-file" name="preview" id="preview" placeholder="Add a preview image"  aria-describedby="previewImgHelper">
                    <small id="previewImgHelper" class="form-text text-muted">Add a preview image</small>
                </div>
                @error('preview')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button id="create_btn" type="submit">Edit</button>
            </div>
            
        </form>
@endsection
