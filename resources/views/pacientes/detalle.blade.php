@extends('layouts.app')

@section('content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">Detalle del Paciente: <strong>{{$detalle_paciente[0]->nombre_apellido}}</strong></div>

                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">Obra Social: <span class="label label-primary">{{$detalle_paciente[0] -> obra_social}}</span></li>
                        <li class="list-group-item">Edad: <span class="label label-primary">{{$detalle_paciente[0] -> edad}}</span></li>
                        <li class="list-group-item">Teléfono: <span class="label label-primary">{{$detalle_paciente[0] -> telefono}}</span></li>
                        <a class="btn btn-primary" id="VerMas" role="button" href="!#"><i class="fa fa-plus"></i><span style="margin-left:5px;">Ver más</span></a></li></a>
                    </ul>

                    <div class="table-responsive">
                        <table id="listado_pacientes" class="table table-bordered table-hover">
                            <thead>
                                <tr>   
                                    <th class="text-center">Domicilio</th>
                                    <th class="text-center">E-mail</th>
                                    <th class="text-center">Paciente desde</th>
                                    <th class="text-center">Motivo consulta</th>
                                    <th class="text-center">Actividad</th>
                                    <th class="text-center">Grupo</th>
                                </tr>
                            </thead>
                            <tbody style="font-size:13px;">
                                
                                    <tr>
                                        <td>
                                            {{$detalle_paciente[0] -> domicilio}}
                                        </td>
                                        <td>
                                            {{$detalle_paciente[0] -> email}}
                                        </td>
                                        <td>
                                            {{$detalle_paciente[0] -> paciente_desde}}
                                        </td>
                                        <td>
                                            {{$detalle_paciente[0] -> motivo_consulta}}
                                        </td>
                                        <td>
                                            {{$detalle_paciente[0] -> actividad_laboral}} / Horario: {{$detalle_paciente[0] -> horario_trabajo}}
                                        </td>
                                        <td>
                                            {{$detalle_paciente[0] -> grupo_familiar}}
                                        </td>
                                    </tr>
                                    <ul id="masInfo" class="list-group hidden">
                                        <li class="list-group-item">Patologías: <span class="label label-primary">{{$detalle_paciente[0] -> patologias}}</span></li>
                                        <li class="list-group-item">Consume Medicación: <span class="label label-primary">{{$detalle_paciente[0] -> comsume_medicacion}}</span></li>
                                        <li class="list-group-item">Alergias Alimentarias: <span class="label label-primary">{{$detalle_paciente[0] -> alergias_alimentarias}}</span></li>
                                        <li class="list-group-item">Talla: <span class="label label-primary">{{$detalle_paciente[0] -> talla}}</span></li>
                                        <li class="list-group-item">Peso habitual: <span class="label label-primary">{{$detalle_paciente[0] -> peso_habitual}}</span></li>
                                        <li class="list-group-item">Peso actual: <span class="label label-primary">{{$detalle_paciente[0] -> peso_actual}}</span></li>
                                        <li class="list-group-item">Peso ideal: <span class="label label-primary">{{$detalle_paciente[0] -> peso_ideal}}</span></li>
                                        <li class="list-group-item">Contorno cintura: <span class="label label-primary">{{$detalle_paciente[0] -> contorno_cintura}}</span></li>
                                        <li class="list-group-item">Contorno cadera: <span class="label label-primary">{{$detalle_paciente[0] -> contorno_cadera}}</span></li>
                                    </ul>
                                
                            </tbody>
                        </table>
                    </div>
                    <!--<a class="btn btn-primary vercuestionario" role="button" href="{{ url('/cuestionario/') }}/{{$detalle_paciente[0] -> id}}"><i class="fa fa-arrow-left"></i><span style="margin-left:5px;">Ver Cuestionario</span></a></li></a>-->
                    <a class="btn btn-primary" role="button" href="{{ url('/pacientes') }}"><i class="fa fa-arrow-left"></i><span style="margin-left:5px;">Regresar</span></a></li></a>
                    
                    @if (App\Cuestionario::existeCuestionario($detalle_paciente[0] -> id))
                        <a class="btn btn-primary vercuestionario" role="button" href="{{ url('/cuestionario/show') }}/{{$detalle_paciente[0] -> id}}"><i class="fa fa-file-text-o"></i><span style="margin-left:5px;">Ver Cuestionario</span></a></li></a>
                    @else
                        <a class="btn btn-primary creacuestionario" role="button" href="{{ url('/cuestionario/create') }}/{{$detalle_paciente[0] -> id}}"><i class="fa fa-file-text-o"></i><span style="margin-left:5px;">Crear Cuestionario</span></a></li></a>
                    @endif
					
					@if (App\Control::existeControl($detalle_paciente[0] -> id))
						<a class="btn btn-primary listacontroles" role="button" href="{{ url('/controles/list') }}/{{$detalle_paciente[0] -> id}}"><i class="fa fa-info"></i><span style="margin-left:5px;">Ver Controles</span></a></li></a>
					@endif					
					<a class="btn btn-primary creacontrol" role="button" href="{{ url('/controles/create') }}/{{$detalle_paciente[0] -> id}}"><i class="fa fa-file-text-o"></i><span style="margin-left:5px;">Nuevo Control</span></a></li></a>
                    
                </div>
            </div>

            <div class="row">
                <div id="muestra_cuestionario">
                
                </div>    
            </div>
            
        </div>
    </div>
</div>
<script src="{{ url('/js') }}/paciente.js" type="text/javascript"></script>
@endsection