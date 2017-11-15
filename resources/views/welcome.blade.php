<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Kanit:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            * {
                font-family: 'Kanit', sans-serif;
                font-weight: 100;
                overflow-x:hidden;
                overflow-y:auto;
            }
            video {
                -webkit-filter: blur(1px) brightness(2.2) contrast(1.1) saturate(0.5) sepia(0.4);
                filter: grayscale(80%) blur(10px);
                position: absolute;
                top: 50%;
                left: 50%;
                min-width: 100%;
                min-height: 100%;
                width: auto;
                height: auto;
                z-index: -100;
                transform: translateX(-50%) translateY(-50%);
                background: url('/bg/title.jpeg') no-repeat;
                background-size: cover;
                transition: 1s opacity;
            }
            @media (max-width: 767px) {
                .bg{
                    background: url('./bg/title.jpeg') no-repeat;
                    background-size: cover;
                }
            }
        </style>

    </head>
    <body>
        <div>
            <div class="bg row justify-content-center align-self-center full-height" id="header">
                <div class="col-md-6 col-xs-12 container justify-content-center align-self-center">
                    <div class="card col-md-10 col-lg-8">
                        <div class='title'>
                            {{ config('app.name', 'Laravel') }}
                        </div>
                        <div class="subtitle">
                            Anti corruption platform
                        </div>
                    </div>
                    
                </div>
                @if (Route::has('login'))
                    <div class="col-md-6 col-xs-12 container justify-content-center align-self-center">
                        <div class="card col-md-10 col-lg-8">
                        @auth

                            <div class="subtitle">
                                You already log in! <br />
                                <a href="{{ route('home') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Go to dashboard</a>
                            </div>
                        @else
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="login();">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="register();">Sign Up</a>
                                </li>
                            </ul>
                            <div id="login" style="display:block;">
                                @include('auth.login')
                            </div>
                            <div id="register" style="display:none;">
                                @include('auth.register') 
                            </div>
                        @endauth
                        </div>
                    </div>
                @endif
                <video playsinline autoplay muted loop>
                    <source src="/bg/title.mp4" type="video/mp4">
                </video>
            </div>
            <div class="row justify-content-center align-self-center full-height dark" id="description">
                <div class="col-md-5 col-xs-12 container justify-content-center align-self-center">
                    <div class='title'>
                        Why we diffent?
                    </div>
                </div>
                <div class="col-md-5 col-xs-12 container justify-content-center align-self-center">
                    <div class='subtitle'>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id dignissim dolor. Maecenas eu vehicula magna. Donec et est sit amet ante posuere lacinia. Fusce lobortis ultricies nulla, vitae suscipit ligula euismod eu. Nunc pharetra nulla quis ex vehicula vestibulum. Quisque ultricies orci non vulputate sagittis. Pellentesque vitae velit leo. Maecenas eu dolor et augue aliquam suscipit pellentesque non libero. Proin ornare laoreet urna, vitae sollicitudin justo euismod eget. Vestibulum mollis scelerisque ligula vel ullamcorper. Mauris vitae erat suscipit, sodales ipsum eget, lacinia libero. Duis a rhoncus purus, ut congue dui. Fusce at dapibus dui. Quisque maximus est et odio mollis rutrum. Nulla scelerisque aliquet convallis. Nullam feugiat, quam id dapibus lobortis, nisi risus elementum nunc, quis tincidunt libero enim id sapien.
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-self-center full-height light" id="github">
                <div class="col-md-5 col-xs-12 container justify-content-center align-self-center">
                    <div class='title'>
                        Clone Me!<br/> I'm on git.
                    </div>
                </div>
                <div class="col-md-5 col-xs-12 container justify-content-center align-self-center">
                    <div class='subtitle'>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id dignissim dolor. Maecenas eu vehicula magna.
                    </div>
                    <a href="https://github.com/unixxcorn/it-bank" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">See us on github</a>
                </div>
            </div>
            <div class="row justify-content-center align-self-center full-height dark" id="howto">
                <div class="col-md-5 col-xs-12 container justify-content-center align-self-center">
                    <div class='title'>
                        Easy to use
                    </div>
                </div>
                <div class="col-md-5 col-xs-12 container justify-content-center align-self-center">
                    <div class='subtitle'>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id dignissim dolor. Maecenas eu vehicula magna.
                    </div>
                    <a href="https://github.com/unixxcorn/it-bank" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">See us on github</a>
                </div>
            </div>
            <div class="row justify-content-center align-self-center full-height light" id="howto">
                <div class="col-md-4 col-xs-12 container justify-content-center align-self-center">
                    <div class='title' align="center">
                        Crafted By
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="row justify-content-center align-self-center">
                        <div class="col-md-3 mx-auto container justify-content-center align-self-center" align="center">
                            <div class='subtitle'>
                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.0-9/22450005_1463403400404929_7406475820724790759_n.jpg?oh=84d12f52e5da653f3ecc67763b7bc8b9&oe=5A8EA03F" class="rounded-circle img col-6" /><br />
                                S. Srisuk<br />
                                Backend programmer
                            </div>
                            <a href="https://github.com/unixxcorn/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">github</a>
                        </div>
                        <div class="col-md-3 mx-auto container justify-content-center align-self-center" align="center">
                            <div class='subtitle'>
                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.0-9/19397127_1318525338270414_9054536735581137169_n.jpg?oh=46c0805c9baadf1ab77703c3691b9271&oe=5A98B1F2" class="rounded-circle img col-6" /><br />
                                S. Rodthong<br />
                                Backend programmer
                            </div>
                            <a href="https://github.com/unixxcorn/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">github</a>
                        </div>
                        <div class="col-md-3 mx-auto container justify-content-center align-self-center" align="center">
                            <div class='subtitle'>
                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.0-9/12373265_1098450813513213_8326738261610718014_n.jpg?oh=2421de949e3baa52f43e71d046a76a62&oe=5A614EBF" class="rounded-circle img col-6" /><br />
                                J. Atta<br />
                                Frontend programmer
                            </div>
                            <a href="https://github.com/unixxcorn/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">github</a>
                        </div>
                    </div>
                    <div class="row justify-content-center align-self-center">
                        <div class="col-md-3 mx-auto container justify-content-center align-self-center" align="center">
                            <div class='subtitle'>
                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.0-9/22814534_1535926953153311_1885513957243359708_n.jpg?oh=67c7c0741cf72c70e632b6607174c6ed&oe=5A919131" class="rounded-circle img col-6" /><br />
                                P. Sittigulp<br />
                                Frontend programmer
                            </div>
                            <a href="https://github.com/unixxcorn/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">github</a>
                        </div>
                        <div class="col-md-3 mx-auto container justify-content-center align-self-center" align="center">
                            <div class='subtitle'>
                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.0-9/23376624_1702797586399651_8090747265456241890_n.jpg?oh=99dca9a421e1372c05bca5f7a018fdee&oe=5A937A92" class="rounded-circle img col-6" /><br />
                                S. Lertamnuaylap<br />
                                Writer
                            </div>
                            <a href="https://github.com/unixxcorn/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">github</a>
                        </div>
                        <div class="col-md-3 mx-auto container justify-content-center align-self-center" align="center">
                            <div class='subtitle'>
                                <img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t1.0-9/22814222_1676346082428754_7516867450616866879_n.jpg?oh=0c5b595eafce1e755382ce804ced28dc&oe=5A9EA57F" class="rounded-circle img col-6" /><br />
                                P. Kittiworapanya<br />
                                Original Idea
                            </div>
                            <a href="https://github.com/unixxcorn/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">github</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function register() {
                var x = document.getElementById("login").style.display = "none";
                var y = document.getElementById("register").style.display = "block";
            }
            function login() {
                var x = document.getElementById("login").style.display = "block";
                var y = document.getElementById("register").style.display = "none";
            }
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>
