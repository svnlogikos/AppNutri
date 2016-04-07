<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Control extends Model
{
	protected $table = 'control';
	protected $fillable = array('fk_id_paciente','fecha_control','control');
    protected  $primaryKey = 'id_control';
	
	public static function existeControl($id_paciente)
	{
    	$existe = Control::where('fk_id_paciente', $id_paciente)->exists();
    	return $existe;
    }

   
    public static function getControles($fk_id_paciente)
	{
    	
        $Paciente = \DB::table('paciente')
                            ->where('id','=',$fk_id_paciente)->get();

        $Controles = \DB::table('control')
                            ->where('fk_id_paciente','=',$fk_id_paciente)->orderBy('fecha_control','asc')->get();

        /*$Controles = \DB::table('control')
                            ->join('paciente','control.fk_id_paciente','=','paciente.id')
                            ->where('control.fk_id_paciente','=',$fk_id_paciente)->orderBy('control.fecha_control','asc')->get();*/

        $Datos = array($Paciente,$Controles);

    	return $Datos;
    }
	public static function getDetalleControl($Id)
	{
    	$detalleControl = \DB::table('control')->where('id_control','=',$Id)->get(array('id_control','fk_id_paciente','fecha_control','control'));
    	return $detalleControl;
    }
	/*
    public static function getDetallePaciente($elId){
    	$detallePaciente = \DB::table('paciente')->where('id','=',$elId)->get(array('id','obra_social','paciente_desde','nombre_apellido','edad','domicilio','telefono','motivo_consulta','actividad_laboral','horario_trabajo','grupo_familiar','patologias',
  		'comsume_medicacion','alergias_alimentarias','talla','peso_habitual','peso_actual','peso_ideal','email','contorno_cintura','contorno_cadera'));
    	return $detallePaciente;
    } */

    
}
