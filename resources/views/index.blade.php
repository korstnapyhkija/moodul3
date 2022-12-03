@extends('layouts.app')
@section('content')
    <div class="container text-center">
        {{$products->links()}}
        <div class="row">
            @foreach($products as $product)
                <div class="col-3">
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
                                <a href="{{route('public.show', ['product'=> $product->id])}}" class="btn btn-primary">Read more</a>
                            </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$products->links()}}
    </div>
@endsection
