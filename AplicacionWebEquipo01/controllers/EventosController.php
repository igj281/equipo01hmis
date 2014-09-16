<?php

class EventosController extends BaseController {

	

	public function index(){
	
        return View::make('admin');
	}
	public function eventito(){
	
        return View::make('eventos');
	}


	public function postEvento()
	{

		$reglas =  array(
				'nombre'  => array('required', 'min:8', 'unique:eventos'),
				'fecha'=>'required',
				'hora'=>'required',
				'tipo'=>'required',
				'aforo'=>'required',
				'descripcion'=>'required'

				);
				$validator = Validator::make(Input::all(), $reglas);
					if ( $validator->fails() ){
						return Redirect::to('/eventos')
                // Aquí se esta devolviendo a la vista los errores 
                ->withErrors($validator)
                // Aquí se esta devolviendo a la vista todos los datos del formulario
                ->withInput();
   			 }else{

					$eventos=new Evento;	
					$eventos->nombre=Input::get('nombre');
					$eventos->fecha=Input::get('fecha');
					$eventos->hora=Input::get('hora');
					$eventos->tipo=Input::get('tipo');
					$eventos->aforo=Input::get('aforo');
					$eventos->descripcion=Input::get('descripcion');

					$eventos->save();
					return Redirect::to('eventos');
				}
    }
}
?>
