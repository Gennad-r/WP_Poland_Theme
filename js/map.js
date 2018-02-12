function initMap() {
	var blueStyle = [
	{ "stylers": [ { "hue": "#052839" }, { "saturation": -20 } ] },
	{ "elementType": "labels.text.fill", "stylers": [ { "color": "#052839" } ] },
	{ "featureType": "road", "elementType": "geometry.fill", "stylers": [ { "color": "#ffffff" } ] },
	{ "featureType": "road", "elementType": "geometry.stroke", "stylers": [ { "color": "#052839" } ] },
	{ "featureType": "water", "stylers": [ { "color": "#052839" }, { "lightness": 40 }, { "saturation": -60 } ] },
	{ "featureType": "water", "elementType": "labels.text.fill", "stylers": [ { "color": "#052839" } ] },
	{ "featureType": "poi", "elementType": "geometry", "stylers": [ { "visibility": "off" } ] },
	{ "featureType": "poi.park", "elementType": "geometry", "stylers": [ { "color": "#bfc9cc" }, { "visibility": "on" } ] },
	{ "featureType": "poi.business", "elementType": "geometry", "stylers": [ { "hue": "#052839" }, { "visibility": "on" } ] },
	{ "featureType": "poi.school", "elementType": "geometry", "stylers": [ { "hue": "#052839" }, { "visibility": "on" } ] },
	{ "featureType": "poi.medical", "elementType": "geometry", "stylers": [ { "hue": "#052839" }, { "visibility": "on" } ] },
	{ "featureType": "poi.government", "elementType": "geometry", "stylers": [ { "hue": "#052839" }, { "visibility": "on" } ] },
	{ "featureType": "landscape.natural", "elementType": "geometry", "stylers": [ { "hue": "#052839" } ] },
	{ "elementType": "geometry.stroke", "stylers": [{ "color": "#052839" },	{ "lightness": 70 }]},
	];
	var rabotaInfo = {lat: 49.9871, lng: 36.2544};
	var map = new google.maps.Map(document.getElementById('map-holder'), {
		zoom: 18,
		center: rabotaInfo,
		styles: blueStyle
	});
	var marker = new google.maps.Marker({
		position: rabotaInfo,
		map: map,
		title: "Мы тут!",
		icon: "logo-gear-along.png"
	});
}
