<?php
require('libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

$smarty->display('header.tpl');
$smarty->display('inicio.tpl');
$smarty->display('nosotros.tpl');
$smarty->display('ofrecemos.tpl');
$smarty->display('contacto.tpl');
$smarty->display('footer.tpl');
?>