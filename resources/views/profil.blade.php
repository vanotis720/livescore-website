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
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

<style>
    .padding {
        padding: 2rem !important;
        margin-left: 10px
    }

    .card-img-top {
        object-fit: cover;
        height: 400px
    }

    .card-no-border .card {
        border-color: #d7dfe3;
        border-radius: 4px;
        margin-bottom: 30px;
        -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05)
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem
    }

    .pro-img {
        margin-top: -80px;
        margin-bottom: 20px
    }

    .little-profile .pro-img img {
        width: 128px;
        height: 128px;
        -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        border-radius: 100%
    }

    html body .m-b-0 {
        margin-bottom: 0px
    }

    h3 {
        line-height: 30px;
        font-size: 21px
    }

    .btn-rounded.btn-md {
        padding: 12px 35px;
        font-size: 16px
    }

    html body .m-t-10 {
        margin-top: 10px
    }

    .btn-primary,
    .btn-primary.disabled {
        background: #CE8156;
        border: 1px solid #a5add4;
        -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
        box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
        -webkit-transition: 0.2s ease-in;
        -o-transition: 0.2s ease-in;
        transition: 0.2s ease-in
    }

    .btn-rounded {
        border-radius: 60px;
        padding: 7px 18px
    }

    .m-t-20 {
        margin-top: 20px
    }

    .text-center {
        text-align: center !important
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #455a64;
        font-family: "Poppins", sans-serif;
        font-weight: 400
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem
    }

</style>
</head>

<body class="">

    <div class="container py-5">

        @include('templates.nav')

        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="padding">
                    <div class="col-md-12">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top"
                                src="{{ asset('assets/images/jannik-skorna-mY2ZHBU6GRk-unsplash.jpg') }}"
                                alt="Card image">
                            <div class="card-body little-profile text-center">
                                <div class="pro-img">
                                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="user profile">
                                </div>
                                <h3 class="m-b-0 text-capitalize">{{ $user->username }}</h3>
                                <p class="text-uppercase">{{ $user->email }}</p>
                                <a href="{{ route('profil') }}"
                                    class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded"
                                    data-abc="true">
                                    Me deconnecter
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('templates.footer')


    <!-- ALL PLUGINS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
