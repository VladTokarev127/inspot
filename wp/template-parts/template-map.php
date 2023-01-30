<!-- start section map -->
<section class="map">
	<div class="marquee map__marquee map__marquee_1">расположение на карте × расположение на карте × расположение на карте × расположение на карте × расположение на карте × расположение на карте × расположение на карте × </div>
	<div class="marquee map__marquee map__marquee_2">расположение на карте × расположение на карте × расположение на карте × расположение на карте × расположение на карте × расположение на карте × расположение на карте × </div>
	<div class="container">
		<div class="map__circle map__circle_1"></div>
		<div class="map__circle map__circle_2"></div>

		<div class="map__container" id="map"></div>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.0.3/dist/MarkerCluster.css" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.0.3/dist/MarkerCluster.Default.css" />
		<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
		<script src="https://unpkg.com/leaflet.markercluster@1.0.3/dist/leaflet.markercluster.js"></script>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				var tiles = L.tileLayer('//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
					maxZoom: 18,
					attribution: '&copy; <a href="//openstreetmap.org/copyright">OpenStreetMap</a> contributors, Points &copy 2012 LINZ'
				});
				var map = L.map('map', {
					layers: [tiles]
				}).setView([51.5, -0.09], 4);
				var myIcon = L.icon({
					iconUrl: '/wp-content/themes/inspot/img/map-icon.svg',
					iconSize: [65, 43],
					iconAnchor: [0, 0],
					popupAnchor: [32, 200],
				});
				// var marker = L.marker([51.5, -0.09], {
				// 	icon: myIcon
				// }).addTo(map);
				var mcg = L.markerClusterGroup({
					chunkedLoading: true,
					spiderfyOnMaxZoom: false
				});
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
				for (var i = 0; i < addressPoints.length; i++) {
					var a = addressPoints[i];
					var title = a[2];
					var marker = L.marker(new L.LatLng(a[0], a[1]), {
						icon: myIcon
					}, {
						title: title
					});
					marker.bindPopup(title);
					mcg.addLayer(marker);
				}
				map.addLayer(mcg);
				$.getJSON('/wp-content/themes/inspot/custom.geo.json', function(geojson) { // load file
					L.geoJson(geojson, { // initialize layer with data
						style: function(feature) { // Style option
							return {
								'weight': 2,
								'color': '#262626',
								fill: true,
								'fillColor': '#090909',
								'fillOpacity': 1,
							}
						}
					}).addTo(map); // Add layer to map
				});
			});
		</script>

	</div>
</section>
<!-- end section map -->