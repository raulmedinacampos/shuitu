<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Clínica Shui T'u - Historial clínico</title>
		
		<!-- Hojas de estilo -->
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="../css/historial.css" />
		
		<!-- Favicon -->
		<link rel="icon" href="../favicon.ico" />
		
		<!-- Script de JS -->
		<script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="../js/historial.js"></script>
	</head>

	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-3 col-xs-12">
						<img class="logo" alt="Shui T'u" src="../images/logo.png" />
					</div>
					<div class="col-md-10 col-sm-9 col-xs-12 text-right">
						<span class="nombre"><span class="glyphicon glyphicon-user"></span> {$paciente->NB_PACIENTE} {$paciente->NB_AP_PAT_PACIENTE} {$paciente->NB_AP_MAT_PACIENTE}</span>
						<a href="salir" class="salir"><span>Salir</span></a>
					</div>
				</div>
			</div>
		</header>
		
		<section id="consultas">
			<div class="container">
				<h1>Mi historial</h1>
				<p class="titulo">Datos generales</p>
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<p>Nombre completo</p>
						<p class="datos">{$paciente->NB_PACIENTE} {$paciente->NB_AP_PAT_PACIENTE} {$paciente->NB_AP_MAT_PACIENTE}</p>
					</div>
					<div class="col-md-3 col-sm-3">
						<p>Fecha de nacimiento</p>
						<p class="datos">{$paciente->FH_NACIMIENTO|date_format:"%d/%m/%Y"}</p>
					</div>
					<div class="col-md-3 col-sm-3">
						<p>Estado civil</p>
						<p class="datos">{$paciente->NB_EDO_CIVIL}</p>
					</div>
					<div class="col-md-3 col-sm-3">
						<p>Peso inicial</p>
						<p class="datos">{$paciente->CT_PESO_INICIAL} kg</p>
					</div>
				</div>
				
				<p class="titulo">Historial de visitas</p>
				<div class="table-responsive">
					<table class="table table-condensed table-striped">
						<thead>
							<tr>
								<th>Fecha</th>
								<th>Tratamiento</th>
								<th>Peso</th>
								<th>Oreja</th>
								<th>Dieta</th>
							</tr>
						</thead>
						<tbody>
						{foreach from=$datos item=consulta}
							<tr>
								<td>{$consulta->fh_consulta|date_format:"%d/%m/%Y"}</td>
								<td>{$consulta->nb_tratamiento}</td>
								<td>{$consulta->ct_peso_actual} kg</td>
								<td>{$consulta->nb_oreja}</td>
								<td>{$consulta->cd_dieta_asignada}</td>
							</tr>
						{/foreach}
						</tbody>
					</table>
				</div>
			</div>
		</section>
		
		<!-- Terminos de uso -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Términos de uso</h4>
					</div>					
					<div class="modal-body">
					...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div> <!-- /.modal-content -->
			</div> <!-- /.modal-dialog -->
		</div> <!-- /.modal -->
		<footer>
			<div class="container">
				<div class="col-md-6 col-sm-8">
					<p>Shui T'u. Derechos Reservados &copy; 2010.</p>
				</div>
				<div class="col-md-6 text-right">
					<p><a href="#" class="terminos-de-uso">Términos de uso</a></p>
				</div>
			</div>
		</footer>
	</body>
</html>