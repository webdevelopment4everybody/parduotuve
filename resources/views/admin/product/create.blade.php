@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Product</div>
                <div class="card-body">
                    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    <label>Title:</label>
                    <input type="text" name="product_title">
                <div id="product-photo-inputs-area">

                Kaina:<input type="text"  name="product_price" >
                    <br><hr><input type="file" name="photo[]">
                    {{-- <button id="remove">Delete photo</button>
                    <button id="add">Prideti foto</button> --}}
                    <button id="delete-product-photo" type="button" class="btn btn-warning">delete photo</button>
                </div>
                <br><hr><br>
                <button id="add-product-photo" type="button" class="btn btn-warning">add photo</button> 
                <button type="submit" class="btn btn-success">SAVE</button>
                    @csrf
            </form>
        </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
