@extends('front_end.layout.main')
@section('title', 'Update Profile')
@section('content')
<!--Leagues Pages Banner Section Start -->
<section class="pages-banner leagues-pages  bg-cover bg-no-repeat">
    <div class="container">
        <div class="banner-content">
            <ul class="leagues-ul">
                <li class="inline-list home-list">
                    <h3>
                        <a href="./">Homepage</a>
                    </h3>
                </li>
                <li class="inline-list next-page-list">
                    <h3>
                        Edit Profile
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->

<!-- Leagues Content Section Start -->
<section class="my-profile py-10">
    <div class="container">
        <div class="mmy-profile-inner">
           @include('front_end.pages.profile.profile-sidebar')
            
            <div class="col-sec">
            @if(Session::has('success'))
                    <span class="alert alert-success col-md-12 text-center profile-success">{{ Session::get('success')  }}</span>
                @endif
                <div class="user-content-update">
                    <div class="">
                        <div class="tab-content tab-content-1 active">
                            <div class="user-content-box">
                                <form action="{{ route('profile.update.password') }}" method="POST" class="mt-60 ">
                                     @csrf
                                    <div class="row">
                                        <div class="mb-3">
                                            <input type="password" placeholder="Current Password" class="form-control para"
                                                id="cur_password" name="current_password"  autocomplete="off">
                                                @error("current_password")
                                                     <span class="text-danger" style="color: red;">{{ $message }}</span>
                                                 @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" placeholder="New Password" class="form-control para"
                                                id="new_password"  name="new_password" autocomplete="off">
                                                @error("new_password")
                                                     <span class="text-danger" style="color: red;">{{ $message }}</span>
                                                 @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" placeholder="Confirm Password" class="form-control para"
                                                id="conf_password" name="new_password_confirmation" autocomplete="off">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Leagues Content Section End -->

@endsection
