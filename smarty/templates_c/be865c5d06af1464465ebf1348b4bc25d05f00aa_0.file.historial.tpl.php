<?php
/* Smarty version 3.1.30, created on 2016-11-17 05:34:59
  from "C:\xampp\htdocs\shuitu\web-2016\smarty\templates\historial.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582d3373681bd2_16728723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be865c5d06af1464465ebf1348b4bc25d05f00aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shuitu\\web-2016\\smarty\\templates\\historial.tpl',
      1 => 1479357295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582d3373681bd2_16728723 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
		<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-2.2.4.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.validate.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/historial.js"><?php echo '</script'; ?>
>
	</head>

	<body id="historial">
		<div class="centrado-vertical">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-11 col-xs-11 contenedor-login" id="cont">
						<div class="contenedor-logo">
							<a href="/shuitu/web-2016/"><img alt="Logo Shui T'u" src="images/logo.png" class="img-responsive" /></a>
						</div>
						
						<h1>Mi historial</h1>
						
						<div class="datos-login">
							<p class="text-center">Ingrese los datos solicitados para poder consultar su avance clínico.</p>
							
							<div class="mensaje-error"><?php if ($_smarty_tpl->tpl_vars['error']->value == "wrong") {?>El usuario o la contraseña son incorrectos. Favor de verificarlos.<?php }?></div>
							
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
</html><?php }
}
