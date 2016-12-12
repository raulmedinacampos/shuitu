<?php
/* Smarty version 3.1.30, created on 2016-11-28 19:00:13
  from "C:\xampp\htdocs\shuitu\web-2016\smarty\templates\contacto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583c70ad9fe009_72993178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '869dcf8f637af7417ca3ca7224a706df6d842cb1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shuitu\\web-2016\\smarty\\templates\\contacto.tpl',
      1 => 1480356011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583c70ad9fe009_72993178 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="contacto">
	<div class="container">
		<div class="col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">
			<h1>Contáctanos</h1>
			<p>Visítanos en cualquiera de nuestras sucursales.</p>
			
			<div class="row">
				<div class="row">
					<div class="col-md-7">
						<div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2">
							<select id="clinicas" class="form-control">
								<option value="olmo">Olmo</option>
								<option value="izcalli">Izcalli</option>
							</select>
						</div>			
						
						<div class="col-md-12 col-sm-12 col-xs-10 info-clinica">
							<img alt="" src="images/direccion-icon.png" />
							<h4>Dirección</h4>
							<p class="direccion">Olmo No. 72 Fraccionamiento Valle de los Pinos<br />Tlalnepantla, Estado de México C. P. 54040</p>
							<img alt="" src="images/horario-icon.png" />
							<h4>Horarios</h4>
							<p class="horarios">Lunes y viernes de 9:00 a 14:00 y de 16:00 a 20:00<br />
							Martes, miércoles y jueves de 9:00 a 14:00 y de 15:00 a 20:00<br />
							Sábados de 8:00 a 17:00</p>
							<img alt="" src="images/phone-icon.png" />
							<h4>Citas</h4>
							<p class="citas">1106-3696</p>
						</div>
					</div>
					<div class="col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2 hidden-xs mapa">
						<div id="mapa-ubicacion" class="col-md-12"></div>
						
						
						<?php echo '<script'; ?>
 type="text/javascript">
						var map1;
						
						function initMap() {
							var myLatLng1 = {lat: 19.535143, lng: -99.220151};
							var myLatLng2 = {lat: 19.6550945, lng: -99.2083766};

							map = new google.maps.Map(document.getElementById('mapa-ubicacion'), {
								center: myLatLng1,
								scrollwheel: true,
								zoom: 16
							});

							var image = 'images/maps-icon.png';
							
					        var marker1 = new google.maps.Marker({
						        map: map,
						        position: myLatLng1,
						        title: 'Clínica Olmo',
						        icon: image
					        });

					        var marker2 = new google.maps.Marker({
						        map: map,
						        position: myLatLng2,
						        title: 'Clínica Izcalli',
						        icon: image
					        });

					        $("#clinicas").change(function() {
					        	if ( $("#clinicas option:selected").val() == "olmo" ) {
					        		map.setCenter(myLatLng1);
					    		}
					    		
					    		if ( $("#clinicas option:selected").val() == "izcalli" ) {
					    			map.setCenter(myLatLng2);
					    		}
					        });
						}
						<?php echo '</script'; ?>
>
						
						
						<?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVJw2Tk0pM66Lr9u7duWRpvwKfUruR_Aw&callback=initMap" async defer><?php echo '</script'; ?>
>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }
}
