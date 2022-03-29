@extends('templates.layout')
@section('title')
    Competitions
@endsection
@section('content')

    <!-- For demo purpose -->
    <div class="row text-center text-white mb-5">
        <div class="col-lg-7 mx-auto">
            <h1 class="display-4">Championnats</h1>
            <p class="lead mb-0">Ceci est une liste non exhaustive des championnats de football dans le monde</p>
        </div>
    </div>
    <!-- End -->

    <div class="row">
        <div class="col-lg-8 mx-auto">
            @isset($results->result)
                @foreach ($results->result as $competition)
                    <!-- List group-->
                    <ul class="list-group shadow">

                        <!-- list group item-->
                        <li class="list-group-item">
                            <!-- Custom content-->
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class="media-body order-2 order-lg-1">
                                    <h5 class="mt-0 font-weight-bold mb-2">
                                        <a href="">
                                            {{ $competition->league_name }}
                                        </a>
                                    </h5>
                                    <p class="font-italic text-muted mb-0 small">
                                        Region: {{ $competition->country_name }}
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="font-weight-bold my-2">
                                            {{-- Derniere session: {{ $competition->currentSeason ? $competition->currentSeason->startDate : 0 }} - {{ $competition->currentSeason->startDate }} --}}
                                        </h6>
                                    </div>
                                </div>
                                @if ($competition->league_logo)
                                    <img src="{{ $competition->league_logo }}" alt="{{ $competition->country_name }}"
                                        width="200" class="ml-lg-5 order-1 order-lg-2">
                                @else
                                    <img src="{{ asset('assets/images/question-circle.svg') }}"
                                        alt="{{ $competition->country_name }}" width="100" class="ml-lg-5 order-1 order-lg-2">
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
                    <h1>Aucun Competitions supportees</h1>
                </div>
            @endisset
        </div>
    </div>
@endsection
