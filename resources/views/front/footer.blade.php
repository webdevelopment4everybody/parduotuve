{{-- @extends('front.app') --}}
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="footer-container">
                    <div class="footer-top">
                        <div class="socials col-lg-3">
                            <a href="./"><img class="logo" src="{{url('/assets/images/logo/logo.png')}}" alt="logo"></a>
                            <p class="text">Lorem ipsum dolor sit amet, co adipisi elit, sed eiusmod tempor incididunt ut labore et dolore</p>
                            <div class="socials">
                                <a href="./"><img src="{{url('/assets/images/svg/twitter.svg')}}" alt="twitter"></a>
                                <a href="./"><img src="{{url('/assets/images/svg/ig.svg')}}" alt="instagram"></a>
                                <a href="./"><img src="{{url('/assets/images/svg/linkedin.svg')}}" alt="linkedin"></a>
                                <a href="./"><img src="{{url('/assets/images/svg/skype.svg')}}" alt="skype"></a>
                                <a href="./"><img src="{{url('/assets/images/svg/dribble.svg')}}" alt="dribble"></a>
                            </div>
                        </div>
                        <div class="links col-lg-3">
                            <h2>USEFUL LINKS</h2>
                            <a href="#">Help & Contact Us</a>
                            <a href="#">Returns & Refunds</a>
                            <a href="#">Online Stores</a>
                            <a href="#">Terms & Conditions</a>
                        </div>
                        <div class="help col-lg-3">
                            <h2>HELP</h2>
                            <a href="#">Faq's</a>
                            <a href="#">Pricing Plans</a>
                            <a href="#">Order Traking</a>
                            <a href="#">Returns</a>
                        </div>
                        <div class="subscribe col-lg-3">
                            <p>Subscribe to our newsletter and get 10% off your first purchase..</p>
                            <form action="" method="post">
                                <input type="email" value="email" name="email" placeholder="Your email address" required>
                                <input type="submit" value="send" name="subscribe">
                            </form>
                            <div class="payment-icons">
                                <img src="{{url('/assets/images/icon-img/payment.png')}}" alt="payment">
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">

                    </div>
                </div>


            </div>      
        </div>
    </div>
@endsection