@extends("layouts.global")

@section('title') Create User @endsection

@section('content')
    <div class="col-md-8">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{ route('users.store') }}"
            method="POST">

            @csrf

            <label for="name">Name</label>
            <input class="form-control" placeholder="Full Name" type="text" name="name" id="name" />
            <br>

            <label for="username">Username</label>
            <input type="text" class="form-control" placeholder="username" type="text" id="username" name="username">
            <br>

            <label for="">Roles</label>
            <br>
            <input type="checkbox" name="roles[]" id="ADMIN" value="ADMIN">
            <label for="ADMIN">Administrator</label>

            <input type="checkbox" name="roles[]" id="STAFF" value="STAFF">
            <label for="STAFF">Staff</label>

            <input type="checkbox" name="roles[]" id="CUSTOMER" value="CUSTOMER">
            <label for="CUSTOMER">Customer</label>
            <br>

            <br>
            <label for="phone">Phone Number</label>
            <br>
            <input type="text" name="phone" class="form-control">

            <br>
            <label for="address">Address</label>
            <textarea name="address" id="address" class="form-control"></textarea>

            <br>
            <label for="avatar">Avatar Image</label>
            <br>
            <input type="file" id="avatar" name="avatar" class="form-control">

            <hr class="my-3">

            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="user@mail.com" class="form-control">
            <br>

            <label for="password">Password</label>
            <input type="password" placeholder="password" id="password" name="password" class="form-control">
            <br>

            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" class="form-control" placeholder="password confirmation" name="password_confirmation"
                id="password_confirmation">
            <br>

            <input type="submit" value="Save" class="btn btn-primary">
        </form>

    </div>


@endsection