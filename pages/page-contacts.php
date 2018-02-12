
<?php 
/*
Template Name: Контакты
*/



get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1><?php single_post_title(); ?></h1>
		</div>
	</div>
	<div class="row contacts-page">
		<div class="col-md-3">
			<div class="footer-address address-holder">
				<a href="https://goo.gl/maps/1H3CRPX5hny" target="_blank"><p>город Харьков,<br>ул. Богдана Хмельницкого, 18</p></a>
			</div>
			<div class="footer-working-time address-holder">
				<p>Пн-Пт: 10:00 — 19:00</p>
				<p>Сб: 11:00 – 14:00</p>
			</div>
			<div class="footer-phones address-holder">
				<p><a href="tel:+38097xxxxxxx">+38 (‎097) хх-хх-ххх</a></p>
				<p><a href="tel:+38097xxxxxxx">+38 (‎097) хх-хх-ххх</a></p>
				<p><a href="tel:+38097xxxxxxx">+38 (‎097) хх-хх-ххх</a></p>
			</div>
			<div class="footer-email address-holder">
				<p><a href="mailto:rabota.info.eu@gmail.com">rabota.info.eu@gmail.com</a></p>
			</div>
			<div class="social address-holder">
				<a href="#"><i class="ic ic-fb"></i></a>
				<a href="#"><i class="ic ic-inst"></i></a>
				<a href="viber://add?number=%2B380681762165"><i class="ic ic-viber"></i></a>
			</div>
		</div>
		<div class="col-md-9">
			<div class="container-fluid" id="map-holder"></div>
		</div>
	</div>
</div>
<script>
	function initMap(){var e=[{stylers:[{hue:"#052839"},{saturation:-20}]},{elementType:"labels.text.fill",stylers:[{color:"#052839"}]},{featureType:"road",elementType:"geometry.fill",stylers:[{color:"#ffffff"}]},{featureType:"road",elementType:"geometry.stroke",stylers:[{color:"#052839"}]},{featureType:"water",stylers:[{color:"#052839"},{lightness:40},{saturation:-60}]},{featureType:"water",elementType:"labels.text.fill",stylers:[{color:"#052839"}]},{featureType:"poi",elementType:"geometry",stylers:[{visibility:"off"}]},{featureType:"poi.park",elementType:"geometry",stylers:[{color:"#bfc9cc"},{visibility:"on"}]},{featureType:"poi.business",elementType:"geometry",stylers:[{hue:"#052839"},{visibility:"on"}]},{featureType:"poi.school",elementType:"geometry",stylers:[{hue:"#052839"},{visibility:"on"}]},{featureType:"poi.medical",elementType:"geometry",stylers:[{hue:"#052839"},{visibility:"on"}]},{featureType:"poi.government",elementType:"geometry",stylers:[{hue:"#052839"},{visibility:"on"}]},{featureType:"landscape.natural",elementType:"geometry",stylers:[{hue:"#052839"}]},{elementType:"geometry.stroke",stylers:[{color:"#052839"},{lightness:70}]}],t={lat:49.9871,lng:36.2544},l=new google.maps.Map(document.getElementById("map-holder"),{zoom:18,center:t,styles:e});new google.maps.Marker({position:t,map:l,title:"Мы тут!",icon:"<?php echo home_url(); ?>/logo-gear-along.png"})}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP_DKy3mnOcdMcgsEOi9cYaXeYX25YRtQ&callback=initMap">
</script>

<?php get_footer(); ?>