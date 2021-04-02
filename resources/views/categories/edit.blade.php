@extends('layouts.global')

@section('title')Edit Category @endsection

@section('content')
    <div class="col-md-8">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form enctype="multipart/form-data" action="{{ route('categories.update', [$category->id]) }}" method="POST"
            class="bg-white shadow-sm p-3">
            @csrf

            <input type="hidden" name="_method" value="PUT">
            <label>Category name</label> <br>
            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
            <br><br>

            <label>Category Slug</label><br>
            <input type="text" name="slug" class="form-control" value="{{ $category->slug }}">
            <br><br>

            @if ($category->image)
                <span>Current image</span><br>
                <img src="{{ asset('storage/' . $category->image) }}" width="120px">
                <br><br>
            @endif

            <input type="file" class="form-control" name="image"> <small class="text-muted">Kosongkan jika tidak ingin
                mengubah gambar</small>
            <br><br>

            <input type="submit" class="btn btn-primary" value="Update">
        </form>
    </div>
@endsection
