<?php
session_start ();
//include_once ("../S1st3ma/includes/conexion.php");
//include_once ("../S1st3ma/includes/fechas.php");
include_once ("conexion.php");

$usuario = (isset ( $_POST ['usuario'] )) ? $_POST ['usuario'] : "";
$password = (isset ( $_POST ['password'] )) ? $_POST ['password'] : "";
$clinica = (isset ( $_POST ['clinica'] )) ? $_POST ['clinica'] : "";

$fecha = date ( 'Y-m-d' );
$hora = date ( 'H:i:s' );

// Fin de Agregado KC

$usuario = addslashes ( $usuario );
// $password = base64_encode(md5(addslashes($password)));
$password = addslashes ( $password );

$usr_query = "SELECT a.CD_EXPCLINICO,a.NU_EXPEDIENTE,a.CD_PACIENTE,b.CD_IXPACIENTE,
b.NB_PACIENTE,b.NB_AP_PAT_PACIENTE,b.NB_AP_MAT_PACIENTE
FROM tst016_expclinico a
LEFT OUTER JOIN tst006_paciente b ON a.CD_PACIENTE = b.CD_PACIENTE
WHERE a.NU_EXPEDIENTE = '$usuario' AND
a.CD_CLINICA = '$clinica' AND
b.CD_IXPACIENTE = '$password' AND
b.CD_PACIENTE_ACTIVO = '1'";
$result_usr = mysqli_query ( $conexion, $usr_query ) or die ( mysql_error () );
$usr = mysqli_fetch_object ( $result_usr );
if (mysqli_num_rows ( $result_usr ) > 0) {
	if ($usr->CD_IXPACIENTE === $password) {
		$_SESSION ['expclinico'] = $usr->CD_EXPCLINICO;
		$_SESSION ['codpaciente'] = $usr->CD_PACIENTE;
		$_SESSION ['nompaciente'] = $usr->NB_PACIENTE . ' ' . $usr->NB_AP_PAT_PACIENTE . ' ' . $usr->NB_AP_MAT_PACIENTE;
		// $query_asist = "INSERT INTO tst017_asistencia(cd_usuario, fh_asistencia, hr_inicio) VALUES('$cd_usuario', '$fecha', '$hora')";
		// if(mysql_query($query_asist, $conexion)) {
		header ( 'Location: consultas' );
	} else {
		header ( 'Location: ../historial?access=wrong' );
	}
} else {
	header ( 'Location: ../historial?access=wrong' );
}

mysqli_free_result ( $result_usr );
?>