@extends('front.app')
@section('content')

<div class="container">
    <div class="row login justify-content-center">
        <div class="col-md-8">
            <h2>Login|Register</h2>
            <div class="login-form-container">
               <form action=""{{route('front.login_register')}}" method="post">
                   <input type="text" name="" id="" placeholder="username">
                   <input type="password" name="" id="" placeholder="password">
                   <div class="button-box">
                       <div class="remember-me">
                           <input type="checkbox" name="" id=""><label for="">Remember me</label>
                           <a href="#">Forgot password?</a>
                       </div>
                       <button type="submit">Login</button>
                   </div>
               </form>
            </div>
    </div>
</div> 
@endsection