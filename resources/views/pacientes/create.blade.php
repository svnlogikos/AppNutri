@extends('layouts.app')


@section('content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Paciente</div>
                <div class="panel-body">
                	<form action="{{ url('/pacientes/store') }}" method="POST" role="form" id="form-alta-paciente">
                		<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Obra Social</label>
	                			<input value="" type="text" class="form-control" name="obra_social">
                			</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Fecha</label>
	                			<input value="" type="text" class="form-control" name="paciente_desde">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Nombre y Apellido</label>
	                			<input value="" type="text" class="form-control" name="nombre_apellido">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Edad</label>
	                			<input value="" type="text" class="form-control" name="edad">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Domicilio</label>
	                			<input value="" type="text" class="form-control" name="domicilio">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Telefono</label>
	                			<input value="" type="text" class="form-control" name="telefono">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Motivo de la consulta</label>
	                			<input value="" type="text" class="form-control" name="motivo_consulta">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Actividad laboral</label>
	                			<input value="" type="text" class="form-control" name="actividad_laboral">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Horario de trabajo</label>
	                			<input value="" type="text" class="form-control" name="horario_trabajo">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Grupo familiar</label>
	                			<input value="" type="text" class="form-control" name="grupo_familiar">
	                		</div>
                		</div>
                		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                			<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Patologias</label>
	                			<input value="" type="text" class="form-control" name="patologias">
                			</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">¿Comsume medicación?</label>
	                			<input value="" type="text" class="form-control" name="comsume_medicacion">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Alergias alimentarias</label>
	                			<input value="" type="text" class="form-control" name="alergias_alimentarias">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Talla</label>
	                			<input value="" type="text" class="form-control" name="talla">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Peso habitual</label>
	                			<input value="" type="text" class="form-control" name="peso_habitual">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Peso actual</label>
	                			<input value="" type="text" class="form-control" name="peso_actual">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Peso ideal</label>
	                			<input value="" type="text" class="form-control" name="peso_ideal">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Email</label>
	                			<input value="" type="text" class="form-control" name="email">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Contorno_cintura</label>
	                			<input value="" type="text" class="form-control" name="contorno_cintura">
	                		</div>
	                		<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                			<label for="">Contorno cadera</label>
	                			<input value="" type="text" class="form-control" name="contorno_cadera">
	                		</div>
                		</div>
                		
                		<button type="submit" class="btn btn-danger pull-right" id="alta_paciente">Crear</button>
                		<a class="btn btn-primary" role="button" href="{{ url('/pacientes') }}"><i class="fa fa-arrow-left"></i><span style="margin-left:5px;">Regresar</span></a></li></a>
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>                
<script src="{{ url('/js') }}/paciente.js" type="text/javascript"></script>
@endsection