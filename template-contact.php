<?php /* Template Name: Contact Template */
get_header();

$contact_first_screen_title = get_field('contact_first_screen_title');
$contact_first_screen_bg = get_field('contact_first_screen_bg');
$contact_form_title = get_field('contact_form_title');
$contact_form_left_text = get_field('contact_form_left_text');
?>

<?php if(!empty($contact_first_screen_bg)) : ?>
<section class="sec-top selling" style="background-image: url('<?php echo $contact_first_screen_bg ?>')">
<?php else: ?>
<section class="sec-top selling" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/about-top-bg.jpg')">
<?php endif; ?>
	<div class="container">
		<div class="tbl">
			<div class="tbl-cell">
				<h1 class="page-title"><?php echo $contact_first_screen_title ?></h1>
				<a href="#" class="btn btn-share">Talk To An<br>Agent Now</a>
			</div>
		</div>
	</div>
</section>

<section class="sec-default">
	<div class="container">
		<div class="contact-form">
			<div class="row">
				<div class="col-md-5 contact-form-left">
					<?php echo $contact_form_left_text ?>
				</div>
				<div class="col-md-7 contact-form-right">
					<p class="form-title"><?php echo $contact_form_title ?></p>
					<?php echo do_shortcode('[contact-form-7 id="4" title="Contact page form"]') ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$contact_our_locations = get_field('contact_our_locations', 'option');
if( $contact_our_locations ): ?>

	<section class="sec-default locations whitebg">
		<div class="container">
			<p class="sec-header">Our Locations</p>
			<div class="row bl-locations-wrap">
				<?php foreach($contact_our_locations as $key => $row) :
					$cnt = $key+1;
					?>

					<div class="col-md-2">
						<div class="bl-locations">
							<div class="bl-title"><?php echo $row['contact_location_title'] ?></div>
							<div class="bl-addr"><?php echo $row['contact_location_address'] ?></div>
							<div class="bl-link">
								<a href="#" class="btn btn-learn-more" data-lat="<?php echo $row['contact_location_lat2'] ?>" data-lng="<?php echo $row['contact_location_lng'] ?>">View Map</a>
							</div>
						</div>
						<div class="bl-locations-map">
							<div id="map<?php echo $cnt ?>"></div>
						</div>
					</div>

				<?php endforeach; ?>
			</div>
		</div>
		<br class="bl-locations-map-br">
		<br class="bl-locations-map-br">
		<br class="bl-locations-map-br">
	</section>
<?php endif; ?>

<?php
$contact_our_locations = get_field('contact_our_locations', 'option');
if( $contact_our_locations ): ?>

	<section class="sec-default whitebg">
		<div id="bl-locations-map">
			<div id="map"></div>
			<script>
				var silver=[{elementType:'geometry',stylers:[{color:'#f5f5f5'}]},{elementType:'labels.icon',stylers:[{visibility:'off'}]},{elementType:'labels.text.fill',stylers:[{color:'#616161'}]},{elementType:'labels.text.stroke',stylers:[{color:'#f5f5f5'}]},{featureType:'administrative.land_parcel',elementType:'labels.text.fill',stylers:[{color:'#bdbdbd'}]},{featureType:'poi',elementType:'geometry',stylers:[{color:'#eeeeee'}]},{featureType:'poi',elementType:'labels.text.fill',stylers:[{color:'#757575'}]},{featureType:'poi.park',elementType:'geometry',stylers:[{color:'#e5e5e5'}]},{featureType:'poi.park',elementType:'labels.text.fill',stylers:[{color:'#9e9e9e'}]},{featureType:'road',elementType:'geometry',stylers:[{color:'#ffffff'}]},{featureType:'road.arterial',elementType:'labels.text.fill',stylers:[{color:'#757575'}]},{featureType:'road.highway',elementType:'geometry',stylers:[{color:'#dadada'}]},{featureType:'road.highway',elementType:'labels.text.fill',stylers:[{color:'#616161'}]},{featureType:'road.local',elementType:'labels.text.fill',stylers:[{color:'#9e9e9e'}]},{featureType:'transit.line',elementType:'geometry',stylers:[{color:'#e5e5e5'}]},{featureType:'transit.station',elementType:'geometry',stylers:[{color:'#eeeeee'}]},{featureType:'water',elementType:'geometry',stylers:[{color:'#9fa09a'}]},{featureType:'water',elementType:'labels.text.fill',stylers:[{color:'#9e9e9e'}]}];
				function initMap() {

					var lat = false;
					var lng = false;

					<?php foreach($contact_our_locations as $key => $row) :
					$cnt = $key+1;
					?>

					lat = <?php echo $row['contact_location_lat2'] ?>;
					lng = <?php echo $row['contact_location_lng'] ?>;
					var map<?php echo $cnt ?> = new google.maps.Map(document.getElementById('map<?php echo $cnt ?>'), {
						center: {lat: lat, lng: lng},
						scrollwheel: false,
						zoom: 15,
						disableDefaultUI: true
					});
					var beachMarker<?php echo $cnt ?> = new google.maps.Marker({
						position: {lat: lat, lng: lng},
						map: map<?php echo $cnt ?>
					});
					google.maps.event.addDomListener(window, 'resize', function() {
						map<?php echo $cnt ?>.setCenter( {lat: lat, lng: lng} );
					});
					map<?php echo $cnt ?>.setOptions({styles: silver});

					<?php endforeach; ?>

					if(lat && lng) {
						var map = new google.maps.Map(document.getElementById('map'), {
							center: {lat: lat, lng: lng},
							scrollwheel: false,
							zoom: 15,
							disableDefaultUI: true
						});
						var beachMarker = new google.maps.Marker({
							position: {lat: lat, lng: lng},
							map: map
						});
						google.maps.event.addDomListener(window, 'resize', function() {
							map.setCenter( {lat: lat, lng: lng} );
						});
						map.setOptions({styles: silver});


						window.tmp_lat = lat;
						window.tmp_lng = lng;
						$('.bl-locations-wrap .btn-learn-more').click(function(){
							if ($(window).width() >= 992) {

								if($(this).parent().parent().hasClass('active')){
									$('.bl-locations-wrap .bl-locations').removeClass('active');
									$('.bl-locations-wrap').removeClass('opened');
									$(this).html('View Map');
									$('#bl-locations-map').removeClass('active');

									$('.bl-locations-map-br').show();
								}else{

									var lat = $(this).attr('data-lat');
									var lng = $(this).attr('data-lng');

									beachMarker = new google.maps.Marker({
										position: {lat: window.tmp_lat, lng: window.tmp_lng},
										map: map
									});
									map.setCenter( {lat: window.tmp_lat, lng: window.tmp_lng} );

									$('.bl-locations-wrap .bl-locations').removeClass('active');
									$('.bl-locations-wrap').addClass('opened');
									$(this).parent().parent().addClass('active');
									$(this).html('Close Map');
									$('#bl-locations-map').addClass('active');

									$('.bl-locations-map-br').hide();
								}

							}else{

								if($(this).parent().parent().hasClass('active')){
									$('.bl-locations-wrap .bl-locations').removeClass('active');
									$('.bl-locations-wrap').removeClass('opened');
									$(this).html('View Map');
									$(this).parent().parent().parent().find('.bl-locations-map').removeClass('active');
								}else{
									$('.bl-locations-wrap .bl-locations').removeClass('active');
									$('.bl-locations-wrap').addClass('opened');
									$(this).parent().parent().addClass('active');
									$(this).html('Close Map');
									$(this).parent().parent().parent().find('.bl-locations-map').addClass('active');
								}

							}

							return false;
						});

					}

				}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCotNwkfRwSJ_My10hSSKFK-hjVH7gKcmo&callback=initMap" async defer></script>
		</div>
	</section>

<?php endif; ?>

<?php get_footer(); ?>
