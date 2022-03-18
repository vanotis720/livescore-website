<!DOCTYPE html>
<html lang="fr">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Site Metas -->
<title>Live Score Website</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="" type="image/x-icon" />
<link rel="apple-touch-icon" href="">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ secure_asset('assets/css/custom.css') }}">

</head>

<body class="">

    <div class="container py-5">

        @include('templates.nav')

        <!-- For demo purpose -->
        <div class="row text-center text-white mb-5">
            <div class="col-lg-7 mx-auto">
                <h1 class="display-3">Live Score App</h1>
                <p class="lead mb-0">Retrouvez le score des matchs en cours en temps reel</p>
                <p class="lead">by <a href="https://vanotis720.tech" class="text-white">
                        <u>vander otis</u></a>
                </p>
            </div>
        </div>
        <!-- End -->

        <div class="row">
            <div class="col-lg-8 mx-auto">

                @foreach ($nextmatch->matches as $match)
                    <!-- List group-->
                    <ul class="list-group shadow">

                        <!-- list group item-->
                        <li class="list-group-item">
                            <!-- Custom content-->
							
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                
                                <div class="media-body order-2 order-lg-1">
                                    <h5 class="mt-0 font-weight-bold mb-2">
                                        {{ $match->homeTeam->name }} <span class="" style="font-size: 2em">{{ $match->score->fullTime->homeTeam ?? 0  }}</span> 
										- <span style="font-size: 2em"> {{ $match->score->fullTime->awayTeam ?? 0 }}</span> {{ $match->awayTeam->name }}
                                    </h5>
                                    <p class="font-italic text-muted mb-0 small">Competition: <a
                                            href="competitions/{{ $match->competition->id }}">
                                            {{ $match->competition->name }} -
                                            {{ $match->competition->area->name }}</a>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center mt-1">
                                         Debut(UTC):<h6 class="font-weight-bold my-2">
                                        {{ \Carbon\Carbon::parse($match->utcDate)->format('H:i') }}</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                        </li>
                        <!-- End -->

                    </ul>
                    <!-- End -->
                @endforeach
            </div>
        </div>
    </div>

    @include('templates.footer')


    <!-- ALL PLUGINS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    {{-- <script src="{{ asset('assets/js/custom.js') }}"></script> --}}
</body>

</html>
