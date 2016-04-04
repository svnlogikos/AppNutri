@extends('layouts.app')


@section('content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Cuestionario</div>

                <div class="panel-body">
                <form action="{{ url('/cuestionario/store') }}" method="POST" role="form" id="form_alta_cuestionario">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <input type="hidden" name="fk_id_paciente" id="fk_id_paciente" value="{{ $id_del_paciente }}" />
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="">Consume leche: </label>
                                <select name="consume_leche" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No Consume</option>
                                    <option value="Entera">Entera</option>
                                    <option value="Descremada">Descremada</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Tazas por día: </label>
                                <input value="" type="text" class="form-control" name="tazas_por_dia">
                            </div>
                            <div class="form-group">
                                <label for="">Consume queso: </label>
                                <select name="consume_queso" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Tipo queso: </label>
                                <input value="" type="text" class="form-control" name="tipo_queso">
                            </div>
                            <div class="form-group">
                                <label for="">¿Cuantas porciones de queso por día?: </label>
                                <input value="" type="text" class="form-control" name="porciones_queso_por_dia">
                            </div>
                            <div class="form-group">
                                <label for="">Consume yogur: </label>
                                <select name="consume_yogur" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No Consume</option>
                                    <option value="Entero">Entero</option>
                                    <option value="Descremado">Descremado</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">¿Cuanto?: </label>
                                <input value="" type="text" class="form-control" name="cuanto_yogur">
                            </div>
                            <div class="form-group">
                                <label for="">Consume huevo: </label>
                                <select name="consume_huevo" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Huevos por semana: </label>
                                <input value="" type="text" class="form-control" name="cuantos_huevos_semana">
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume carne vacuna?: </label>
                                <input value="" type="text" class="form-control" name="consume_carne_vacuna">
                            </div>
                            <div class="form-group">
                                <label for="">¿Cuanta por semana?: </label>
                                <input value="" type="text" class="form-control" name="cuanta_carne_vacuna_semana">
                            </div>
                            <div class="form-group">
                                <label for="">Preparacion carne vacuna: </label>
                                <input value="" type="text" class="form-control" name="preparacion_carne_vacuna">
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume pollo?: </label>
                                <select name="consume_pollo" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">¿Cuanto pollo por semana?: </label>
                                <input value="" type="text" class="form-control" name="cuanto_pollo_semana">
                            </div>
                            <div class="form-group">
                                <label for="">Preparacion pollo: </label>
                                <select name="preparacion_pollo" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="Horno">Horno</option>
                                    <option value="Frito">Frito</option>
                                    <option value="Plancha">Plancha</option>
                                    <option value="Estofado">Estofado</option>
                                    <option value="Otro">Otro</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume verduras?: </label>
                                <select name="consume_verduras" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">¿Cuanta verdura por semana?: </label>
                                <input value="" type="text" class="form-control" name="cuanta_verdura_semana">
                            </div>
                            <div class="form-group">
                                <label for="">¿Cuales verduras prefiere?: </label>
                                <input value="" type="text" class="form-control" name="cuales_verduras_prefiere">
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume legumbres?: </label>
                                <select name="consume_legumbres" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Cuales legumbres?: </label>
                                <input value="" type="text" class="form-control" name="cuales_legumbres">
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume pastas?: </label>
                                <select name="consume_pastas" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">¿Cuales pastas?: </label>
                                <input value="" type="text" class="form-control" name="cuales_pastas">
                            </div>
                            <div class="form-group">
                                <label for="">Frecuencia pastas: </label>
                                <input value="" type="text" class="form-control" name="frecuencia_pastas">
                            </div>
                            <div class="form-group">
                                <label for="">¿Cuantas porciones pasta?: </label>
                                <input value="" type="text" class="form-control" name="cuantas_porciones_pasta">
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume pan?: </label>
                                <select name="consume_pan" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Tipo pan: </label>
                                <input value="" type="text" class="form-control" name="tipo_pan">
                            </div>
                            
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="">¿Cuantas porciones de pan?: </label>
                                <input value="" type="text" class="form-control" name="cuantas_porciones_pan">
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume productos de panaderia?: </label>
                                <select name="consume_productos_panaderia" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="Ninguno">Ninguno</option>
                                    <option value="Galletitas">Galletitas</option>
                                    <option value="Facturas">Facturas</option>
                                    <option value="Tortas">Tortas</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">¿Cuantas porciones por dia?: </label>
                                <input value="" type="text" class="form-control" name="porciones_prod_pan_por_dia">
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume aceites?: </label>
                                <select name="consume_aceites" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                               
                            </div>
                            <div class="form-group">
                                <label for="">¿Cual aceite?: </label>
                                <input value="" type="text" class="form-control" name="cual_aceite">
                            </div>
                            <div class="form-group">
                                <label for="">¿Crudo ó cocido?: </label>
                                <select name="crudo_cocido" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="Crudo">Crudo</option>
                                    <option value="Cocido">Cocido</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">¿Utiliza rocio vegetal?: </label>
                                <select name="utiliza_ricio_vegetal" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">¿Manteca ó margarina?: </label>
                                <select name="manteca_margarina" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="Manteca">Manteca</option>
                                    <option value="Margarina">Margarina</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume mermeladas?: </label>
                                <select name="consume_mermeladas" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Dietetica">Dietética</option>
                                    <option value="Comun">Común</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume aderezos?: </label>
                                <select name="consume_aderezos" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Mayonesa">Mayonesa</option>
                                    <option value="Salsa_Golf">Salsa Golf</option>
                                    <option value="Mostaza">Mostaza</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume productos como?: </label>
                                <select name="consume_prod_como" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Papas Fritas">Papas Fritas</option>
                                    <option value="Chizitos">Chizitos</option>
                                    <option value="Palitos salados">Palitos salados</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume bebidas?: </label>
                                <input value="" type="text" class="form-control" name="bebidas_consume">
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume agua?: </label>
                                <input value="" type="text" class="form-control" name="consume_agua">
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume azucar?: </label>
                                <select name="consume_azucar" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Cantidad azucar?: </label>
                                <input value="" type="text" class="form-control" name="cantidad_azucar">
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume frutas?: </label>
                                <select name="consume_frutas" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                               
                            </div>
                            <div class="form-group">
                                <label for="">¿Cuantas frutas?: </label>
                                <input value="" type="text" class="form-control" name="cuantas_frutas">
                            </div>
                            <div class="form-group">
                                <label for="">¿Cuales frutas?: </label>
                                <input value="" type="text" class="form-control" name="cuales_frutas">
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume pescado?: </label>
                                <select name="consume_pescado" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">¿Cuanto pescado?: </label>
                                <input value="" type="text" class="form-control" name="cuanto_pescado">
                            </div>
                            <div class="form-group">
                                <label for="">¿Consume edulcorante?: </label>
                                <select name="consume_edulcorante" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">¿Cual edulcorante?: </label>
                                <input value="" type="text" class="form-control" name="cual_edulcorante">
                            </div>
                            <div class="form-group">
                                <label for="">Actividad fisica: </label>
                                <select name="actividad_fisica" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Tipo actividad fisica: </label>
                                <input value="" type="text" class="form-control" name="tipo_act_fisica">
                            </div>
                            <div class="form-group">
                                <label for="">¿Cuantas veces?: </label>
                                <input value="" type="text" class="form-control" name="cuantas_veces_act_fisica">
                            </div>
                            <div class="form-group">
                                <label for="">Observaciones:</label>
                                <textarea name="observaciones" id="input" class="form-control" rows="3"></textarea> 
                            </div>
                            <div class="form-group">
                                <label for="">Derivado por: </label>
                                <input value="" type="text" class="form-control" name="derivado_por">
                            </div>

                        </div>
                            
                        </div>
                        

                    <button type="submit" class="btn btn-danger pull-right" id="alta_cuestionario_paciente">Agregar cuestionario</button>
                </form>
                    

                </div>
            </div>
        </div>
        
    </div>
</div>
<script src="{{ url('/js') }}/cuestionario.js" type="text/javascript"></script>
@endsection