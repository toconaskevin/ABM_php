<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #D35050;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .img-fluid {
                max-width: 100%;
                height: auto;
                width: 50%;
                height: 50%;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          
            <div class="content">
                
                <img src="{{ asset('images/logo.png') }}" class="img-fluid" >

                <div class="links">
                        @if (Route::has('login'))
                        <div class="links">
                            @auth
                                <a href="{{ url('/home') }}" >INICIO</a>
                            @else
                                <a href="{{ route('login') }}"> INICIAR SESION</a>
        
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}">REGISTRARSE</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
