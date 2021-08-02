@extends('plantilla')
@section('contenido')

<div class= "login-box">
    <div class="login-logo">  <!-- Plantilla Lte --> 
        <b> Clinica Medica </b>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg"> INGRESAR AL SISTEMA </p>

        <form method="post" action="{{ route('login') }}">  <!-- Action del Login -->
            @csrf <!-- Ne cesitamos poner esto, porque si no laravel no nos validara cualquier dato que enviemos -->
           
            <!-- EMAIL -->
           
            <div class="form-group has-feedback"> 


                <input type="email" name="email" class="form-control" required="" value="">
                <br>    
                    @error('email')

                    <span class="alert alert-danger"> Error con el Email o la contraseña </span>

                    @enderror
                
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            
            </div>
            <!--CONTRASEÑA -->

            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" required="" value="">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <!-- BUTTON PARA INGRESAR AL SISTEMA -->
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-block btn-flat"> INGRESAR </button>
                </div>
            </div>
        </form>
              
    </div>



</div>

@endsection