@extends('layouts.global')

@section('title')
    Edit Book
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form enctype="multipart/form-data" method="POST" class="p-3 shadow-sm bg-white"
                action="{{ route('books.update', [$book->id]) }}">


                @csrf
                <input type="hidden" name="_method" value="PUT">

                <label for="title">Title</label>
                <br>
                <input type="text" class="form-control" value="{{ $book->title }}" name="title" placeholder="Book title">
                <br>


                <label for="cover">Cover</label>
                <br>
                <small class="text-muted">Current cover</small>
                <br>
                @if ($book->cover)
                    <img src="{{ asset('storage/' . $book->cover) }}" width="96px">
                @endif
                <br><br>
                <input type="file" name="cover" class="form-control">
                <small class="text-muted">Kosongkan jika tidak ingin mengubah cover</small>
                <br><br>


                <label for="slug">Slug</label>
                <br>
                <input type="text" class="form-control" name="slug" value="{{ $book->slug }}" placeholder="enter-a-slug">
                <br>


                <label for="description">Description</label>
                <br>
                <textarea name="description" id="description" class="form-control">{{ $book->description }}</textarea>
                <br>


                <label for="categories">Categories</label>
                <select multiple class="form-control" name="categories[]" id="categories"></select>
                <br><br>


                <label for="stock">Stock</label>
                <br>
                <input type="number" class="form-control" name="stock" id="stock" placeholder="Stock"
                    value="{{ $book->stock }}">
                <br>


                <label for="author">Author</label>
                <br>
                <input type="text" placeholder="Author" name="author" id="author" class="form-control"
                    value="{{ $book->author }}">
                <br>


                <label for="publisher">Publisher</label>
                <br>
                <input type="text" name="publisher" id="publisher" class="form-control" placeholder="Publisher"
                    value="{{ $book->publisher }}">
                <br>


                <label for="price">Price</label>
                <br>
                <input type="number" name="price" id="price" class="form-control" placeholder="Price"
                    value="{{ $book->price }}">
                <br>


                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option {{ $book->status == 'PUBLISH' ? 'selected' : '' }} value="PUBLISH">PUBLISH</option>
                    <option {{ $book->status == 'DRAFT' ? 'selected' : '' }} value="DRAFT">DRAFT</option>
                </select>
                <br>


                <button class="btn btn-primary" value="PUBLISH">Update</button>
            </form>
        </div>
    </div>
@endsection

@section('footer-scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
        $('#categories').select2({
            ajax: {
                url: 'http://localhost/larashop/public/ajax/categories/search',
                processResults: function(data){
                    return {
                        results: data.map(function(item){return {id: item.id, text:item.name} })
                    }
                }
            }
        });

        var categories = {!! $book->categories !!}

        categories.forEach(function(category){
            var option = new Option(category.name, category.id, true, true);
            $('#categories').append(option).trigger('change');
        });
    </script>
@endsection
