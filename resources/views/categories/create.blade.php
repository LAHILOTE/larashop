@extends('layouts.global')

@section('title') Create Category @endsection

@section('content')
    <div class="col-md-8">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form enctype="multipart/form-data" action="{{ route('categories.store') }}" class="bg-white shadow-sm p-3"
            method="POST">
            @csrf

            <label for="">Category name</label>
            <input type="text" name="name" class="form-control">
            <br>

            <label for="">Category image</label>
            <input type="file" name="image" class="form-control">
            <br>

            <input type="submit" class="btn btn-primary" value="Save">

        </form>
    </div>
@endsection
