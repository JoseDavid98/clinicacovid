
@extends('plantilla')

@section('content')
<!-- cuando ya iniciemos sesion utilizaremos content -->

<div class="content-wrapper">
    <section class="content-header">
        <h1> Gestionar Consultorios</h1>
    </section>

    <section class="content">

        <div class="box"> 
            <br> <!-- Metodo Post por ahora -->
                    <form method="post">
                        @csrf

                        <div class="col-md-6 col-xs-12">
                        
                            <input type="text" class="form-control" name="consultorio" placeholder="Ingrese Nuevo Consultorio" requires="">
                        
                        </div>

                            <button class= "btn btn-primary" type="submit"> Agregar Consultorios </button>

                    </form>
            <br>
            
            <div class="box-body">  
                @foreach($consultorios as $consultorio)
               
                <div class="row">

                    <form method="post" action="{{ url('Consultorio/'.$consultorio->id)}}">
                            @csrf
                            @method('put')
                        
                            <div class="col-md-4"> 

                                <input type="text" class="form-control" name="consultorioE" value="
                                {{$consultorio->consultorio}}"> 
                        
                            </div>
                
                            <div class="col-md-1">
                    
                            <button class= "btn btn-success" type="submit"> Guardar </button>
                            </div>
            
                    </form>
    
            <div class="col-md-1">

                    <form method="post" action="{{url('borrar-Consultorio/'.$consultorio->id)}}">

                    @csrf
                    @method('delete')     

                    <button type="submit" class="btn btn-danger"> Borrar </button>

                    </form>  

            </div>
    </div>
                <br>
                @endforeach   
            
            </div>
    
    
        </section>
        
</div>



@endsection
