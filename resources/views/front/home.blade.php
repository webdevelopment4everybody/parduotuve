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
    <h2>Shop pet food</h2>
    @foreach ($products as $product)
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{$product->title}}</div>
                <div class="card-body">
                    @foreach ($product->getImages as $photo)
                    <img src="{{asset('images/products/'.$photo->image)}}" style="width:250px; height: auto;" alt="">
                    @endforeach
                    <form action="{{route('front.add')}}" method="POST" class="add-form">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <label>Kaina</label><input type="hidden" value="{{$product->price}}" name="product_price">
                        <div>{{$product->price}}</div>
                        <input type="text" name="count" value="0"><br><br>
                        @csrf
                        <button type="submit">ADD TO CART</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

