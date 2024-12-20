@extends('front_end.layout.main')
@section('title', 'My Matches')

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
                        My Matches
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->

<!-- Leagues Content Section Start -->
<section class="american_leagues my-matches">
    <div class="container">


        <div class="american_leagues-inner">
            <h2>My Matches</h2>
            <!-- Content -->
            <div class="american_leagues my-matches-inner-content">
                <div class="matches-table ">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Team</th>
                                <th scope="col">Match Info</th>
                                <th scope="col">Team</th>
                                <th scope="col">Score</th>
                                <th scope="col">Status</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($matches as $match)

                            <tr class="matche-main" data-fixture-id="{{ $match->fixture_id ?? ''}}" data-league-id="{{ $match->league->league_id ?? ''}}">
                                <td class="match-team-logo">
                                    {{-- <a href="match-details"> --}}
                                        <img class="table-img me-2" src="{{ $match->home_team_logo ?? '' }}" alt="">

                                        <h6>{{ $match->home_team_name ?? '' }}</h6>
                                    {{-- </a> --}}
                                </td>
                                <td>
                                    {{-- <h6>Kyle Field</h6>
                                    <p>Texas</p> --}}
                                    <span>{{ date('Y-m-d h:i a', strtotime($match->fixture_date ?? '')) }}</span>
                                </td>
                                <td class="match-team-logo">

                                    <img src="{{ $match->away_team_logo ?? '' }}" alt="Chelmsford City logo">

                                    <h6>{{ $match->away_team_name ?? '' }}</h6>
                                </td>
                                <td class="match-score">
                                    <h4>0</h4>
                                </td>
                                <td class="match-status">
                                    <p class="win">-- </p>

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

<script>
    $(".matche-main").on('click', function () {
        var fixtureId = $(this).data('fixture-id');
        var leagueId = $(this).data('league-id');
        var url = "{{ route('profile.match-detail', [':leagueId', ':fixtureId']) }}";
        url = url.replace(':fixtureId', fixtureId).replace(':leagueId', leagueId);
        window.location.href = url;
    });

</script>

@endsection
