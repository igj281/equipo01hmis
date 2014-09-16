<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Eventos</title>

        {{ HTML::style('assets/bootstrap/css/bootstrap.min.css'); }}
    </head>
    <body>
        <div class="container">
            @if($errors->has())
              <div class="col-md-6 col-md-offset-3 text-center" > <div class="alert alert-danger">Los datos son incorrectos</div></div>
              else
              {{ $message }}
            @endif
            @if($errors->has())
            {{ Form::open(array('url' => '/eventos', 'class'=>'col-md-6 col-md-offset-3')) }}
                <div class="form-group">
                    <h1> Inserción de eventos </h1>
                <br>
                {{ Form::label('nombre', 'Nombre del evento') }}
                {{ Form::text('nombre', null, array('class'=>'form-control', 'placeholder="Nombre del evento"')); }}

                {{ Form::label('fecha', 'fecha') }}
                {{ Form::input('date', 'fecha', null, ['class' => 'form-control', 'placeholder' => 'Date']); }}

                {{ Form::label('hora', 'hora') }}
                {{ Form::select('hora', array('09:00' => '09:00', '10:00' => '10:00', '11:00' => '11:00'

                , '12:00' => '12:00', '13:00' => '13:00', '16:00' => '16:00', '17:00' => '17:00', '18:00' => '18:00'
                , '19:00' => '19:00', '20:00' => '20:00', '21:00' => '21:00', '22:00' => '22:00', '23:00' => '23:00'
                ), null, array('class'=>'form-control','style'=>'' )) }}

                {{ Form::label('tipo', 'Tipo') }}
                {{ Form::select('tipo', array('C' => 'Cine', 'B' => 'Baile', 'Co' => 'Comedia'), null, array('class'=>'form-control','style'=>'' )) }}


                {{ Form::label('aforo', 'Aforo') }}
                {{ Form::text('aforo', null, array('class'=>'form-control', 'placeholder="Aforo del evento"')); }}

                {{ Form::label('descripcion', 'Descripcion') }}
                {{ Form::textarea('descripcion', null, array('class'=>'form-control', 'placeholder="Descripcion del evento"')); }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Guardar evento', array('class'=>'btn btn-success')) }}
                     <a href="./admin" class="btn btn-danger"> Cancelar </a>
                </div>
            {{ Form::close() }}
        </div>
    </body>
</html>