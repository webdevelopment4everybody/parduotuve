<span class="count">{{$count ?? ''}}</span>
<span class="total">{{$total ?? ''}}</span>
{{-- <span class="currency">EUR</span> --}}
<div class="mini-cart-list">
<ul class="mini-cart-ul">
@foreach ($cartProducts ?? '' as $cartProduct)

<form action="{{route('front.remove')}}" method="POST" class="mini-cart-form">
    <input type="hidden" name="product_id" value="{{$cartProduct->id}}">
    @csrf
    <button class= "delete" type="submit">x</button>
</form>
<li><h2 class="shopping-cart-title">{{$cartProduct->title}}<h2> <h4 class="qty">Qty: {{$cart[$cartProduct->id]['count']}}</h4><h4 class="tottal">{{$cart[$cartProduct->id]['price']}}€  EUR</h4></li>
@endforeach
</ul>
<div class="shopping-cart-total">Total:   {{$total ?? ''}}€</div>

<div class="shopping-cart-buttons">
    <button class="checkout">checkout</button>
    <button class="your-cart">your-cart</button>
</div>
</div>