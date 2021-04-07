@extends('layouts.global')

@section('title')
    Edit order
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="shadow-sm bg-white p-3" action="{{ route('orders.update', [$order->id]) }}" method="POST">

                @csrf

                <input type="hidden">
            </form>
        </div>
    </div>
@endsection
