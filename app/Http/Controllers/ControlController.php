<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Control;
use App\Http\Controllers\Controller;

class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($fk_id_paciente)
    {
        $listadoControles =  Control::getControles($fk_id_paciente);

        return \View::make('controles.list', array('listado_controles'=>$listadoControles));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return \View::make('controles.create',['id_paciente' => $id]);
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
				$datos_nuevo_control = $request->all();

				//defino las reglas de validación
				$reglas = array(
				'fecha_control' => array('required'),
				'control' => array('required')
				//'email' => array('required','email')
				);

				//Valido los datos de entrada
				$validator = \Validator::make($datos_nuevo_control, $reglas);

				if ($validator->fails()) {

					$messages = $validator->messages();
					echo '<div class="alert alert-danger" role="alert">';

					//Imprimo los mensajes de error
					foreach ($messages->all() as $error) {
						echo $error."<br>";
					}

					echo '</div>';

				}
				else 
				{	//print_r($datos_nuevo_control);
					$ctrl = Control::create($datos_nuevo_control);
					
					echo '<div class="alert alert-success" role="alert">El control se creó correctamente. <a href="'.url('/').'/pacientes/detalle/'.$ctrl['fk_id_paciente'].'">Volver al detalle del paciente.</a></div>';
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalle = Control::getDetalleControl($id);
		//print_r($detalle);
        return \View::make('controles.edit', array('control_edit'=>$detalle));
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
			$datos_control = $request->all();
			
			//defino las reglas de validación
            $reglas = array
			(
				'fecha_control' => array('required'),
				'control' => array('required'),
            );
			
			//Valido los datos de entrada
            $validator = \Validator::make($datos_control, $reglas);
			
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
			{	//echo $datos_control['id_control'];
				//print_r($datos_control);
				$control = Control::find($datos_control['id_control']);
					
				$control -> fecha_control = $datos_control['fecha_control'];
				$control -> control = $datos_control['control'];

				$ctrl = $control -> save();
								
				if($ctrl)
				{	echo "actualizado!";
					//echo '<div class="alert alert-success" role="alert">El control del paciente se actualizó correctamente.<a href="'.url('/').'/controles/edit/'.$datos_control['id_control'].'">Regresar al detalle del control.</a></div>';
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
        Control::destroy($id);
        echo '<div class="alert alert-success" role="alert">El control se eliminó correctamente.</div>';
    }
}
