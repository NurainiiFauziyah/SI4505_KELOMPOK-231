<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Katalog</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('front/css/style.css')}}" />
</head>

<body>

    <!-- Header -->
    <header id="header">
        <!-- Nav -->
        <div id="nav">
            <!-- Main Nav -->
            <div id="nav-fixed">
                <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
                    <!-- Logo -->
                    <div class="nav-logo">
                        <a href="/" class="logo"><img src="{{ asset('logo.png') }}" alt=""></a>
                    </div>
                    <!-- /Logo -->
                </div>
                <!-- /container -->
            </div>
            <!-- /Main Nav -->
        </div>
        <!-- /Nav -->
    </header>
    <!-- /Header -->

    <!-- Content -->
    <!-- /Content -->

    <!-- jQuery Plugins -->
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>

</body>

</html>
