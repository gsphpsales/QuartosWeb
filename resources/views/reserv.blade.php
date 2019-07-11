@extends('layouts.index')
@section('content')

 <div class="jumbotron" id="res">
            <!--For modern browsers-->

            <h3><i class="material-icons">rate_review</i>
            Resevar</h3> 
            <div class="pg">  
            <form action="/res" method="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="pwd">Nome completo</label>
                <input type="text" class="form-control" name="name" id="name" >
              </div>

              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email" id="email">
              </div>

              <div class="form-group">
                <label>Entrada</label>
                <input type="date" name="inp" id="inp">
                <label>Saída</label>
                <input type="date" name="out" id="out">
                  
              </div>
              
              <button type="submit" class="btn btn-default">Reservar</button>
            </form>

          </div>    
          </div>
            
        </div>
@endsection