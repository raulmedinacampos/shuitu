<?php
/* Smarty version 3.1.30, created on 2016-11-17 02:34:56
  from "C:\xampp\htdocs\shuitu\web-2016\smarty\templates\consultas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582d6bb01c4a10_35572068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30e75e68f94735d482d7806252086025bbeb06e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shuitu\\web-2016\\smarty\\templates\\consultas.tpl',
      1 => 1479371694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582d6bb01c4a10_35572068 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\shuitu\\web-2016\\libs\\plugins\\modifier.date_format.php';
?>
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
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery-2.2.4.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery.validate.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/historial.js"><?php echo '</script'; ?>
>
	</head>

	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-3 col-xs-12">
						<img class="logo" alt="Shui T'u" src="../images/logo.png" />
					</div>
					<div class="col-md-10 col-sm-9 col-xs-12 text-right">
						<span class="nombre"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['paciente']->value->NB_PACIENTE;?>
 <?php echo $_smarty_tpl->tpl_vars['paciente']->value->NB_AP_PAT_PACIENTE;?>
 <?php echo $_smarty_tpl->tpl_vars['paciente']->value->NB_AP_MAT_PACIENTE;?>
</span>
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
						<p class="datos"><?php echo $_smarty_tpl->tpl_vars['paciente']->value->NB_PACIENTE;?>
 <?php echo $_smarty_tpl->tpl_vars['paciente']->value->NB_AP_PAT_PACIENTE;?>
 <?php echo $_smarty_tpl->tpl_vars['paciente']->value->NB_AP_MAT_PACIENTE;?>
</p>
					</div>
					<div class="col-md-3 col-sm-3">
						<p>Fecha de nacimiento</p>
						<p class="datos"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['paciente']->value->FH_NACIMIENTO,"%d/%m/%Y");?>
</p>
					</div>
					<div class="col-md-3 col-sm-3">
						<p>Estado civil</p>
						<p class="datos"><?php echo $_smarty_tpl->tpl_vars['paciente']->value->NB_EDO_CIVIL;?>
</p>
					</div>
					<div class="col-md-3 col-sm-3">
						<p>Peso inicial</p>
						<p class="datos"><?php echo $_smarty_tpl->tpl_vars['paciente']->value->CT_PESO_INICIAL;?>
 kg</p>
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
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'consulta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['consulta']->value) {
?>
							<tr>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['consulta']->value->fh_consulta,"%d/%m/%Y");?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value->nb_tratamiento;?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value->ct_peso_actual;?>
 kg</td>
								<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value->nb_oreja;?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['consulta']->value->cd_dieta_asignada;?>
</td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
</html><?php }
}
