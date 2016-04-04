@extends('layouts.app')

@section('content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">Controles de: <strong>{{ $listado_controles[0][0] -> nombre_apellido }}</strong></div>
				
                <div class="panel-body">
                <!--<a class="btn btn-danger" role="button" href="{{ url('/pacientes/create') }}"><i class="fa fa-plus"></i><span style="margin-left:5px;">Nuevo Paciente</span></a></li></a>-->
                <div class="table-responsive">
                    <table id="listado_controles" class="table table-bordered table-hover">
                        <thead>
                            <tr>   
                                <th class="text-center">#</th>
                                <th class="text-center">Fecha</th>
                                <th class="text-center">Control</th>
                            </tr>
                        </thead>
                        <tbody style="font-size:13px;">
                            @foreach($listado_controles[1] as $control)
                                <tr data-id="{{$control -> id_control}}">
                                    <td>
                                        {{$control -> id_control}}
                                    </td>
                                    <td>
                                        {{$control -> fecha_control}}
                                    </td>
                                    <td>
                                        {{$control -> control}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
				<a class="btn btn-primary" role="button" href="{{ url('/pacientes/detalle/') }}/{{$listado_controles[0][0] -> id }} "><i class="fa fa-arrow-left"></i><span style="margin-left:5px;">Regresar</span></a></li></a>
                </div>
            </div>
        </div>
        <!--<form id="form-delete-paciente" action="{{ url('/pacientes/destroy') }}" method="post" accept-charset="utf-8">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        </form>-->
    </div>
</div>
@endsection