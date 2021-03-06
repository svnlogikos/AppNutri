@extends('layouts.app')


@section('content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Controles Anteriores</div>
                <div class="panel-body">
                    <?php $loscontroles = App\Control::getControles($id_paciente);?>
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
                            @foreach($loscontroles[1] as $control)
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

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Control</div>
                <div class="panel-body">
                	<form action="{{ url('/controles/store') }}" method="POST" role="form" id="form-alta-control">
                		<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
						<input type="hidden" name="fk_id_paciente" value="{{ $id_paciente }}" />
                		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                		<div class="form-group">
	                			<label for="">Fecha</label>
	                			<input value="" type="text" class="form-control" name="fecha_control">
	                		</div>                		
                		</div>    
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
	                			<label for="">Control</label>
	                			<input value="" type="text" class="form-control" name="control">
	                		</div>	
						</div>
                		<button type="submit" class="btn btn-danger pull-right" id="alta_control">Crear</button>
                        <a class="btn btn-primary" role="button" href="{{ url('/pacientes/detalle/') }}/{{ $id_paciente }} "><i class="fa fa-arrow-left"></i><span style="margin-left:5px;">Regresar</span></a></li></a>
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>                
<script src="{{ url('/js') }}/paciente.js" type="text/javascript"></script>
@endsection