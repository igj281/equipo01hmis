<?php
class EventosControllerTest extends PHPUnit_Framework_TestCase{

	//comprobamos que redirecciona correctamente
	
	public function testIndex(){
		$destino = Enhance::getCodeCoverageWrapper('EventosControllerClass');
		$destino->index();
		$this->call('GET', 'admin');
		$this->assertResponseOk();
	}
	
	//comprobamos que redirecciona correctamente a los eventos
	
	public function testEventito(){
		$destino = Enhance::getCodeCoverageWrapper('EventosControllerClass');
		$destino->eventito();
		$this->call('GET', 'eventos');
		$this->assertResponseOk();
	}
	
	//comprobamos que falla al anadir un evento
	
	public function testPostEventoFalla(){
		$destino = Enhance::getCodeCoverageWrapper('EventosControllerClass');
		$destino->postEvento();
		$validator->fails();
		$this->call('POST', '/eventos');
		$this->assertSessionHasErrors();
	}

	//comporbamos que se anade un evento correctamente
	public function testPostEventoCorrecto(){
		$destino = Enhance::getCodeCoverageWrapper('EventosControllerClass');
		$destino->postEvento();
		$eventos=new Evento;	
		$eventos->nombre='Concirto David Bisbal';
		$eventos->fecha='2014-08-14';
		$eventos->hora='23:00';
		$eventos->tipo='B';
		$eventos->aforo='1000';
		$eventos->descripcion='Concierto del famoso almeriense David Bisbal en Vera (Almeria)';

		$eventos->save();
		$this->call('POST', 'eventos');

		$this->assertRedirectedToRoute('eventos');
	}
	
}
?>