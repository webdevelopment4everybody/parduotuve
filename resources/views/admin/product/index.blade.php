@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($products as $product)
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{$product->title}}</div>
                <div class="card-body">
                    <div id="product-photo-inputs-area2">
                    @foreach ($product->getImages as $photo)
                    <img src="{{asset('images/products/'.$photo->image)}}" style="width:250px; height: auto;" alt="">
                    <form method="POST" action="{{route('product.destroy', [$product])}}">
                     @csrf
                     <button type="submit">DELETE</button>
                   </form>
                   @endforeach
                </div>
                {{-- <button id="delete" type="button" class="btn btn-warning">delete photo</button> --}}
            </div>
        </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
