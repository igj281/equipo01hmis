<?php
class HomeControllerTest extends PHPUnit_Framework_TestCase{

	//comprueba que muestra la lista de usuarios
	
	public function testAllUser(){
		$destino = Enhance::getCodeCoverageWrapper('HomeControllerClass');
		$destino->allUser();
		$this->call('GET', 'usuarios');
		$this->assertResponseOk();
	}
	
	//comprueba que muestra la lista de eventos
	
	public function testAllEvents(){
		$destino = Enhance::getCodeCoverageWrapper('HomeControllerClass');
		$destino->allEvents();
		$this->call('GET', 'eventos');
		$this->assertResponseOk();
	}
	
	//test que comprueba si redirecciona correctamente
	
	public function testShowWelcome(){
		$destino = Enhance::getCodeCoverageWrapper('HomeControllerClass');
		$destino->showWelcome();
		$this->call('GET', 'hello');
		$this->assertResponseOk();
	}
	
	//comprueba que se elimina un id
	
	public function testDetroy($id){
	
		//DB::table('users')->where ('id')->delete();
		$destino = Enhance::getCodeCoverageWrapper('HomeControllerClass');
		$destino->destroy(id);
		$this->assertEquals((DB::table('users')->find(id)),null);
		
		
	}
}
?>