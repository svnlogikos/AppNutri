@extends('layouts.app')


@section('content')

<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Pacientes</div>

                <div class="panel-body">
                <div class="row">
                    <form action="{{ url('/pacientes/search') }}" method="post" class="navbar-form navbar-left" role="search" id="form_busca_paciente">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <div class="form-group">
                            <input type="text" class="form-control criterio" placeholder="Buscar Paciente">
                        </div>
                        <button type="submit" class="btn btn-primary" id="busca_paciente">Buscar</button>
                    </form>
                    <a class="btn btn-danger" role="button" href="{{ url('/pacientes/create') }}"><i class="fa fa-plus"></i><span style="margin-left:5px;">Nuevo Paciente</span></a></li></a>
                </div>
                

                <br>
                <div class="table-responsive">
                    <table id="listado_pacientes" class="table table-bordered table-hover">
                        <thead>
                            <tr>   
                                <th class="text-center">#</th>
                                <th class="text-center">Nombre y Apellido</th>
                                <th class="text-center">Obra Social</th>
                                <th colspan="3" class="text-center">Operaciones</th>
                            </tr>
                        </thead>
                        <tbody style="font-size:13px;">
                            @foreach($listado_pacientes as $paciente)
                                <tr data-id="{{$paciente -> id}}">
                                    <td>
                                        {{$paciente -> id}}
                                    </td>
                                    <td>
                                        {{$paciente -> nombre_apellido}}
                                    </td>
                                    <td>
                                        {{$paciente -> obra_social}}
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-primary detalles" role="button" href="pacientes/detalle/{{$paciente -> id}}" id="{{$paciente -> id}}"><i class="fa fa-info"></i><span style="margin-left:5px;">Detalles</span></a></li></a>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-primary" role="button" href="pacientes/edit/{{$paciente -> id}}"><i class="fa fa-pencil"></i><span style="margin-left:5px;">Editar</span></a></li></a>
                                    </td>
                                    <td class="text-center">
                                        <button type="submit" class="btn btn-danger btn-eliminar">Eliminar</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                </div>
            </div>
        </div>
        <form id="form-delete-paciente" action="{{ url('/pacientes/destroy') }}" method="post" accept-charset="utf-8">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        </form>
    </div>
</div>
<script src="{{ url('/js') }}/paciente.js" type="text/javascript"></script>
   <script language="javascript" type="text/javascript">  
//<![CDATA[  
    var propiedades_de_la_tabla =  {                     
                    col_0: 'none',  
                    col_3: 'none',  
                    col_4: 'none', 
                    col_5: 'none',
                    col_6: 'none', 
                    col_7: 'none', 
                    display_all_text: " [ Mostrar todo ] ",  
                    sort_select: true  ,
                    paging: true,  
                    paging_length: 50,  
                    rows_counter: true,  
                    rows_counter_text: "Filas:",  
                    btn_reset: true,  
                    loader: true,  
                    loader_text: "Filtrando datos..." 
                };  
    var tf2 = setFilterGrid( "listado_pacientes",propiedades_de_la_tabla);  
//]]>  
</script> 

@endsection