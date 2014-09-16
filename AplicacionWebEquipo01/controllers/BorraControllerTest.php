<?php

class BorraControllerTest extends  PHPUnit_Framework_TestCase{

//comprueba que redirecciona correctamente al insertar

	public function testIndex() {
		$destino = Enhance::getCodeCoverageWrapper('BorraControllerClass');
		$destino->index();
		$this->call('GET', 'eventosadmin');
		$this->assertResponseOk();
        
    }
	
	//comprueba que redirecciona correctamente al eliminar
	
	public function testDestroy($id) {
		$destino = Enhance::getCodeCoverageWrapper('BorraControllerClass');
		$destino->destroy($id);
		$this->assertEquals((User::find($id)),null);
        $this->call('GET', 'eventosadmin');
		$this->assertResponseOk();
	}
	
}
?>
