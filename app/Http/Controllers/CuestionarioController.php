<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cuestionario;

class CuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {   
        
        return \View::make('cuestionarios.create',['id_del_paciente' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if ($request->ajax()) {
            $datos_nuevo_cuestionario = $request->all();

           /* 'fk_id_paciente',
            'consume_leche',
            'tazas_por_dia',
            'consume_queso',
            'tipo_queso',
            'porciones_queso_por_dia',
            'consume_yogur',
            'cuanto_yogur',
            'consume_huevo',
            'cuantos_huevos_semana',
            'consume_carne_vacuna',
            'cuanta_carne_vacuna_semana',
            'preparacion_carne_vacuna',
            'consume_pollo',
            'cuanto_pollo_semana',
            'preparacion_pollo',
            'consume_verduras',
            'cuanta_verdura_semana',
            'cuales_verduras_prefiere',
            'consume_legumbres',
            'cuales_legumbres',
            'consume_pastas',
            'cuales_pastas',
            'frecuencia_pastas',
            'cuantas_porciones_pasta',
            'consume_pan',
            'tipo_pan',
            'cuantas_porciones_pan',
            'consume_productos_panaderia',
            'porciones_prod_pan_por_dia',
            'consume_aceites',
            'cual_aceite',
            'crudo_cocido',
            'utiliza_ricio_vegetal',
            'manteca_margarina',
            'consume_mermeladas',
            'consume_aderezos',
            'consume_prod_como',
            'bebidas_consume',
            'consume_agua',
            'consume_azucar',
            'cantidad_azucar',
            'consume_frutas',
            'cuantas_frutas',
            'cuales_frutas',
            'consume_pescado',
            'cuanto_pescado',
            'consume_edulcorante',
            'cual_edulcorante',
            'actividad_fisica',
            'tipo_act_fisica',
            'cuantas_veces_act_fisica',
            'observaciones',
            'derivado_por'*/

            //defino las reglas de validación
            $reglas = array(
            'fk_id_paciente' => array('required'),
            'derivado_por' => array('required')
            );

            //Valido los datos de entrada
            $validator = \Validator::make($datos_nuevo_cuestionario, $reglas);

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
               $cuestionario_generado = Cuestionario::create($datos_nuevo_cuestionario);
               echo '<div class="alert alert-success" role="alert">El cuestionario se creó correctamente. <a href="'.url('/').'/pacientes/detalle/'.$datos_nuevo_cuestionario['fk_id_paciente'].'">Ingresar al Detalle del paciente.</a></div>';
               
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
        $cuestionario = Cuestionario::getCuestionarioPaciente($id);
        return \View::make('cuestionarios.detalle', array('detalle_cuestionario'=>$cuestionario));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
