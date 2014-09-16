<?php
class EventosControllerTest extends PHPUnit_Framework_TestCase{

	//comprobamos que redirecciona correctamente
	
	public function testIndex(){
		$destino = Enhance::getCodeCoverageWrapper('EventosControllerClass');
		$destino->index();
		$this->call('GET', 'admin');
		$this->assertResponseOk();
	}
	
	//comprobamos que redirecciona correctamente
	
	public function testEventito(){
		$destino = Enhance::getCodeCoverageWrapper('EventosControllerClass');
		$destino->eventito();
		$this->call('GET', 'eventos');
		$this->assertResponseOk();
	}
	
	//comprobamos que falla al añadir un evento
	
	public function testPostEventoFalla(){
		$destino = Enhance::getCodeCoverageWrapper('EventosControllerClass');
		$destino->postEvento();
		$validator->fails();
		$this->call('POST', '/eventos');
		$this->assertSessionHasErrors();
	}

	//comporbamos que se añade un evento
	public function testPostEventoCorrecto(){
		$destino = Enhance::getCodeCoverageWrapper('EventosControllerClass');
		$destino->postEvento();
		$eventos=new Evento;	
		$eventos->nombre='Concierto Dani Martin';
		$eventos->fecha='2014-08-01';
		$eventos->hora='23:30';
		$eventos->tipo='musica';
		$eventos->aforo='1000';
		$eventos->descripcion='concierto del ex-cantante de ECDL en Berja';

		$eventos->save();
		$this->call('POST', 'eventos');

		$this->assertRedirectedToRoute('eventos');
	}
	
}
?>