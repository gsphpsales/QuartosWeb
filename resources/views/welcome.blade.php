<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quartos Web</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css') }}" />

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

           
        </style>
    </head>
    <body>


        <div class="img"><img src="{{asset('img/logo.png')}}"></div>
      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
        
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Home</a>
                  
                </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li><a href="#">Acomodações</a></li>
                        <li><a href="#">Disponibilidade</a></li>
                        <li><a href="#">Comodidades</a></li>
                        <li><a href="#">Princimpais Comodidades</a></li>
                        <li><a href="#">Regras</a></li>
                        <li><a href="#">Proximidades</a></li>
                        <li><a href="#">Resevar</a></li>
                  </ul>      
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
<div class="max-w">

    <section class="col-70">

        <article class="col-100">
            <div class="banner">
                <div><img src="{{asset('banner/01.jpg')}}"></div>
                <div><img src="{{asset('banner/02.jpg')}}"></div>
                <div><img src="{{asset('banner/03.jpg')}}"></div>
                <div><img src="{{asset('banner/04.jpg')}}"></div>
                <div><img src="{{asset('banner/05.jpg')}}"></div>
            </div>
        </article>

    </section>
</div>

    </body>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/funcoes.js') }}"></script>
</html>
