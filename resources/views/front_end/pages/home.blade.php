@extends('front_end.layout.main')
@section('title', 'Home')
@section('content')

    <!-- Home Page Banner Section Start -->
    <section class="home_banner mt-90">
        <div class="container-fluid">
            <div class="home_banner_store">
                <div class="row">
                    <div class="col-md-7">
                        <div class="home_banner_left">
                            <h3>
                                Sleepzer Fantasy – Your premier destination for Canadian fantasy football, where
                                strategy meets excitement and every play counts.
                            </h3>
                            <div class="banner-btn-wrap">
                                <a href="leagues" class="banner-btn">Play Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="home_banner_right   bg-no-repeat"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Page Banner Section End-->

    <!-- Home About Us Section Start -->
    <section class="home-about-us-section py-5">
        <div class="container">
            <div class="home-about-info-wrap">
                <div class="row">
                    <div class="col-md-6">
                        <div class="home_info_first">
                            <h2 class="section-heading">
                                What We’re About
                            </h2>
                            <p>
                                At Sleepzer Fantasy, we're dedicated to bringing Canadian football fans the ultimate
                                fantasy football experience. Our platform is designed to make it easy for players of all
                                skill levels to create, manage, and compete with their dream teams. With cutting-edge
                                tools, real-time stats, and a vibrant community, Sleepzer is where passion for the game
                                meets the thrill of fantasy sports.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="home_info_second">

                            <div class="home_second_inf_cards">
                                <div class="home_second_inf_cards_left">
                                    <div class="home_second_inf_cards_left_icon"></div>
                                </div>
                                <div class="home_second_inf_cards_right">
                                    <h3>
                                        Seamless Experience:
                                    </h3>
                                    <p>
                                        User-friendly interface that makes team management and live tracking simple and
                                        enjoyable.
                                    </p>
                                </div>
                            </div>

                            <div class="home_second_inf_cards">
                                <div class="home_second_inf_cards_left">
                                    <div class="home_second_inf_cards_left_icon"></div>
                                </div>
                                <div class="home_second_inf_cards_right">
                                    <h3>
                                        for Canadians
                                    </h3>
                                    <p>
                                        Focused on the unique needs of Canadian players, including localized stats and
                                        leagues.
                                    </p>
                                </div>
                            </div>

                            <div class="home_second_inf_cards">
                                <div class="home_second_inf_cards_left">
                                    <div class="home_second_inf_cards_left_icon"></div>
                                </div>
                                <div class="home_second_inf_cards_right">
                                    <h3>
                                        Real-Time Action
                                    </h3>
                                    <p>
                                        Stay updated with instant scores, player stats, and insights to help you make
                                        the best decisions.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Us Section End -->


    <!-- Home Page Our Leagues Section Start -->
    <section class="our-leagues-section pt-3 pt-sm-5  pb-7">
        <div class="container">
            <h2 class="section-heading text-center pb-5">Our Leagues</h2>
            <div class="our_leagues_box">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="our_leagues_cards">
                            <h3>
                                Private Leagues
                            </h3>
                            <div class="our_leagues_cards_content">
                                <div class="our_leagues_cards_icon">

                                </div>
                                <p>
                                    Create a league for you and your friends, family, or coworkers. Customize your
                                    rules, scoring, and draft preferences for a truly personalized experience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="our_leagues_cards">
                            <h3>
                                Public Leagues
                            </h3>
                            <div class="our_leagues_cards_content">
                                <div class="our_leagues_cards_icon">

                                </div>
                                <p>
                                    Join a community of players from across Canada and compete in open leagues. Perfect
                                    for those looking to test their skills against new opponents.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="our_leagues_cards">
                            <h3>
                                Head-to-Head
                            </h3>
                            <div class="our_leagues_cards_content">
                                <div class="our_leagues_cards_icon">
                                </div>
                                <p>
                                    Challenge your opponents directly in a one-on-one format. Each week, you'll go
                                    head-to-head in a battle for supremacy and bragging rights.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Home Page Our Leagues Section End -->

    <!-- Home Our Promises Section Start -->
    <section class="home-our-promises-section py-5 text-center bg-no-repeat bg-cover">
        <div class="container">
            <div class="our-pormises_wrap">
                <h2 class="section-heading text-center pb-5">
                    Our Promise
                </h2>
                <p>
                    At Sleepzer Fantasy, we promise to deliver the best Fantasy Football experience for players across
                    Canada. We are committed to providing a platform that is not only fun and competitive but also
                    intuitive and tailored to your needs. Whether you're a beginner or a seasoned pro, we ensure that
                    every feature is designed to help you manage your team with ease, stay updated with real-time stats,
                    and make smarter decisions each week. Join us and experience a Fantasy Football journey like no
                    other—where passion for the game meets the thrill of victory.
                </p>
            </div>
        </div>
    </section>
    <!-- Home Our Promises Section End -->

@endsection

@section('custom-script')

@endsection

