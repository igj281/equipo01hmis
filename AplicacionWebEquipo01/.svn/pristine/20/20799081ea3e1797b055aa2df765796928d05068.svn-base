<?php
class UserControllerTest extends PHPUnit_Framework_TestCase{
	
	//comprobamos que se muestra la vista correctamente
	
	public function testGetFormulario(){
		$destino = Enhance::getCodeCoverageWrapper('UserControllerClass');
		$destino->getFormulario();
		$this->call('GET', 'formulario');
		$this->assertResponseOk();
	}
	
	//comprueba que ocurre al insertar un usuario si falla
	public function testPost_formularioFalla(){
		$destino = Enhance::getCodeCoverageWrapper('RegistroControllerClass');
		$destino->postRegistro();
		$validator->fails();
		$this->call('POST', '/registro');
		$this->assertSessionHasErrors();
	}
	
	//comprueba que ocurre al insertar correctamente el usuario
	public function testPostRegistroCorrecto(){
		$usuario=new User;
		$usuario->user='Pepito123';
		$usuario->password='pepito123';
		$usuario->email='pepito@hotmail.com';
		$usuario->nombre='Pepe';
		$usuario->apellidos='Juarez Perez';
		$usuario->telefono='666999887';


		$usuario->save();
		$this->call('POST', 'formulario');
 
		$this->assertRedirectedToRoute('formulario');
	}
 
    
}
?>