<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}@auth{{ Auth::user()->name }} - @endauth</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="full-height">
@yield('bg')
    <nav class="navbar navbar-toggleable-md dark line-bottom">
        <button class="navbar-toggler navbar-toggler-right material-icons btn btn-primary" type="button" data-toggle="collapse" data-target="#navbarMainData" aria-controls="navbarMainData" aria-expanded="false" aria-label="Toggle navigation">
            menu
        </button>
        <a class="navbar-brand ml-5" href="/" style="width:100px">{{ config('app.name', 'Laravel') }}</a>

        <div class="collapse navbar-collapse" id="navbarMainData">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/">Home </a>
                <a class="nav-item nav-link" href="{{ route('home') }}">Dashboard</a>
            </div>
            <div class="navbar-nav mr-5 ml-auto">
                @auth
                    <a class="nav-item nav-link active mr-5">Welcome! {{ Auth::user()->name }}</a>
                    <button type="button" class="btn btn-primary" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign out</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endauth
            </div>
        </div>
    </nav>
    @yield('content')
        <div class="row dark" id="tab_bottom">
            <div class="col-8 col-span-2 container" id="text1">
                <div class="row">
                    <div class="col-md-6">
                        <table>
                            <tr><td><b>Accountant</b></td><td>Dumpkung</td></tr>
                            <tr><td><b>Telephone</b></td><td>Un1xxc0rn</td></tr>
                            <tr><td><b>Social Network</b></td><td>Un1xxc0rn</td></tr>
                            <tr><td><b>Email</b></td><td>Phongsathorn Kittiworapanya</td></tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table>
                            <tr><td><b>Front-End </b></td><td>Dumpkung</td></tr>
                            <tr><td><b>Back-End </b></td><td>Un1xxc0rn</td></tr>
                            <tr><td><b>Pen-Test </b></td><td>Un1xxc0rn</td></tr>
                            <tr><td><b>Original Idea </b></td><td>Phongsathorn Kittiworapanya</td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
