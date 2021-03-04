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
        <label for="price">Price</label>
        <input id="input_title" type="text" name="price" placeholder="Write here the price">
    </div>
    <aside>
        <div class="form-group">
            <label for="cover">Cover Image</label>
            <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Add a cover image" aria-describedby="coverImgHelper">
            <small id="coverImgHelper" class="form-text text-muted">Add a cover image</small>
        </div>
        
            <button id="create_btn" type="submit">Publish</button>
        
    </aside>
</form>
@endsection