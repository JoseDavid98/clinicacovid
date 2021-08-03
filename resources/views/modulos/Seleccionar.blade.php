
@extends('plantilla')

@section('contenido')


<section class="content">
    <center>
        <h1> BIENVENIDOS A LA "CLINICA SAN LORENZO" </h1>
    </center>

        <div class="row">
            <!-- ESTA ES LA SECRETARIA -->
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color: #FF8A65; color:white;">
                        <div class="inner">
                            <h3>Secretaria</h3>
                                <p> Inicie Sesion </p>
                        </div>
                            <div class="icon">
                                <i class="fa fa-female"></i>
                            </div>
                                <a href="Ingresar" class="small-box-footer">
                                    Ingresar <i class="fa fa-arrow-circle-right"></i>
                                </a>    

                    </div>
                </div>
                <!-- ESTE ES EL MEDICO -->
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color: #424242; color:white;">
                        <div class="inner">
                            <h3>Doctor</h3>
                                <p> Inicie Sesion </p>
                        </div>
                            <div class="icon">
                                <i class="fa fa-user-md"></i>
                            </div>
                                <a href="Ingresar" class="small-box-footer">
                                    Ingresar <i class="fa fa-arrow-circle-right"></i>
                                </a>    


                    </div>
                </div>
                <!--PACIENTE -->
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color: #5C6BC0; color:white;">
                        <div class="inner">
                            <h3>Paciente</h3>
                                <p> Inicie Sesion </p>
                        </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                                <a href="Ingresar" class="small-box-footer">
                                    Ingresar <i class="fa fa-arrow-circle-right"></i>
                                </a>    


                    </div>
                </div>

                <!--ADMINISTRADOR -->
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color: #009688; color:white;">
                        <div class="inner">
                            <h3>Administrador</h3>
                                <p> Inicie Sesion </p>
                        </div>
                            <div class="icon">
                                <i class="fa fa-male"></i>
                            </div>
                                <a href="Ingresar" class="small-box-footer">
                                    Ingresar <i class="fa fa-arrow-circle-right"></i>
                                </a>    


                    </div>
                </div>

        </div>
</section>

@endsection