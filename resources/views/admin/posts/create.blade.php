@extends('layouts.dashboard')

@section('content')

    <h1>Create a new post</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title')}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="body">Body</label>
            <input class="form-control" type="body" name="body" id="body" value="{{ old('body')}}">
        </div>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="price">Price</label>
            <input class="form-control" type="price" name="price" id="price" value="{{ old('price')}}">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="cover">Cover</label>
            <input type="file" class="form-control-file" name="cover" id="cover" value="{{ old('cover')}}">
            <small id="coverHelper" class="form-text text-muted">Add a cover image here</small>
        </div>



        <button type="submit" class="btn btn-success">Submit</button>    
    </form>

@endsection