<!-- start section map -->
<section class="map">
	<div class="marquee map__marquee map__marquee_1"><img src="/wp-content/themes/inspot/img/marquee.svg" alt=""></div>
	<div class="marquee map__marquee map__marquee_2"><img src="/wp-content/themes/inspot/img/marquee.svg" alt=""></div>
	<div class="container">
		<div class="map__circle map__circle_1"></div>
		<div class="map__circle map__circle_2"></div>

		<div class="map__container-mask">
			<div class="map__container" id="map"></div>
		</div>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.0.3/dist/MarkerCluster.css" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.0.3/dist/MarkerCluster.Default.css" />
		<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
		<script src="https://unpkg.com/leaflet.markercluster@1.0.3/dist/leaflet.markercluster.js"></script>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				let mobile = window.innerWidth < 768 ? true : false;
				let zoom = mobile ? 4 : 2;

				var greenIcon = L.icon({
					iconUrl: '/wp-content/themes/inspot/img/map-icon.svg',
					iconSize: [65, 43],
					iconAnchor: [0, 0],
					popupAnchor: [32, 200],
				});

				var greece = L.map('map', {
						zoomControl: false
				}).setView([51.5, -0.09], zoom);

				L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
						attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
						subdomains: 'abcd',
						minZoom: 4,
						maxZoom: 18,
				}).addTo(greece);

				let addressPoints = [
					<?php
					$args = array(
						'post_type' => 'clubs',
						'post_status' => 'publish',
						'order' => 'ASC',
						'posts_per_page' => '-1',
					);
					$clubs = new WP_Query( $args );
					?>
					<?php if($clubs->have_posts()):
					while($clubs->have_posts()): $clubs->the_post(); ?>
						[<?php the_field('coords'); ?>, '<?php the_field('address_map'); ?> <a href="<?php the_permalink(); ?>">Подробнее</a>'],
					<?php endwhile; ?>
					<?php else: ?>
					<?php endif; wp_reset_query(); ?>
				]

				var mcg = L.markerClusterGroup({
					chunkedLoading: true,
					showCoverageOnHover: false,
					spiderfyOnMaxZoom: false
				});

				for (var i = 0; i < addressPoints.length; i++) {
					var a = addressPoints[i];
					var title = a[2];
					var marker = L.marker(new L.LatLng(a[0], a[1]), {
						icon: greenIcon
					}, {
						title: title
					});
					marker.bindPopup(title);
					mcg.addLayer(marker);
				}

				greece.addLayer(mcg);

				$.getJSON('/wp-content/themes/inspot/custom.geo.json', function (geojson) { // load file
					L.geoJson(geojson, { // initialize layer with data
						style: function (feature) { // Style option
							return {
								'weight': 2,
								'color': '#262626',
								fill: true,
								'fillColor': '#090909',
								'fillOpacity': .8,
							}
						}
					}).addTo(greece); // Add layer to map
				});
			});
		</script>

	</div>
</section>
<!-- end section map -->