<?php
	function fechaNormal($fecha) {
		$dato = explode("-", $fecha);
		$dato = array_reverse($dato);
		$n_fecha = implode("/", $dato);
		return $n_fecha;
	}
	
	function fechaMySQL($fecha) {
		$dato = explode("/", $fecha);
		$dato = array_reverse($dato);
		$n_fecha = implode("-", $dato);
		return $n_fecha;
	}
	
	function calcEdad($fecha) {
		$hoy[0] = date('j');  // dia
		$hoy[1] = date('n');  // mes
		$hoy[2] = date('Y');  // año
		
		$nacimiento = explode("-", $fecha);
		$nacimiento = array_reverse($nacimiento);
		
		if(($nacimiento[1] == $hoy[1]) && ($nacimiento[0] > $hoy[0])) {
			$hoy[2]--;
		}
		
		if($nacimiento[1] > $hoy[1]) {
			$hoy[2]--;
		}
		
		$edad = $hoy[2] - $nacimiento[2];
		return $edad;
	}
?>