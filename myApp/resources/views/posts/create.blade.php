@extends('layoutes.crud')

@section('content')

    {{-- @if($errors->any())
        @foreach($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach
    @endif --}}

    <h2>
        Post create
    </h2>

    <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data" class="col-lg-6">
        @csrf
        <div class="mb-3">
            <label class="form-lable mt-2">Title </label>
            <input type="" class="form-control" placeholder="Title..." name="title" value="{{ old('title') }}">
            @error('title')
                <span style="color: red;">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-lable mt-2">Body</label>
            <input type="" class="form-control" placeholder="Body..." name="body" value="{{ old('body') }}">
            @error('body')
                <span style="color: red;">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-lable mt-2">Category id</label>
            <input type="" class="form-control" placeholder="Category id..." name="category_id" value="{{ old('category_id') }}">
            @error('category_id')
                <span style="color: red;">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-lable mt-2">Image</label>
            <input type="file" class="form-control" placeholder="Image..." name="image" value="{{ old('imageName') }}">
            @error('image')
                <span style="color: red;">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-lable mt-2">Sulg</label>
            <input type="" class="form-control" placeholder="Slug..." name="slug" value="{{ old('slug') }}">
            @error('slug')
                <span style="color: red;">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
        </div>
    </form>
@endsection
