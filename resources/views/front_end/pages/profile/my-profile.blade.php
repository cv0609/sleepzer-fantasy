@extends('front_end.layout.main')
@section('title', 'My Profile')
@section('content')

<!--Leagues Pages Banner Section Start -->
<section class="pages-banner leagues-pages  bg-cover bg-no-repeat">
    <div class="container">
        <div class="banner-content">
            <ul class="leagues-ul">
                <li class="inline-list home-list">
                    <h3>
                        <a href="{{ route('home') }}">Homepage</a>
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
                                <form action="{{ route('profile.update') }}" method="POST" class="mt-60 ">
                                     @csrf

                                    <div class="row">
                                        <div class="mb-3">
                                            <input type="text" placeholder="Name" class="form-control para"
                                            name="first_name" id="name" required="required"
                                             value="{{ Auth::user()->first_name }}">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Username" class="form-control para"
                                            id="last-name" required="required" autocomplete="off" name="user_name" value="{{ Auth::user()->user_name }}">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" placeholder="E-mail" class="form-control para"
                                            id="email" name="email" required="required" autocomplete="off" value="{{ Auth::user()->email }}">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Phone Number" class="form-control para"
                                            id="Phone"  autocomplete="off" name="phone" value="{{ Auth::user()->phone  }}">
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
