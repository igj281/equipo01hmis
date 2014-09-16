<?php

class BorraController extends BaseController {

	public function __construct()
    {
        $this->beforeFilter('auth');
    }


	public function index() {


	$evento = Evento::paginate(10);
       
         return View::make('eventosadmin')->with('eventosadmin', $evento);
        
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
        $evento = User::find($id);
        $evento->delete();
        return Redirect::to('eventosadmin')->with('notice', 'El usuario ha sido eliminado correctamente.');
    }  


}
?>