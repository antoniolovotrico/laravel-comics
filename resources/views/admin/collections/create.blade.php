@extends('layouts.dashboard')

@section('content')
<h1>Insert a new Collection</h1>
<form class="form_container" action="{{ route('admin.collections.store')}}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="draw_container">
        <label for="title">Title</label>
        <input id="input_title" type="text" name="title" placeholder="Write here the title of your collection">
        @error('title')
            <div class="error_field_required">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="preview">Cover Image</label>
            <input type="file" class="form-control-file" name="preview" id="preview" placeholder="Add a preview image" aria-describedby="previewImgHelper">
            <small id="previewImgHelper" class="form-text text-muted">Add a preview image</small>
        </div>
        <button id="create_btn" type="submit">Publish</button>
    </div>
</form>
@endsection