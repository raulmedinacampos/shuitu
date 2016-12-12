function Inicializar() {
	var cerrar = '<img alt="Cerrar" src="images/cerrar-icon.png" class="cerrar" />';
	$("#info-especialidad").append(cerrar);
	$("#info-especialidad .container").css("display", "none")
}

function NavegarMenu() {
	$("header .navbar-nav a").click(function(e) {
		e.preventDefault();
		
		var wPantalla = $(window).width();
		var seccion = $(this).attr("href");
		
		if ( seccion != "historial" ) {
			var pos = $("#"+seccion).position().top;
			
			/* Celulares */
			if ( wPantalla < 768 ) {
				pos -= 80;
			}
			/* Tablets y escritorio*/
			else {
				pos -= 110;
			}
				
			$(document).on('click','.navbar-collapse.in',function(e) {
			    if ( $(e.target).is('a') ) {
			        $(this).collapse('hide');
			    }
			});
			
			$(".nav li").removeClass("active");
			
			$("html, body").animate({scrollTop: pos}, 1500);
			
			$(this).parent().addClass("active");
		} else {
			window.location = "historial";
		}
	});
}

function CambiarMenu() {
	$("header").css("background-color", "rgba(51, 148, 206, 0)");
	$("header .navbar-default .navbar-collapse").css("border-color", "#01649F");
	
	$(".navbar-toggle").click(function() {
		if ( $(this).hasClass("collapsed") ) {
			$("header").css("background-color", "rgba(255, 255, 255, 0.75)");
		} else {
			$("header").css("background-color", "rgba(255, 255, 255, 0)");
		}
	});
	
	
	$(window).on("scroll resize", function() {
		var top = $(document).scrollTop();
		var h = $("#inicio").height() - $("header").height() - 50;
		var wPantalla = $(window).width();
		
		/* Celulares y tablets */
		if ( wPantalla <= 991 ) {
			if ( top <= h ) {
				$("header").css("background-color", "rgba(51, 148, 206, 0)");
				$("header .navbar-default .navbar-collapse").css("border-color", "#01649F");
				
				$(".navbar-toggle").click(function() {
					if ( $(this).hasClass("collapsed") ) {
						$("header").css("background-color", "rgba(255, 255, 255, 0.5)");
					} else {
						$("header").css("background-color", "rgba(255, 255, 255, 0)");
					}
				});
			} else {
				$("header").css("background-color", "rgba(51, 148, 206, 1)");
				$("header .navbar-default .navbar-collapse").css("border-color", "#FFFFFF");
				
				$(".navbar-toggle").click(function() {
					$("header").css("background-color", "rgba(51, 148, 206, 1)");
				});
			}
		}
		/* Escritorio */
		else {
			if ( top > h) {
				$("header").css("background-color", "rgba(51, 148, 206, 1)");
			} else {
				$("header").css("background-color", "rgba(51, 148, 206, 0)");
			}
		}
		
		if ( top > h) {
			$("header").css("top", "0");
			$("header .navbar-default .navbar-nav > li a").css("color", "#FFFFFF");
			$("header .navbar-default .navbar-nav > li").css("background-color", "transparent");
			$("header .navbar-default .navbar-nav > .active").css("background-color", "rgba(1, 100, 159, 1)");				
			$("header .navbar-default .navbar-toggle .icon-bar").css("background-color", "#FFFFFF");
			
			$("header .navbar-default .navbar-toggle").hover(
				function() {
					$(this).children(".icon-bar").css("background-color", "#FFFFFF");
					$(this).css("background-color", "#01649F");
				}, 
				function() {
					if ( !$(this).parent().hasClass("active") ) {
						$(this).children(".icon-bar").css("background-color", "#FFFFFF");
						$(this).css("background-color", "transparent");
					}
				}
			);
			
			$("header .navbar-default .navbar-nav > li a").hover(
				function() {
					$(this).parents("li").css("background-color", "rgba(1, 100, 159, 1)");
					$(this).css("color", "#FFFFFF");
				}, 
				function() {
					if ( !$(this).parent().hasClass("active") ) {
						$(this).parents("li").css("background-color", "rgba(1, 100, 159, 0)");
						$(this).css("color", "#FFFFFF");
					}
				}
			);
		} else {
			$("header").css("top", "20px");
			$("header .navbar-default .navbar-nav > li a").css("color", "#01649F");
			$("header .navbar-default .navbar-nav > .active").css("background-color", "rgba(1, 100, 159, 0)");
			$("header .navbar-default .navbar-nav > .active a").css("color", "#3394CE");
			$("header .navbar-default .navbar-toggle .icon-bar").css("background-color", "#01649F");
			
			$("header .navbar-default .navbar-toggle").hover(
				function() {
					$(this).children(".icon-bar").css("background-color", "#FFFFFF");
					$(this).css("background-color", "#01649F");
				}, 
				function() {
					if ( !$(this).parent().hasClass("active") ) {
						$(this).children(".icon-bar").css("background-color", "#01649F");
						$(this).css("background-color", "transparent");
					}
				}
			);
			
			$("header .navbar-default .navbar-nav > li a").hover(
				function() {
					$(this).parents("li").css("background-color", "rgba(1, 100, 159, 0)");
					$(this).css("color", "#3394CE");
				}, 
				function() {
					if ( !$(this).parent().hasClass("active") ) {
						$(this).parents("li").css("background-color", "rgba(1, 100, 159, 0)");
						$(this).css("color", "#01649F");
					}
				}
			);
		}
	});
}

function MostrarEspecialidad() {
	$("#ofrecemos .caja.sombra").click(function() {
		var elem = $(this);
		var servicio = elem.data("servicio");
		
		$("#info-especialidad .container").load("servicios/"+servicio, 
			function() {
				$("#info-especialidad").slideDown(
					function() {$("#info-especialidad .container").fadeIn();
				});
			}
		);
		
		
	});
}

function OcultarEspecialidad() {
	$("#info-especialidad .cerrar").click(function() {
		$("#info-especialidad").slideUp();
	});
}

function MostrarClinica() {
	$("#clinicas").change(function() {
		var clinica = $(this).val();
		var direccion = "";
		var horarios = "";
		var citas = "";
		
		if ( clinica == "olmo" ) {
			direccion = "Olmo No. 72 Fraccionamiento Valle de los Pinos<br />Tlalnepantla, Estado de México C. P. 54040";
			horarios = "Lunes y viernes de 9:00 a 14:00 y de 16:00 a 20:00<br />Martes, miércoles y jueves de 9:00 a 14:00 y de 15:00 a 20:00<br />Sábados de 8:00 a 17:00";
			citas = "1106-3696";
			
			$("#contacto .info-clinica > img:nth-of-type(2)").css("margin", "0 10px 75px -10px");
		}
		
		if ( clinica == "izcalli" ) {
			direccion = "Andador París No. 18 Col. Centro Urbano<br />Cuautitlán Izcalli, Estado de México C.P. 54700";
			horarios = "Lunes a viernes de 9:00 a 14:00 y de 15:00 a 20:00<br />Sábados de 9:00 a 14:00";
			citas = "5868-8181";
			
			$("#contacto .info-clinica > img:nth-of-type(2)").css("margin", "0 10px 40px -10px");
		}
		
		$(".info-clinica .direccion").fadeOut(function() {
			$(".direccion").html(direccion).promise().done(function() {
				$(this).fadeIn();
			});
		});
		
		$(".info-clinica .horarios").fadeOut(function() {
			$(".horarios").html(horarios).promise().done(function() {
				$(this).fadeIn();
			});
		});
		
		$(".info-clinica .citas").fadeOut(function() {
			$(".citas").html(citas).promise().done(function() {
				$(this).fadeIn();
			});
		});
	});
}

function LeerPrivacidad() {
	$("#nosotros p a").click(function(e) {
		e.preventDefault();
		
		$("#priv-mas").collapse();
		
		$(this).parent().fadeOut();
	});
}

function MostrarTerminos() {
	$("footer .terminos-de-uso").click(function(e) {
		e.preventDefault();
		
		$("#myModal").modal("show");
	});
}

$(function() {
	Inicializar();
	NavegarMenu();
	CambiarMenu();
	MostrarEspecialidad();
	OcultarEspecialidad();
	MostrarClinica();
	LeerPrivacidad();
	MostrarTerminos();
});