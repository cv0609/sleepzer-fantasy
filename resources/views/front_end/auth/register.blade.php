@extends('front_end.layout.main')
@section('content')

<!-- Login Page Form Section Start -->
<section class="login_signup_form">
    <div class="container">
        <div class="login-signup-wrapper">
            <div class="form-container">
            @if(Session::has('success'))
                    <span class="alert alert-success text-center success-msg">{{ Session::get('success') }}</span>
                @endif
                <form action="{{ route('register.post') }}" method="POST" id="login-signup">
                    @csrf
                    <h3 class="text-center">Sign Up</h3>
                    <fieldset>
                        <input placeholder="Your Name" type="text" tabindex="1" name="first_name" id="firstName" value="{{ old('first_name') }}">
                        @error('first_name')
                        <br>
                        <span class="text-danger" style="color:red;">{{ $message }}</span>
                        @enderror
                    </fieldset>
                    <fieldset>
                        <input placeholder="Choose Username" type="text" tabindex="2"  name="user_name" id="lastName"value="{{ old('user_name') }}" autofocus>
                        @error('user_name')
                      <br>
                      <span class="text-danger" style="color:red;">{{ $message }}</span>
                    @enderror
                    </fieldset>
                    <fieldset>
                        <input placeholder="Enter Your Email" type="email" tabindex="3" name="email" id="email" value="{{ old('email') }}">
                        @error('email')
                     <br>
                     <span class="text-danger" style="color:red;">{{ $message }}</span>
                    @enderror
                    </fieldset>
                    <fieldset>
                        <input placeholder="Phone Number (Optional)" name="phone" id="phoneNumber" type="tel" tabindex="4" value="{{ old('phone') }}">
                        @error('phone')
                     <br>
                     <span class="text-danger" style="color:red;">{{ $message }}</span>
                    @enderror
                    </fieldset>
                    <fieldset>
                        <input placeholder="Choose Password" type="password" name="password" id="password" tabindex="5">
                        @error('password')
                    <br>
                    <span class="text-danger" style="color:red;">{{ $message }}</span>
                    @enderror
                    </fieldset>
                    <fieldset>
                        <input placeholder="Re-enter Password" name="password_confirmation" id="confirmPassword" type="password" tabindex="6" >
                    </fieldset>

                    <fieldset>
                        <button name="submit" type="submit" id="signup-submit" data-submit="...Sending">Sign Up</button>
                    </fieldset>
                    <p class="jump-text"> 
                        Already have an account? <a href="{{ route('login') }}">Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Login Page Form Section End -->

@endsection

@section('custom-script')

<script>
 
 <script>

   $(document).ready(function() {
        $('#phoneNumber').on('input', function() {
            var value = $(this).val();
            if (value < 0) {
                $(this).val('');
            }
        });
    });
</script>


@endsection
