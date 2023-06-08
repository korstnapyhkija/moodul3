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
                            <li class="list-group-item"><b>Cost:</b> {{$product->cost}}</li>
                            <li class="list-group-item"><b>Duration:</b>{{$product->duration}}</li>
                            <li class="list-group-item"><b>Date:</b>{{$product->date}}</li>
                        </ul>
                        <div class="card-body">
                            @if($product->status == 'not available')
                                <a href="#" class="btn btn-primary disabled">Read more</a>
                            @else
                                <a href="{{route('public.show', ['product'=> $product->id])}}" class="btn btn-primary">Read more</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$products->links()}}
    </div>
@endsection
