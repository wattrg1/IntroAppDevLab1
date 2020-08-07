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
                color: #636b6f;
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
        </style>
    </head>
    <body>
    <p>Exercise 1</p>
    <p>
    @for ($i = 1; $i<=5; $i++)
        {{$i}}<br>
    @endfor
    <br>
    </p>
    <p>Exercise 2</p>
    <p>
    @php
    $phpSelf = $_SERVER["PHP_SELF"];
    $serverName = $_SERVER["SERVER_NAME"];
    @endphp
    <p>Page name is {{ $phpSelf}}<br>Server name is {{ $serverName}}<br></p>
    </p>

    <p>Exercise 3</p>
    <p>
    @php
    $animalArray = array("horse", "dog", "sheep", "flamingo", "hippo");
    @endphp
    @foreach ($animalArray as $value)
        {{ $value }}<br>
    @endforeach
    </p>
    <p>Exercise 4</p>
    <table>
        <tr>
            <td>Location</td>
            <td>Animal</td>
        </tr>
        <p>
        @foreach ($animalArray as $key=>$value)
            <tr><td>{{ $key }}</td><td>{{ $value }}</td></tr>
        @endforeach
        </p>
    </table>

    <p>Traingle of penguins</p>
    <p>
    @for ($i=0; $i < 10; $i++)
        @for ($j=0; $j < $i; $j++)
            <img src="{{asset('images/happyPenguin.gif')}}" alt="Penguin">
        @endfor
        <br>
    @endfor

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
