<?php
class RegistroControllerTest extends PHPUnit_Framework_TestCase {
	
	//en este test comprobamos si nos redirecciona adecuadamente cuando está autetificado
	
	public function testShowFormAutentificado(){
		$destino = Enhance::getCodeCoverageWrapper('RegistroControllerClass');
		$destino->showForm();
		if (Auth::check()){
			$this->call('GET', '/');
			$this->assertResponseOk();
		}
	}

		
	//si el usuario no está autentificado

	public function testShowFormNoAutentificado(){
		$destino = Enhance::getCodeCoverageWrapper('RegistroControllerClass');
		$destino->showForm();
		$this->call('GET', 'registro');
		$this->assertResponseOk();
	}
	
	//comprobamos que actúa correctamente alcuando falla el registro
	
	public function testpostRegistroFalla(){
		$destino = Enhance::getCodeCoverageWrapper('RegistroControllerClass');
		$destino->postRegistro();
		$validator->fails();
		$this->call('POST', '/registro');
		$this->assertSessionHasErrors();
	}

	//comprobamos que actua correctamente si el registro es correcto
	public function testPostRegistroCorrecto(){
		$usuario=new User;
		$usuario->user='Amanda123';
		$usuario->password='amanda123';
		$usuario->email='amanda@hotmail.com';
		$usuario->nombre='Amanda';
		$usuario->apellidos='Lopez Perez';
		$usuario->telefono='666999888';

		$usuario->save();
		$this->call('POST', '/login');
 
		$this->assertRedirectedToRoute('/login');
					
	}
	
}
?>	