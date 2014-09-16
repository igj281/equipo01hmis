<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>

        {{ HTML::style('assets/bootstrap/css/bootstrap.min.css'); }}
    </head>
    <body>
        <div class="container">
           <table class="table table-striped">
            <tr>
            <td> ID</td>
            <td> Usuario</td>
            <td> Nombre</td>
            <td> Apellidos</td>
            <td> Email</td>
            <td> Telefono</td>
  
            @foreach ($usuarios as $usuario)

              
                <tr>
             <td>  {{ $usuario->id }} </td>
             <td>  {{ $usuario->user }} </td>
             <td>  {{ $usuario->nombre }} </td>
             <td>  {{ $usuario->apellidos }} </td>
             <td>  {{ $usuario->email }} </td>
             <td>  {{ $usuario->telefono }} </td>
              <td style="text-align: center;"> 
               {{ Form::model($usuario, array('url' => array ('usuarios', $usuario->id), 
               'method' => 'DELETE', 'role' => 'form')) }}
               {{ Form::submit('Eliminar', array('class' => 'btn btn-danger')) }}
               {{ Form::close() }}
            </td>
                
            @endforeach
                </table>
        </div>
    </body>
</html>