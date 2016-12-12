function Inicializar() {
	var clinica = $("#clinica option:selected").text();

	if ( clinica == "Clínica" ) {
		$("#clinica").css("color", "rgba(51,148,206,0.75)");
	} else {
		$("#clinica").css("color", "#555555");
	}
}

function Validar() {
	$("#formLogin").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			usuario: {
				required: true
			},
			password: {
				required: true
			},
			clinica: {
				required: true
			}
		},
		showErrors: function(errorMap, errorList) {
	        $(".mensaje-error").html("Todos los campos son obligatorios, favor de verificarlos.");
	    }
	});
}

function MostrarTerminos() {
	$("footer .terminos-de-uso").click(function(e) {
		e.preventDefault();
		
		$("#myModal").modal("show");
	});
}

$(function() {
	$("#usuario").val("");
	$("#clinica").val("");
	
	Inicializar();
	Validar();
	MostrarTerminos();
	
	$("#clinica").change(function() {
		Inicializar();
	})
});