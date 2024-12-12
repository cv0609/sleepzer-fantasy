@extends('front_end.layout.main')
@section('content')

<!-- Login Page Form Section Start -->
<section class="login_signup_form">
    <div class="container">
        <div class="login-signup-wrapper">
            <div class="form-container">
            @if(Session::has('error'))
                    <span class="alert alert-danger error-msg">{{ Session::get('error') }}</span>
                @endif
                <form action="{{ route('login.post') }}" method="POST" id="login-signup">
                    @csrf
                    <h3 class="text-center">Login</h3>
                    <fieldset>
                        <input placeholder="Enter Your Email" type="email" tabindex="1"  name="email" id="email" autofocus>
                        @error('email')
                        <br>
                        <span class="text-danger" style="color: red;">{{ $message }}</span>
                    @enderror
                    </fieldset>
                    <fieldset>
                        <input placeholder="Enter Password" type="password" tabindex="2" name="password">
                        @error('password')
                        <span class="text-danger" style="color: red;">{{ $message }}</span>
                    @enderror
                    </fieldset>
                    <fieldset>
                        <button name="submit" type="submit" id="login-submit" data-submit="...Sending">
                            Login</button>
                    </fieldset>
                    <p class="jump-text">
                        Don't have an account yet? <a href="{{ route('register') }}">Sign Up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Login Page Form Section End -->

@endsection

@section('custom-script')



@endsection
