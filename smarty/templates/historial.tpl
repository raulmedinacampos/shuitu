<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Mi historial - Clínica Shui T'u</title>
		
		<!-- Hojas de estilo -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
		
		<!-- Favicon -->
		<link rel="icon" href="favicon.ico" />
		
		<!-- Script de JS -->
		<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/historial.js"></script>
	</head>

	<body id="historial">
		<div class="centrado-vertical">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-11 col-xs-11 contenedor-login" id="cont">
						<div class="contenedor-logo">
							<a href="/"><img alt="Logo Shui T'u" src="images/logo.png" class="img-responsive" /></a>
						</div>
						
						<h1>Mi historial</h1>
						
						<div class="datos-login">
							<p class="text-center">Ingrese los datos solicitados para poder consultar su avance clínico.</p>
							
							<div class="mensaje-error">{if $error eq "wrong"}El usuario o la contraseña son incorrectos. Favor de verificarlos.{/if}</div>
							
							<div class="campos-login">
								<form id="formLogin" name="formLogin" action="historial-clinico/login" method="post">
									<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" />
									<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" />
									<select id="clinica" name="clinica" class="form-control">
										<option value="" selected="selected" disabled="disabled" class="text-hide">Clínica</option>
										<option value="3">Olmo</option>
										<option value="1">Cuautitlán Izcalli</option>
									</select>
									
									<div class="form-group contenedor-boton">
										<button type="submit" class="btn btn-primary" name="enviar" id="entrar">Entrar</button>
									</div>
								</form>
							</div> <!-- /.campos-login -->
						</div> <!-- /.datos-logueo -->
						
						<div class="datos-consultas">
							<div class="panel panel-default">
								<div class="panel-heading">Datos generales</div>
								<div class="panel-body">
									<div class="col-md-6">
										<label>Nombre</label>
										<input type="text" id="pNombre" disabled="disabled" class="form-control input-sm" value="DAVID MARTINEZ ALANIS" />
									</div>
									<div class="col-md-6">
										<label>Fecha de nacimiento</label>
										<input type="text" id="pNacimiento" disabled="disabled" class="form-control input-sm" value="25/03/1996" />
									</div>
									<div class="col-md-6">
										<label>Estado civil</label>
										<input type="text" id="pEstado" disabled="disabled" class="form-control input-sm" value="Casado" />
									</div>
									<div class="col-md-6">
										<label>Peso inicial</label>
										<div class="input-group">
											<input type="text" id="pPeso" disabled="disabled" class="form-control input-sm" value="102.60" />
											<div class="input-group-addon">kg</div>
										</div>
									</div>
								</div>
							</div>
							
							<table id="cont-consultas" class="table table-condensed table-striped">
								<tr>
									<th>Fecha</th>
									<th>Tratamiento</th>
									<th>Peso</th>
									<th>Oreja</th>
									<th>Dieta</th>
								</tr>
								<tr>
									<td>06/10/2014</td>
									<td>Dieta, Auriculoterapia y Cromoterapia</td>
									<td>94.70 kg</td>
									<td>izquierda</td>
									<td>M6</td>
								</tr>
								<tr>
									<td>06/10/2014</td>
									<td>Dieta, Auriculoterapia y Cromoterapia</td>
									<td>102.60 kg</td>
									<td>izquierda</td>
									<td>b2</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>