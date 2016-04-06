@extends('layouts.app')


@section('content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Control</div>
					<div class="panel-body">
						<form action="{{ url('/controles/update') }}" method="POST" role="form" id="form-edit-control">
							<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
							<!--<input type="hidden" name="id" value="{{ $control_edit[0] -> id_control }}" />-->
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="">#</label>
									<input value="{{ $control_edit[0] -> id_control }}" type="text" readonly class="form-control" name="id_control">
								</div>
								<div class="form-group">
									<label for="">Fecha</label>
									<input value="{{ $control_edit[0] -> fecha_control }}" type="text" class="form-control" name="fecha_control">
								</div>
								<div class="form-group">
									<label for="">Control</label>
									<input value="{{ $control_edit[0] -> control }}" type="text" class="form-control" name="control">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-danger pull-right" id="edita_control">Editar</button>
								</div>
								<a class="btn btn-primary" role="button" href="{{ url('/controles/list') }}/{{$control_edit[0] -> fk_id_paciente}}"><i class="fa fa-arrow-left"></i><span style="margin-left:5px;">Regresar</span></a></li></a>
							</div>	
						</form>						
					</div>				
            </div>
        </div>
    </div>
</div>                
<script src="{{ url('/js') }}/paciente.js" type="text/javascript"></script>
@endsection