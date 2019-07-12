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
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .pg{
                margin-left: 30px;
            }
            .top{
                float: right;
            }
            .logo{
                width: 140px;
                height: 140px;
                float: left;
            }

            #pop{position:absolute;
                top:50%;
                left:20%;
                
                margin-top:-100px;
                padding:10px;
                width:60%;
                height:200px;
                border:1px 
                solid #d0d0d0;
                background-color: #F2FBEF;}
 
            .navbar, .tophead{
                background-color: #5697d9;
            }
            
        </style>
    </head>
    <body>

<div class="tophead">
        <div id="top" class="logo"><img src="{{asset('img/logo.png')}}"></div>
      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
        
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#home">Home</a>
                  
                </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li><a href="#aco">Acomodações</a></li>
                        <li><a href="#pco">Princimpais Comodidades</a></li>
                        <li><a href="#rg">Regras</a></li>
                        <li><a href="#px">Proximidades</a></li>
                        <li><a href="#dis">Disponibilidade</a></li>
                        <li><a href="#res">Resevar</a></li>
                  </ul>      
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
</div>
@yield('content')


    </body>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/funcoes.js') }}"></script>


<script type="text/javascript">
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });
    $(function()
    {
        showRooms();
       current();
      
    });

    function alerts()
    {
        alert('teste');
    }
 
    function current()
    {
        var field = document.querySelector('#inp');
        var date = new Date();

        // Set the date
        field.value = date.getFullYear().toString() + '-' + (date.getMonth() + 1).toString().padStart(2, 0) + 
        '-' + date.getDate().toString().padStart(2, 0);
    }
    function dates()
    {

        var date1 = new Date(document.getElementById('inp').value);
        var date2 = new Date(document.getElementById('out').value);
        var timeDiff = date2 - date1;
        var diffDays = timeDiff / (1000 * 3600 * 24); 

        if (diffDays <'1') {
            alert('Favor escolher datas com 1 dia ou mais de diferença.');
        }
    }

    function mode()
    {
        var date1 = new Date(document.getElementById('inp').value);
        var date2 = new Date(document.getElementById('out').value);
        var timeDiff = date2 - date1;
        var diffDays = timeDiff / (1000 * 3600 * 24); 

        if (diffDays !='30') {
            alert('Favor escolher datas com 30 dias entre elas.');       
        }
    }

     //function to show rooms at form availability 
    function showRooms() {
        $.getJSON('/api/ava', function(data) { 
            for(i=0;i<data.length;i++) {
                opcao = '<option value ="' + data[i].id + '">' + 
                    data[i].name_room + '</option>';
                $('#room').append(opcao);
            }
        });

    }

    


</script>

</html>
