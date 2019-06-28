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

           
        </style>
    </head>
    <body>


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


    <section class="col-100">

        
            <div class="banner">
                <div><img src="{{asset('banner/01.jpg')}}"></div>
                <div><img src="{{asset('banner/02.jpg')}}"></div>
                <div><img src="{{asset('banner/03.jpg')}}"></div>
                <div><img src="{{asset('banner/04.jpg')}}"></div>
                <div><img src="{{asset('banner/05.jpg')}}"></div>
            </div>
       

   

        <div class="container">
          <div class="jumbotron" id="home">
            <!--For modern browsers-->

            <h3><i class="material-icons">home</i>
            Um espaço planejado para seu conforto e comodidade</h3>           
          <p>Bem localizado no melhor  bairro de Fortaleza, á um quarteirão você encontra, padarias, restaurantes, farmacias e muito mais.</p> 
          <p>Ambiente amigável, excelente receptividade. </p>    
            <div class="top">
                <a href="#top">
                    Voltar ao topo<i class="material-icons">arrow_upward</i>
                </a>
            </div>
          </div>


           <div class="jumbotron" id="aco">
            <!--For modern browsers-->

            <h3><i class="material-icons">hotel</i>
            Acomodações</h3>           
          <p></p> 
          <p> </p>    
          </div>

          <div class="jumbotron" id="pco">
            <!--For modern browsers-->

            <h3><i class="material-icons">local_play</i>Principais comodidades</h3> 
            <div class="pg">         
              <p><i class="material-icons">wifi</i>Wi-Fi gratuito</p> 
              <p><i class="material-icons">people</i>Ambiente familiar</p> 
              <p><i class="material-icons">place</i>Localização</p>  
              <p><i class="material-icons">restaurant</i>Cozinha Completa disponivél</p>  
              <p><i class="material-icons">domain</i>Terraço coberto</p>  
              <p><i class="material-icons">local_parking</i>Estacionamento</p>
              <p><i class="material-icons">switch_video</i>Monitoramento por cameras</p>  
              </div>
              <div class="top">
                    <a href="#top">
                        Voltar ao topo<i class="material-icons">arrow_upward</i>
                    </a>
                </div>    
          </div>

          <div class="jumbotron" id="rg">
            <!--For modern browsers-->

            <h3><i class="material-icons">playlist_add_check</i>Regras</h3> 
            <div class="pg">  
                <p><i class="material-icons">date_range</i>Entrada 14:00 - 22:00  --  <i class="material-icons">date_range</i>Saída 10:00 - 11:00 </p>  
                <p><i class="material-icons">error</i> Cancelamento/
                pré-pagamento:<br> As políticas de cancelamento e pré-pagamento variam de acordo com o tipo de acomodação. Adicione as datas da sua estadia e visualize a política do quarto requerido. </p>       
                 
                <p><i class="material-icons">error</i> Crianças e camas: <br>0 anos de idade ou mais 
                Pode usar uma cama adicional mediante pedido
                R$ 100 por pessoa, por diária <br>
                O número máximo permitido de camas extras depende do quarto que você escolher. <br>Por favor, confira a ocupação máxima do quarto que você selecionou. 
                </p> 
                <p>Nenhum berço disponível<br>
                Sem restrições de idade<br>
                <i class="material-icons">
                check_box
                </i> Não há exigência de idade para o check-in</p>

                <p><i class="material-icons">
                credit_card
                </i> Cartões aceitos nesta propriedade:
                
                <img src="{{asset('img/cat.png')}}" style="width: 221px; height: 68px;">
                </p><br>
                <p>Casa da Adriana Pousada e Hostel aceita estes cartões e se reserva o direito de fazer um bloqueio temporário em seu cartão antes da chegada.</p>

                 <p><i class="material-icons">
                voice_over_off
                </i> Os hóspedes devem fazer silêncio entre 23:00 e 06:00.</p>

                <p><i class="material-icons">
                pets
                </i> Animais de estimação <br>
                Animais de estimação: não permitidos.
                </p>
            </div> 
            <div class="top">
                <a href="#top">
                    Voltar ao topo<i class="material-icons">arrow_upward</i>
                </a>
            </div>   
          </div>

          <div class="jumbotron" id="dis">
            <!--For modern browsers-->

            <h3><i class="material-icons">location_on</i>
            Proximidades</h3> 
            <div class="pg">         
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.3088474909932!2d-38.50567668588391!3d-3.742739644292061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7488d7493bc03%3A0x4f4725c8117c1374!2sR.+Joaquim+Nabuco%2C+1939+-+Meireles%2C+Fortaleza+-+CE%2C+60125-120!5e0!3m2!1spt-BR!2sbr!4v1561671052229!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>    
          </div>

          <div class="jumbotron" id="dis">
            <!--For modern browsers-->

            <h3><i class="material-icons">edit_attributes</i>
            Disponibilidade</h3> 
            <div class="pg">         
          
          </div>    
          </div>

          <div class="jumbotron" id="res">
            <!--For modern browsers-->

            <h3><i class="material-icons">rate_review</i>
            Resevar</h3> 
            <div class="pg">         
          
          </div>    
          </div>
            
        </div>
    </section>

    </body>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/funcoes.js') }}"></script>
</html>
