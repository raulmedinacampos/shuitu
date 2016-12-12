<?php
/* Smarty version 3.1.30, created on 2016-11-15 08:59:56
  from "C:\xampp\htdocs\shuitu\web-2016\smarty\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582ac07c037465_82213940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e351aff5ff0976e58cc29fbe908018e8b85298a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shuitu\\web-2016\\smarty\\templates\\header.tpl',
      1 => 1479196793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582ac07c037465_82213940 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Clínica Shui T'u</title>
		
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
 type="text/javascript" src="js/acciones.js"><?php echo '</script'; ?>
>
	</head>

	<body>
		<header>
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
					
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="/shuitu/web-2016/"><img alt="Shui T'u" src="images/logo.png" /></a>
						</div>
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="inicio">Inicio <span class="sr-only">(current)</span></a></li>
								<li><a href="nosotros">Nosotros</a></li>
								<li><a href="ofrecemos">Ofrecemos</a></li>
								<li><a href="contacto">Contacto</a></li>
								<li><div><a href="historial">Mi historial</a></div></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</header>
<?php }
}
