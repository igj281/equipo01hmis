<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
 	public function allUser()
 	{

         $usuarios = User::all();
       
         return View::make('usuarios')->with('usuarios', $usuarios);
    }

    public function allEvents()
    {
    	 $eventos=Evento::all();
    	 return View::make('eventosadmin')->with('eventos', $eventos);
    }
	public function showWelcome()
	{
		return View::make('hello');
	}

	public function postUser($id){
		
	$user= User::find( $id );
	$user->delete();
	return Redirect::to('usuarios')->with('notice', 'El usuario ha sido eliminado correctamente.');
	
}
	
 public function __construct()
    {
        $this->beforeFilter('auth');
    }



public function index() {


	$usuarios = User::paginate(10);
       
         return View::make('usuarios')->with('usuarios', $usuarios);
        
    }
    public function show($id) {
        
    }
    public function create() {
        
    }
    public function store() {
        
    }
    public function edit($id) {
       
    }
    public function update($id) {
        
    }
    public function destroy($id) {
        $usuarios = User::find($id);
        $usuarios->delete();
        return Redirect::to('usuarios')->with('notice', 'El usuario ha sido eliminado correctamente.');
    }
    

}