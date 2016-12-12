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
						
						{literal}
						<script type="text/javascript">
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
						</script>
						{/literal}
						
						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVJw2Tk0pM66Lr9u7duWRpvwKfUruR_Aw&callback=initMap" async defer></script>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
