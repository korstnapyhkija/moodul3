@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <div class="card">
            <img src="{{$product->image}}" class="card-img-top" alt="...">
            <div class="card-header">
                {{$product->name}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Price:</b>{{$product->price}}</li>
                <li class="list-group-item"><b>Platform:</b> {{$product->platform}}</li>
                <li class="list-group-item"><b>Product code:</b>{{$product->code}}</li>
            </ul>
            <div class="card-body">
                {{$product->description}}
            </div>
        </div>

    </div>
@endsection
