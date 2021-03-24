@extends('layouts.global')

@section('title') Edit User @endsection

@section('content')
    user yang akan diedit adalah {{ $user->email }}
@endsection
