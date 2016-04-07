<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Paciente extends Model
{
	protected $table = 'paciente';
	protected $fillable = array('obra_social','paciente_desde','nombre_apellido','edad','domicilio','telefono','motivo_consulta','actividad_laboral','horario_trabajo','grupo_familiar','patologias',
  	'comsume_medicacion','alergias_alimentarias','talla','peso_habitual','peso_actual','peso_ideal','email','contorno_cintura','contorno_cadera');

   
    public static function getPacientes()
	{
    	$Pacientes = \DB::table('paciente')
                                            ->orderBy('id','desc')
                                            ->take(50)
                                            ->get(array('id','obra_social','nombre_apellido'));

    	return $Pacientes;
    }

    public static function getDetallePaciente($elId)
	{
    	$detallePaciente = \DB::table('paciente')->where('id','=',$elId)->get(array('id','obra_social','paciente_desde','nombre_apellido','edad','domicilio','telefono','motivo_consulta','actividad_laboral','horario_trabajo','grupo_familiar','patologias',
  		'comsume_medicacion','alergias_alimentarias','talla','peso_habitual','peso_actual','peso_ideal','email','contorno_cintura','contorno_cadera'));
    	return $detallePaciente;
    }

    public static function buscaPaciente($criterio)
    {
        $detallePaciente = \DB::table('paciente')->where('nombre_apellido','like','%'.$criterio.'%')->get(array('id','obra_social','paciente_desde','nombre_apellido','edad','domicilio','telefono','motivo_consulta','actividad_laboral','horario_trabajo','grupo_familiar','patologias',
        'comsume_medicacion','alergias_alimentarias','talla','peso_habitual','peso_actual','peso_ideal','email','contorno_cintura','contorno_cadera'));
        return $detallePaciente;
    }

    
}
