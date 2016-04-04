@extends('layouts.app')


@section('content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Paciente</div>
                <div class="panel-body">
                	<form action="{{ url('/pacientes/update') }}" method="POST" role="form" id="form-edit-paciente">
                		<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
						<input type="hidden" name="id" value="{{ $paciente_edit[0] -> id }}" />
                		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                			<div class="form-group">
	                			<label for="">Obra Social</label>
	                			<input value="{{ $paciente_edit[0] -> obra_social }}" type="text" class="form-control" name="obra_social">
                			</div>
	                		<div class="form-group">
	                			<label for="">Fecha</label>
	                			<input value="{{ $paciente_edit[0] -> paciente_desde }}" type="text" class="form-control" name="paciente_desde">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Nombre y Apellido</label>
	                			<input value="{{ $paciente_edit[0] -> nombre_apellido }}" type="text" class="form-control" name="nombre_apellido">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Edad</label>
	                			<input value="{{ $paciente_edit[0] -> edad }}" type="text" class="form-control" name="edad">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Domicilio</label>
	                			<input value="{{ $paciente_edit[0] -> domicilio }}" type="text" class="form-control" name="domicilio">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Telefono</label>
	                			<input value="{{ $paciente_edit[0] -> telefono }}" type="text" class="form-control" name="telefono">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Motivo de la consulta</label>
	                			<input value="{{ $paciente_edit[0] -> motivo_consulta }}" type="text" class="form-control" name="motivo_consulta">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Actividad laboral</label>
	                			<input value="{{ $paciente_edit[0] -> actividad_laboral }}" type="text" class="form-control" name="actividad_laboral">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Horario de trabajo</label>
	                			<input value="{{ $paciente_edit[0] -> horario_trabajo }}" type="text" class="form-control" name="horario_trabajo">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Grupo familiar</label>
	                			<input value="{{ $paciente_edit[0] -> grupo_familiar }}" type="text" class="form-control" name="grupo_familiar">
	                		</div>
                		</div>
                		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                			<div class="form-group">
	                			<label for="">Patologias</label>
	                			<input value="{{ $paciente_edit[0] -> patologias }}" type="text" class="form-control" name="patologias">
                			</div>
	                		<div class="form-group">
	                			<label for="">¿Comsume medicación?</label>
	                			<input value="{{ $paciente_edit[0] -> comsume_medicacion }}" type="text" class="form-control" name="comsume_medicacion">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Alergias alimentarias</label>
	                			<input value="{{ $paciente_edit[0] -> alergias_alimentarias }}" type="text" class="form-control" name="alergias_alimentarias">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Talla</label>
	                			<input value="{{ $paciente_edit[0] -> talla }}" type="text" class="form-control" name="talla">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Peso habitual</label>
	                			<input value="{{ $paciente_edit[0] -> peso_habitual }}" type="text" class="form-control" name="peso_habitual">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Peso actual</label>
	                			<input value="{{ $paciente_edit[0] -> peso_actual }}" type="text" class="form-control" name="peso_actual">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Peso ideal</label>
	                			<input value="{{ $paciente_edit[0] -> peso_ideal }}" type="text" class="form-control" name="peso_ideal">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Email</label>
	                			<input value="{{ $paciente_edit[0] -> email }}" type="text" class="form-control" name="email">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Contorno_cintura</label>
	                			<input value="{{ $paciente_edit[0] -> contorno_cintura }}" type="text" class="form-control" name="contorno_cintura">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Contorno cadera</label>
	                			<input value="{{ $paciente_edit[0] -> contorno_cadera }}" type="text" class="form-control" name="contorno_cadera">
	                		</div>
                		</div>
                		
                		<button type="submit" class="btn btn-danger pull-right" id="edita_paciente">Editar</button>
                	</form>
					<a class="btn btn-primary" role="button" href="{{ url('/pacientes') }}"><i class="fa fa-arrow-left"></i><span style="margin-left:5px;">Regresar</span></a></li></a>
                </div>
				
            </div>
        </div>
    </div>
</div>                
<script src="{{ url('/js') }}/paciente.js" type="text/javascript"></script>
@endsection