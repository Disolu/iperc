<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

class TestController extends Controller {

    
    //ya , aca van tus funciones
    public function ObtenerRiesgosPorPeligro(){
        //entonces ya sabes que va a venir un parametro llamado peligroId, a traves de un ajax GET
        // lo recuperas
        $peligroId = $_GET['peligroId'];
        //con esta variable, ya puedes hacer tu consulta a la BD

        //despues de hacer tu consulta, tienes que retornar la lista de riesgos asociada a ese id de peligro que tienes
        //lo botas como json
        $riesgos =  array(  );                       
        //esta es el array apra que devuelvas el array de riesgos

        //simulemos la data
         $riesgo =  new \stdClass();
         $riesgo->id = 1;
         $riesgo->riesgos = "gg wp";
         //agrego este objeto de prueba al array $riesgos
        array_push($riesgos,$riesgo);

        /*return Response::json(array(
            //aca lo retorno, deberia mostrar ese riesgo que cree arriba entonces
            'riesgos' =>  $riesgos // se devuelve un array llamado riesgos
        ), 200
        )->setCallback(Input::get('callback'));
        */
        return response()->json(['riesgos'=>$riesgos]);


    }

    //funcion de ayuda para renderizar a json
    public function json($data = [], $status = 200, array $headers = [], $options = 0)
    {
        if ($data instanceof Arrayable && ! $data instanceof JsonSerializable) {
            $data = $data->toArray();
        }
        return new JsonResponse($data, $status, $headers, $options);
    }
}