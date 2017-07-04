<?php /* Template Name: Selling Template */
get_header();

$selling_first_screen_title = get_field('selling_first_screen_title');
$selling_first_screen_bg = get_field('selling_first_screen_bg');

$selling_first_screen_video_file = get_field('selling_first_screen_video_file');
$selling_first_screen_video_bg = get_field('selling_first_screen_video_bg');

$selling_our_services_title = get_field('selling_our_services_title');
$selling_our_services = get_field('selling_our_services');
$selling_stories_of_sold_title = get_field('selling_stories_of_sold_title');
$selling_recent_sales_title = get_field('selling_recent_sales_title');
$selling_title_bottom = get_field('selling_title_bottom');
?>

<?php if(!empty($selling_first_screen_bg)) : ?>
<section class="sec-top selling" style="background-image: url('<?php echo $selling_first_screen_bg ?>')">
<?php else: ?>
<section class="sec-top selling" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/selling-top-bg-s.jpg')">
<?php endif; ?>
	<?php if(!empty($selling_first_screen_video_file)): ?>
		<video <?php echo (!empty($selling_first_screen_video_bg))?'poster="'.$selling_first_screen_video_bg.'"':'' ?> playsinline autoplay muted loop>
			<source src="<?php echo $selling_first_screen_video_file ?>" type="video/mp4">
		</video>
	<?php endif; ?>

	<div class="container">
		<div class="tbl">
			<div class="tbl-cell">
				<h1 class="page-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $selling_first_screen_title ?></h1>
			</div>
		</div>
	</div>
</section>

	<div class="content-wrap content-wrap-selling">
		<div class="btn-share-container container">
			<a href="#" class="btn btn-share">Talk To An<br>Agent Now</a>
		</div>

		<section class="sec-default selling">
			<div class="container">
				<p class="sec-header"><?php echo $selling_our_services_title ?></p>
				<?php
				if( $selling_our_services ): ?>
					<?php $cnt = 0; foreach($selling_our_services as $row) : $cnt = $cnt+1; ?>

						<div class="services-row row<?php echo ($cnt%2==0)?' left fadeInLeft':' fadeInRight' ?> wow" data-wow-duration="1.4s" data-wow-delay="0s">
							<div class="col-md-5<?php echo ($cnt%2!=0)?' col-md-offset-2':'' ?>">
								<div class="tbl">
									<div class="tbl-cell">
										<p class="services-title"><?php echo $row['selling_our_services_title'] ?></p>
										<p><?php echo $row['selling_our_services_text'] ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-4<?php echo ($cnt%2==0)?' col-md-offset-1':'' ?>">
								<div class="services-icon">
									<div class="tbl">
										<div class="tbl-cell">
											icon goes here
										</div>
									</div>
								</div>
							</div>
						</div>

					<?php endforeach; ?>
				<?php endif; ?>
				<p class="text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">
					<a href="/contact/" class="btn btn-red">Contact A Branch Near You</a>
				</p>
			</div>
		</section>

		<section class="sec-default selling-2">
			<div class="container">
				<p class="sec-header wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $selling_stories_of_sold_title ?></p>
				<div class="row">
					<?php
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 6,
						'order' => 'DESC',
						'orderby' => 'date',
						'post_status' => 'publish',
					);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<a href="<?php echo esc_url( get_permalink() ) ?>" class="col-md-4 bl-stories">
							<div class="bl-img">
								<?php if ( has_post_thumbnail() ) : ?>
									<img src="<?php the_post_thumbnail_url(); ?>" alt="">
								<?php endif; ?>
							</div>
							<div class="bl-title"><?php the_title() ?></div>
							<p><?php the_excerpt() ?></p>
						</a>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
				<br>
				<br>
				<p class="text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">
					<a href="/blog/" class="btn btn-red long-btn">See More</a>
				</p>
			</div>
		</section>

		<section class="sec-featured with-bg selling fix-2">
			<div class="container">
				<div class="sec-head">
					<p class="sec-header text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $selling_recent_sales_title ?></p>
					<a href="/buying/" class="btn btn-view-all wow fadeInRight" data-wow-duration="1.3s" data-wow-delay="0.1s">View All</a>
				</div>
				<div class="row">
					<div class="col-md-4 bl">
						<div class="bl-inner">
							<div class="bl-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
							</div>
							<div class="bl-price">$1,588,000 - 700k over asking!</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-hover">
								<a href="#" class="btn btn-learn-more">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 bl">
						<div class="bl-inner">
							<div class="bl-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
							</div>
							<div class="bl-price">$1,588,000 - 700k over asking!</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-hover">
								<a href="#" class="btn btn-learn-more">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 bl">
						<div class="bl-inner">
							<div class="bl-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
							</div>
							<div class="bl-price">$1,588,000 - 700k over asking!</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-hover">
								<a href="#" class="btn btn-learn-more">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 bl">
						<div class="bl-inner">
							<div class="bl-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
							</div>
							<div class="bl-price">$1,588,000 - 700k over asking!</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-hover">
								<a href="#" class="btn btn-learn-more">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 bl">
						<div class="bl-inner">
							<div class="bl-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
							</div>
							<div class="bl-price">$1,588,000 - 700k over asking!</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-hover">
								<a href="#" class="btn btn-learn-more">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 bl">
						<div class="bl-inner">
							<div class="bl-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
							</div>
							<div class="bl-price">$1,588,000 - 700k over asking!</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-hover">
								<a href="#" class="btn btn-learn-more">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 bl">
						<div class="bl-inner">
							<div class="bl-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
							</div>
							<div class="bl-price">$1,588,000 - 700k over asking!</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-hover">
								<a href="#" class="btn btn-learn-more">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 bl">
						<div class="bl-inner">
							<div class="bl-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
							</div>
							<div class="bl-price">$1,588,000 - 700k over asking!</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-hover">
								<a href="#" class="btn btn-learn-more">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 bl">
						<div class="bl-inner">
							<div class="bl-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
							</div>
							<div class="bl-price">$1,588,000 - 700k over asking!</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-hover">
								<a href="#" class="btn btn-learn-more">Learn More</a>
							</div>
						</div>
					</div>
				</div>
				<p class="text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">
					<a href="/buying/" class="btn btn-view-all">View All</a>
				</p>
			</div>
		</section>

			<?php
			$contact_our_locations = get_field('contact_our_locations', 'option');
			if( $contact_our_locations ): ?>

				<section class="sec-default locations wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">
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
				</section>
			<?php endif; ?>

			<?php
			$contact_our_locations = get_field('contact_our_locations', 'option');
			if( $contact_our_locations ): ?>

				<section class="sec-default">
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



		<section class="sec-default locations-bot">
			<div class="container">
				<p class="sec-subheader wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $selling_title_bottom ?></p>
				<p class="text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">
					<a href="#" class="btn btn-red long-btn">Contact A Branch Near You</a>
				</p>
			</div>
		</section>

	</div>

<?php get_footer(); ?>
