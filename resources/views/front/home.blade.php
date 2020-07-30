@extends('front.app')

@section('content')
{{-- HERO SECTION --}}
<div class=" hero1" style=" background-image: url('../assets/images/slider/background.jpg');" >
    <div class="container">
        <h3>We keep pets for pleasure.</h3>
        <h1>Standart foods &amp; vitamins 
            <br>
            for all pets
        </h1>
        <div class="slider-button">
            <a href="#">Shop now</a>
        </div>
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">

            </div> 
         </div> 
    </div> 
</div>
 </div> 
{{-- About us section --}}
<section id="about" class="about-marten-section">
<div class="container about-marten">
    <div class="row-about">
        <div class="about-us-img col-lg-6 col-md-6">
            <img src="{{url('/assets/images/banner/banner-3.png')}}" alt="banner">
        </div>
        <div class="about-us col-lg-6 col-md-6">
            <h2 class="container-h2">About marten</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad minim quis nostrud exercitat ullamco laboris nisi ut aliquip ex ea commodo consequat.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
            <div class="button-about-us">
                <a class="btn-about-us" href="#contact-us">Contact us</a>
            </div>
        </div>
    </div>
</div>
</section >
 {{-- @section('content')  --}}
<section id="shop">
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
                            <a  href="#">
                                <div class="plus-icon">@include('front.plus-svg') </div>
                            </a>
                            <a  href="#">
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
        <form class="buy-form" action="{{route('buy')}}" method="POST">
            @csrf
            Name:<input type="text" name="name" value=""><br><br>
            Email:<input  type="text" name="email" value="" ><br><br>
            Phone:<input  type="text" name="phone" value="" ><br><br>
            <button class="add-button " type="submit">BUY</button>
        </form>
</section>
@endsection

