<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{asset('img/Logo2.png')}}"/>

        <title>Welcome to StudyFinance</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/welcomeStyle.css')}}" rel="stylesheet"/>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif


            <div class="content">
                <div class="title m-b-md">
                    <img id="logoIndex" src="{{asset('img/Logo2.png')}}"/>
                </div>
                <div class="title m-b-md">
                    Studyfinance
                </div>

                <div class="links">
                    <a href="#">Zu uns</a>
                </div>
            </div>
        </div>
    </body>
</html>
