@extends('front_end.layout.main')
@section('title', 'Matches')
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
                        Matches
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->

<!-- Leagues Content Section Start -->
<section class="american_leagues matches">
    <div class="container">
        <div class="american_leagues-inner">
            <div class="back-btn">
                <a href="{{ route('leagues') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                    </svg>
                </a>
            </div>
            <h2>{{ date('Y') }} Jahreszeit</h2>

            <div class="team-view-sec">

            </div>
            <div class="american_leagues-inner-content">
                <div class="matches-table">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Team</th>
                                <th scope="col">Matches Info</th>
                                <th scope="col">Team</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($matches as $key => $match)

                            <tr  class="matche-main" data-fixture-id="{{ $match->id }}">
                                <td class="match-team-logo">
                                    <div class="match-team-inner">
                                    <img class="lazy-load" data-src="{{ $match->home_team_logo }}" alt="team-logo-3">

                                        <!-- <div class="match-team-inner-image match-team-inner-image1"></div> -->
                                        <!-- <span>{{ $match->home_team_name }}</span> -->
                                    </div>
                                    <h6>{{ $match->home_team_name }}</h6>
                                    <!-- <a href="matches-details"></a> -->

                                </td>
                                <td>
                                    <!-- <h6>Kyle Field</h6>
                                    <p>Texas</p> -->
                                    <span>{{ date('Y-m-d h:i a', strtotime($match->fixture_date)) }}</span>

                                </td>
                                <td class="match-team-logo">
                                    <div class="match-team-inner">
                                        <!-- <span>CFL</span> -->
                                        <!-- <div class="match-team-inner-image match-team-inner-image2"></div> -->
                                        <img class="lazy-load" data-src="{{ $match->away_team_logo }}" alt="team-logo-2">

                                    </div>
                                    <h6>{{ $match->away_team_name }}</h6>
                                    <!-- <a href="matches-details"></a> -->
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Leagues Content Section End -->

@endsection

@section('custom-script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        // Initialize DataTable
        let table = new DataTable('#myTable');

        // Event delegation for dynamically created elements (like match rows)
        $(document).on('click', '.matche-main', function () {
            var matcheId = $(this).data('fixture-id'); // Get match ID
            var url = "{{ route('matche-detail', [':matcheId']) }}"; // Dynamic URL
            url = url.replace(':matcheId', matcheId); // Replace placeholder
            window.location.href = url; // Redirect
        });

        // Lazy load images
        function lazyLoading() {
            let lazyImages = [].slice.call(document.querySelectorAll("img.lazy-load"));

            if ("IntersectionObserver" in window) {
                let lazyImageObserver = new IntersectionObserver(function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = entry.target;
                            lazyImage.src = lazyImage.dataset.src;
                            lazyImage.classList.remove("lazy-load");
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });

                lazyImages.forEach(function (lazyImage) {
                    lazyImageObserver.observe(lazyImage);
                });
            } else {
                // Fallback for older browsers
                lazyImages.forEach(function (lazyImage) {
                    lazyImage.src = lazyImage.dataset.src;
                });
            }
        }

        // Trigger lazy loading on table redraw events (pagination, sort, etc.)
        table.on('draw', function () {
            lazyLoading();
        });

        // Initial lazy load
        lazyLoading();
    });

</script>
@endsection
