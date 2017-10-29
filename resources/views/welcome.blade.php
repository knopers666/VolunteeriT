<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VolunteerIT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

        <style>
html, body {

    background-image: url("https://i.imgur.com/KMg0XlZ.jpg");
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
    filter: none;
    -webkit-filter: blur(0px);
    -moz-filter: blur(0px);
    -ms-filter: blur(0px);
    filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='0');


            }


.btn {
    border-radius: 8px; /* Remove borders */
    border: solid 1px #404040;
    color: #404040; /* Add a text color */
    padding: 14px 50px; /* Add some padding */
    cursor: pointer; /* Add a pointer cursor on mouse-over */
    font-size: 15px;
    font-weight: bold;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
    transition-duration: 1s;
}
.warning {background-color: #e6e6e6;} /* Orange */
.warning:hover{background-color: #404040;
    color: white;}

.special{
    font-weight: bold;
}

.title{
    font-weight: 300;
    color: #161616;
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
                font-size: 12px;
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
        <div class="flex-center position-ref full-height">
@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
    </div>
@endif
<div class="container">
<div class="content">
    <div class="title m-b-md">
        Volunteer<span class="special">IT</span>
    </div>
    <div>
        <a href="{{ route('register') }}" class="btn warning">Join Us!</a>
    </div>
</div>
        </div>
</div>
</body>
</html>