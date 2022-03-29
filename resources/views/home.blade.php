@extends('templates.layout')
@section('title')
    Matchs en cours
@endsection
@section('content')

    <!-- For demo purpose -->
    <div class="row text-center text-white mb-5">
        <div class="col-lg-7 mx-auto">
            <h1 class="display-4">Matchs en cours</h1>
            <p class="lead mb-0">
                Dernière actualisation <span>{{ $date }}</span>
            </p>
        </div>
    </div>
    <!-- End -->

    <div class="row">
        <div class="col-lg-8 mx-auto">
            @isset($liveScore->result)
                @foreach ($liveScore->result as $match)
                    <!-- List group-->
                    <ul class="list-group shadow">

                        <!-- list group item-->
                        <li class="list-group-item">
                            <!-- Custom content-->

                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">

                                <div class="media-body order-2 order-lg-1">
                                    <h5 class="mt-0 font-weight-bold mb-2">
                                        {{ $match->event_home_team }} <span class=""
                                            style="font-size: 2em">{{ $match->score->fullTime->homeTeam ?? 0 }}</span>
                                        - <span style="font-size: 2em">
                                            {{ $match->score->fullTime->awayTeam ?? 0 }}</span>
                                        {{ $match->event_away_team }}
                                    </h5>
                                    <p class="font-italic text-muted mb-0 small">Competition: <a href="">
                                            {{ $match->league_name }} -
                                            {{ $match->country_name }}</a>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center mt-1">
                                        Debut(UTC):<h6 class="font-weight-bold my-2">
                                            {{ $match->event_date . ' à ' . $match->event_time }}</h6>
                                        {{-- {{ \Carbon\Carbon::parse($match->utcDate)->format('H:i') }} --}}
                                        </h6>
                                    </div>
                                </div>
                                @if ($match->league_logo)
                                    <img src="{{ $match->league_logo }}" alt="{{ $match->country_name }}" width="200"
                                        class="ml-lg-5 order-1 order-lg-2">
                                @else
                                    <img src="{{ asset('assets/images/question-circle.svg') }}"
                                        alt="{{ $match->country_name }}" width="100" class="ml-lg-5 order-1 order-lg-2">
                                @endif
                            </div>
                            <!-- End -->
                        </li>
                        <!-- End -->

                    </ul>
                    <!-- End -->
                @endforeach
            @else
                <div class="alert alert-danger">
                    <h1>Aucun match n'est en cours</h1>
                </div>
            @endisset
        </div>
    </div>
    @push('script')
        <script type="text/javascript">
            window.setInterval(function() {
                window.location.reload();
            }, 300)
        </script>
    @endpush
@endsection
