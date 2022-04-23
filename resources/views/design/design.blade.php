<!DOCTYPE html>
<html>

<div class="mynav">
  <a class="active" href="/welcome">Home</a>
  <a class="active" href="/survey ">Surveys</a>
<a class="active" href="/profile">profile</a>
<a class="active" href="/viewprofile">viewprofile</a>
<a class="active" href="/events">Events</a>
<a class="active" href="/aboutus">About us</a>


</div>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Women in tech</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

.mynav {
  background-color: #04AA6D;
  overflow: hidden;
}

.mynav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.mynav a:hover {
  background-color: #ddd;
  color: pink;
}






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
            .bm {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    @yield('content')
    
    </body>
</html>