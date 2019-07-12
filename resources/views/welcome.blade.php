@extends('layouts.index')
@section('content')
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

          <div class="jumbotron" id="px">
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
                <form   id="formAva" action="/ava/check" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                
                        <label><i class="material-icons">date_range</i>Entrada</label>
                        <input type="date" name="inp" id="inp" required="required">
                        <label><i class="material-icons">date_range</i>Saída</label>
                        <input type="date" name="out" id="out" required="required" onchange="dates()">

                        <label><i class="material-icons" required="required">people</i>Adultos</label>
                        <select name="adu">
                            
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                        </select>
                        <label><i class="material-icons">hotel</i>Quartos</label>
                        <select id="room" name="room" required="required">
                            
                       
                        </select>

                        
                    </div>
                    <div class="form-group">
                        <label><i class="material-icons">hotel</i>Modalidade</label>
                        <select id="mod" name="mod" required="required" onchange="mode()">
                            <option value="1">Diária</option>
                            <option value="0">Mensal</option>
                       
                        </select>

                    </div>
                    <button type="submit" class="btn btn-primary" >Verificar</button>

                                    <div class="jumbotron col-md-18">
                    <span class="col-md-6">Valores diária: <br>
                    1 pessoa  - R$: 120,00 <br>
                    2 pessoas - R$: 135,00 <br>
                    3 pessoas - R$: 200,00 <br>
                    4 pessoas - R$: 260,00 <br> </span>
                    <span class="col-md-6">Valores mensal:<br>
                    Máximo 2 pessoas  - R$: 1500,00  </span>
                </div>


                </form>  

          </div>    
          </div>
               <?php 
          if (isset($res)) {
            printf('<div class="alert alert-danger" role="alert">
  Não existe disponibilidade nesta data.
</div>');
            
            if ($res == 1) {
                print('<div id="pop" style.display="none";>

<h3>Infelizmente não temos vaga nesse periódo.</h3>
<a href="http://api.whatsapp.com/send?1=pt_BR&phone=5500000000000" target="_blank" >Click aqui e fale conosco pelo Whatsapp</a>
<br>
<br>
<h4><a href="/#dis"> Tentar outra data</a></h4>


 
</div>');
            }


          }

          ?>
         

   
    </section>
@endsection