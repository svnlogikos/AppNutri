<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Paciente;
use App\Http\Controllers\Controller;


class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listadoPacientes =  Paciente::getPacientes();

        return \View::make('pacientes.lista', array('listado_pacientes'=>$listadoPacientes));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) 
		{
            $datos_nuevo_paciente = $request->all();

            //defino las reglas de validación
            $reglas = array(
            'obra_social' => array('required'),
            'paciente_desde' => array('required'),
            'nombre_apellido' => array('required'),
            'edad' => array('required'),
            'domicilio' => array('required'),
            'telefono' => array('required'),
            'email' => array('required','email')
            );

            //Valido los datos de entrada
            $validator = \Validator::make($datos_nuevo_paciente, $reglas);

            if ($validator->fails()) {

                $messages = $validator->messages();
                echo '<div class="alert alert-danger" role="alert">';

                //Imprimo los mensajes de error
                foreach ($messages->all() as $error) {
                    echo $error."<br>";
                }

                echo '</div>';

            }
            else {
               $paciente_generado = Paciente::create($datos_nuevo_paciente);
                echo '<div class="alert alert-success" role="alert">El paciente se creó correctamente. <a href="'.url('/').'/pacientes/detalle/'.$paciente_generado->id.'">Crear cuestionario</a></div>';
            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalle = Paciente::getDetallePaciente($id);
        return \View::make('pacientes.detalle', array('detalle_paciente'=>$detalle));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {	$detalle = Paciente::getDetallePaciente($id);
		//print_r($detalle);
        return \View::make('pacientes.edit', array('paciente_edit'=>$detalle));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
		if($request -> ajax())
		{
			//print_r($request -> all());
			$datos_paciente = $request->all();
			
			//defino las reglas de validación
            $reglas = array
			(
				'obra_social' => array('required'),
				'paciente_desde' => array('required'),
				'nombre_apellido' => array('required'),
				'edad' => array('required'),
				'domicilio' => array('required'),
				'telefono' => array('required'),
				'email' => array('required','email')
            );
			
			//Valido los datos de entrada
            $validator = \Validator::make($datos_paciente, $reglas);
			
			if ($validator->fails()) 
			{

                $messages = $validator->messages();
                echo '<div class="alert alert-danger" role="alert">';

                //Imprimo los mensajes de error
                foreach ($messages->all() as $error) {
                    echo $error."<br>";
                }

                echo '</div>';

            }
            else 
			{	$paciente = Paciente::find($datos_paciente['id']);
					//echo $datos_paciente['id'];
					//print_r($datos_paciente);
					
				$paciente -> obra_social = $datos_paciente['obra_social'];
				$paciente -> paciente_desde = $datos_paciente['paciente_desde'];
				$paciente -> nombre_apellido = $datos_paciente['nombre_apellido'];
				$paciente -> edad = $datos_paciente['edad'];
				$paciente -> domicilio = $datos_paciente['domicilio'];
				$paciente -> telefono = $datos_paciente['telefono'];
				$paciente -> motivo_consulta = $datos_paciente['motivo_consulta'];
				$paciente -> actividad_laboral = $datos_paciente['actividad_laboral'];
				$paciente -> horario_trabajo = $datos_paciente['horario_trabajo'];
				$paciente -> grupo_familiar = $datos_paciente['grupo_familiar'];
				$paciente -> patologias = $datos_paciente['patologias'];
				$paciente -> comsume_medicacion = $datos_paciente['comsume_medicacion'];
				$paciente -> alergias_alimentarias = $datos_paciente['alergias_alimentarias'];
				$paciente -> talla = $datos_paciente['talla'];
				$paciente -> peso_habitual = $datos_paciente['peso_habitual'];
				$paciente -> peso_actual = $datos_paciente['peso_actual'];
				$paciente -> peso_ideal = $datos_paciente['peso_ideal'];
				$paciente -> email = $datos_paciente['email'];
				$paciente -> contorno_cintura = $datos_paciente['contorno_cintura'];
				$paciente -> contorno_cadera = $datos_paciente['contorno_cadera'];

				$control = $paciente->save();
				
				if($control)
				{
					echo '<div class="alert alert-success" role="alert">El paciente se actualizó correctamente.<a href="'.url('/').'/pacientes/detalle/'.$datos_paciente['id'].'">Regresar al detalle del paciente.</a></div>';
				}
				//$paciente_generado = Paciente::create($datos_paciente);
        
            }
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paciente::destroy($id);
        echo '<div class="alert alert-success" role="alert">El paciente se eliminó correctamente.</div>';
    }

    /**
     * Busca los pacientes que coincidan con el criterio de búsqueda
     *
     * @param  string  $criterio
     * @return \Illuminate\Http\Response
     */
    public function search($criterio)
    {
        $resultado_busqueda = Paciente::buscaPaciente($criterio);

        foreach ($resultado_busqueda as $paciente) {
            echo '<tr data-id="'.$paciente -> id.'">';
            echo '<td>'.$paciente -> id.'</td>';
            echo '<td>'.$paciente -> nombre_apellido.'</td>';
            echo '<td>'.$paciente -> obra_social.'</td>';
            echo '<td class="text-center">';
            echo'<a class="btn btn-primary detalles" role="button" href="pacientes/detalle/'.$paciente -> id.'" id="'.$paciente -> id.'"><i class="fa fa-info"></i><span style="margin-left:5px;">Detalles</span></a></li></a>';
            echo '</td>';
            echo '<td class="text-center">';
            echo '<a class="btn btn-primary" role="button" href="pacientes/edit/'.$paciente -> id.'"><i class="fa fa-pencil"></i><span style="margin-left:5px;">Editar</span></a></li></a>';
            echo '</td>';
            echo '<td class="text-center">';
            echo' <button type="submit" class="btn btn-danger btn-eliminar">Eliminar</button>';
            echo '</td>';
            echo '</tr>';
        }
    }
}
