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
            <td> Nombre</td>
            <td> Fecha</td>
            <td> Hora</td>
            <td> Tipo</td>
            <td> Aforo</td>
  
            @foreach ($eventos as $evento)

              
                <tr>
             <td>  {{ $evento->id }} </td>
             <td>  {{ $evento->Nombre }} </td>
             <td>  {{ $evento->fecha }} </td>
             <td>  {{ $evento->hora }} </td>
             <td>  {{ $evento->tipo }} </td>
             <td>  {{ $evento->aforo }} </td>
            
            @endforeach
                </table>
        </div>
    </body>
</html>