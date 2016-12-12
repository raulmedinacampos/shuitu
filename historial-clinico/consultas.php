<?php
session_start();
require('../libs/Smarty.class.php');
require('conexion.php');

$cdpaciente = $_SESSION['codpaciente'];

$query_paciente = "SELECT a.NB_PACIENTE,a.NB_AP_PAT_PACIENTE,a.NB_AP_MAT_PACIENTE,a.FH_NACIMIENTO,a.CD_EDO_CIVIL,
b.CT_PESO_INICIAL,c.NB_EDO_CIVIL
FROM tst006_paciente a
LEFT OUTER JOIN tst016_expclinico b ON a.cd_paciente=b.cd_paciente
JOIN tst001_edo_civil c ON a.cd_edo_civil=c.cd_edo_civil
WHERE a.cd_paciente= '$cdpaciente'";
$result_paciente = mysqli_query($conexion, $query_paciente) or die(mysql_error());
$paciente = mysqli_fetch_object($result_paciente);

$query = "SELECT a.cd_consulta,a.fh_consulta,a.nb_tratamiento,a.ct_peso_actual,a.cd_dieta_asignada,a.nb_oreja,a.nb_observaciones
FROM tst012_consulta a
LEFT OUTER JOIN tst016_expclinico b ON b.cd_expclinico = a.cd_expclinico
WHERE b.cd_paciente= '$cdpaciente'
ORDER BY fh_consulta ASC";
$result = mysqli_query($conexion, $query) or die(mysql_error());
$datos = array();
while ( $row = mysqli_fetch_object($result) ) {
	$datos[] = $row;
}

$smarty = new Smarty();

$smarty->setTemplateDir('../smarty/templates');
$smarty->setCompileDir('../smarty/templates_c');
$smarty->setCacheDir('../smarty/cache');
$smarty->setConfigDir('../smarty/configs');

$smarty->assign("paciente", $paciente);
$smarty->assign("datos", $datos);
$smarty->display('consultas.tpl');

mysqli_free_result($result_paciente);
mysqli_free_result($result);
?>