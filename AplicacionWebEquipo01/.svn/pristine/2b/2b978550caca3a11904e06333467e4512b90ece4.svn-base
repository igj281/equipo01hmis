<?php
class AuthControllerTest extends PHPUnit_Framework_TestCase {

//comprobamos que nos redireccina correctamente
	public function testShowLogin() {
		$destino = Enhance::getCodeCoverageWrapper('AuthControllerClass');
		$destino->showLogin();
		if (Auth::check()){
			$this->call('GET', '/logueado');
			$this->assertResponseOk();
		}
		$this->call('GET', 'login');
		$this->assertResponseOk();
	}
	
	//comprueba que entra correctamente a la zona administrador
	public function testPostLoginAdmin(){
		$destino = Enhance::getCodeCoverageWrapper('AuthControllerClass');
		$destino->postLogin();
		$user = 'administrador1';
			$this->call('GET', 'admin');
			$this->assertResponseOk();
	}

	//comprueba que un usuario que hay en la BD entra correctamente
	public function testPostLoginUser(){
		$destino = Enhance::getCodeCoverageWrapper('AuthControllerClass');
		$destino->postLogin();
		$user = 'cargarflu';
		$this->call('GET', '/logueado');
		$this->assertResponseOk();
	}

	//comprueba que si hay errores lo muestre
		
	public function testPostLoginError(){
		$destino = Enhance::getCodeCoverageWrapper('AuthControllerClass');
		$destino->postLogin();
		$user = 'Antonio12';
		$this->call('POST', 'login');
		$this->assertSessionHasErrors();
	}
	
	//este test comprueba que te redireccione al login al hacer un logout
	public function testLogOut(){
		$destino = Enhance::getCodeCoverageWrapper('AuthControllerClass');
		$destino->logOut();
		$this->assertRedirectedTo('/login');
	}
	
}
?>

