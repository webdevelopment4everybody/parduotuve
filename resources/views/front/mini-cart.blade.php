<span class="count">{{$count}}</span>
<span class="total">{{$total}}</span>
{{-- <span class="currency">EUR</span> --}}
<div class="mini-cart-list">
<ul>
@foreach ($cartProducts as $cartProduct)
    <li>{{$cartProduct->title}} - {{$cart[$cartProduct->id]['count']}} x {{$cart[$cartProduct->id]['price']}}EUR</li>
    <form action="{{route('front.remove')}}" method="POST">
        <input type="hidden" name="product_id" value="{{$cartProduct->id}}">
        @csrf
        <button type="submit">-</button>
    </form>
@endforeach
</ul>
</div>