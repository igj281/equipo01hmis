<?php

class BaseControllerTest extends PHPUnit_Framework_TestCase {

//este test comprueba que se redirecciona correctamente
	protected function testSetUpLayout(){
		$destino = Enhance::getCodeCoverageWrapper('BaseControllerClass');
		$destino->setUpLayout();
		assertEquals($this, parent::setupLayout);
	}
}
?>