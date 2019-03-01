<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> {{--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"> --}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html,
        body {
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

        .links>a {
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

        .login-button>a{
            margin: 10px;
            width: 200px;
        }

        .login-inform>p{
            margin: 10px;
            
            font-size: 18px;
        }

    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a> @else
            {{-- <a href="{{ route('login') }}">User Login</a> --}}
            {{-- <a href="{{ route('admin.login') }}">Admin Login</a> --}}
            @if (Route::has('register')) 
            <a href="{{ route('register') }}">Register</a> @endif @endauth
        </div>
        @endif



        <div class="container">
            <div class="row justify-content-center">
                <div class="login-button">
                    <a class="btn btn-primary btn-lg"  href="{{ route('login') }}">User Login</a>
                    <a class="btn btn-primary btn-lg" href="{{ route('admin.login') }}">Admin Login</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <div class=" login-inform card text-center ">
                        @component('components.who') @endcomponent
                    </div>
                </div>
            </div>
        </div>


    </div>
</body>

</html>