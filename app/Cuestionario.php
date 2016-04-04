<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
  	protected $table = 'cuestionario';
	protected $fillable = array('fk_id_paciente','consume_leche','tazas_por_dia','consume_queso','tipo_queso','porciones_queso_por_dia','consume_yogur','cuanto_yogur',
								'consume_huevo','cuantos_huevos_semana','consume_carne_vacuna','cuanta_carne_vacuna_semana','preparacion_carne_vacuna','consume_pollo','cuanto_pollo_semana',
								'preparacion_pollo','consume_verduras','cuanta_verdura_semana','cuales_verduras_prefiere','consume_legumbres','cuales_legumbres','consume_pastas','cuales_pastas',
								'frecuencia_pastas','cuantas_porciones_pasta','consume_pan','tipo_pan','cuantas_porciones_pan','consume_productos_panaderia','porciones_prod_pan_por_dia',
								'consume_aceites','cual_aceite','crudo_cocido','utiliza_ricio_vegetal','manteca_margarina','consume_mermeladas','consume_aderezos','consume_prod_como',
								'bebidas_consume','consume_agua','consume_azucar','cantidad_azucar','consume_frutas','cuantas_frutas','cuales_frutas','consume_pescado','cuanto_pescado',
								'consume_edulcorante','cual_edulcorante','actividad_fisica','tipo_act_fisica','cuantas_veces_act_fisica','observaciones','derivado_por');


	public static function getCuestionarioPaciente($id_paciente){
    	$cuestionarioPaciente = \DB::table('cuestionario')->where('fk_id_paciente','=',$id_paciente)->get(array('fk_id_paciente','consume_leche','tazas_por_dia','consume_queso','tipo_queso','porciones_queso_por_dia','consume_yogur','cuanto_yogur',
								'consume_huevo','cuantos_huevos_semana','consume_carne_vacuna','cuanta_carne_vacuna_semana','preparacion_carne_vacuna','consume_pollo','cuanto_pollo_semana',
								'preparacion_pollo','consume_verduras','cuanta_verdura_semana','cuales_verduras_prefiere','consume_legumbres','cuales_legumbres','consume_pastas','cuales_pastas',
								'frecuencia_pastas','cuantas_porciones_pasta','consume_pan','tipo_pan','cuantas_porciones_pan','consume_productos_panaderia','porciones_prod_pan_por_dia',
								'consume_aceites','cual_aceite','crudo_cocido','utiliza_ricio_vegetal','manteca_margarina','consume_mermeladas','consume_aderezos','consume_prod_como',
								'bebidas_consume','consume_agua','consume_azucar','cantidad_azucar','consume_frutas','cuantas_frutas','cuales_frutas','consume_pescado','cuanto_pescado',
								'consume_edulcorante','cual_edulcorante','actividad_fisica','tipo_act_fisica','cuantas_veces_act_fisica','observaciones','derivado_por'));
    	return $cuestionarioPaciente;
    }

    public static function existeCuestionario($id_paciente){
    	$existe = Cuestionario::where('fk_id_paciente', $id_paciente)->exists();
    	return $existe;
    }


}
