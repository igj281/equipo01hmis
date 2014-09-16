<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Zona de administrador </title>
	{{ HTML::style('assets/bootstrap/css/bootstrap.min.css'); }}
</head>
<body>
	<div class="container">
		<div class="col-md-8 col-md-offset-2 text-center">
			<h1> Zona de administrador </h1>

		</div>
		<br><br><br>
		<a href="./logout" class="btn btn-danger "> Cerrar sesion</a>
		<div class="col-md-4 col-md-offset-2">
			<img src="http://microteknologias.files.wordpress.com/2010/01/userlinux-windows.png" alt="eventos" class="img-responsive imageClip">
			<div class="row"> 
				<div class="col-md-6 col-md-offset-2" >
					<br>	
					<a href="./usuarios" class="btn btn-info btn-lg"> Usuarios</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		<img src="http://www.murhotels.com/images/mur/plantillas/eventos.jpg" alt="eventos" class="img-responsive imageClip">
		<div class="row"> 
				<div class="col-md-6 col-md-offset-2" >
				<br>
				<a href="./eventosadmin" class="btn btn-info btn-lg"> Eventos</a>
				<br><br><br>
				</div>
		</div>		
	</div>	
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<img src="http://www.colegiocirculo.com/imagenes/calendario.png" alt="eventos2" class="img.center imageClip">
				<br><br><br>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<a href="./eventos" class="btn btn-success btn-lg"> Insertar Evento</a>
				</div>
			</div>
			<br><br><br><br><br><br><br><br>
		</div>
	</div>




</body>
</html>