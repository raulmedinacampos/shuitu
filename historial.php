<?php
session_start();

if ( isset($_SESSION['codpaciente']) ) {
	header("Location: historial-clinico/consultas");
}

require('libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

$error = (isset($_GET['access'])) ? $_GET['access'] : "";
$smarty->assign("error", $error);
$smarty->display('historial.tpl');
?>