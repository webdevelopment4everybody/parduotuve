@extends('front.app')

@section('content')
<div class=" hero1" style=" background-image: url('../assets/images/slider/background.jpg');" >
    <div class="container">
        <h3>We keep pets for pleasure.</h3>
        <h1>Standart foods &amp; vitamins 
            <br>
            for all pets
        </h1>
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">

            </div> 
         </div> 
    </div> 
</div>
 </div> 
 {{-- @endsection  --}}

 {{-- @section('content')  --}}
<div class="container">
    <h2 class="container-h2">Shop pet food</h2>
    @foreach ($products as $product)
        <div class="single-products">
            <div class="products">
                @foreach ($product->getImages as $photo)
                <img src="{{asset('images/products/'.$photo->image)}}" style="width:250px; height: auto;" alt="">
                @endforeach
                <div class="product-title">{{$product->title}}</div>
                <div class="add-form">
                    <input type="hidden" name="route" value="{{route('front.add-js')}}">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <input type="hidden" value="{{$product->price}}" name="product_price">

                    <div class="product-price">{{$product->price}}€</div>
                    <div class="product-action">
                        <a title="Quick-View" href="#" data-toggle="modal" data-target="#exampleModal">
                            <div class="plus-icon">@include('front.plus-svg') </div>
                        </a>
                        <a title="Add to cart" href="#">
                            <div class="plus-icon">@include('front.cart-svg') </div> 
                        </a>
                    </div>

                    <div class="quantity">
                        <button class="minus-btn" type="button" name="button">-</button>
                        <input class="input-btn" type="number" name="count" id="1" value="0"  readonly/>
                        <button class="plus-btn" type="button" name="button">+</button>
                        <button class="add-button " type="button" >ADD</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <form action="{{route('buy')}}" method="POST">
        @csrf
        Name:<input type="text" name="name" value=""><br><br>
        Email:<input  type="text" name="email" value="" ><br><br>
        Phone:<input  type="text" name="phone" value="" ><br><br>
        <button class="add-button " type="submit">BUY</button>
    </form>
@endsection

