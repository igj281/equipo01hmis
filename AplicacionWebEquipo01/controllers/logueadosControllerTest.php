<?php
class logueadosControllerTest extends PHPUnit_Framework_TestCase{

	//comprobamos que nos redirecciona correctamente
	
	public function testGetLogueados(){
		$destino = Enhance::getCodeCoverageWrapper('logueadosControllerClass');
		$destino->getLogueados();
		$this->call('GET', 'logueados');
		$this->assertResponseOk();
	}
	
	//aqui comprobamos que realice la consulta de forma correcta y nos redireccione correctamente.
	
	public function testPost_logueados(){
		$destino = Enhance::getCodeCoverageWrapper('logueadosControllerClass');
		$destino->post_logueados();
		$this->call('GET', 'logueados', array('eventos' => $cine));
		$this->assertResponseOk();
	}
}
?>