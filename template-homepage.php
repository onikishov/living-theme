<?php /* Template Name: Homepage Template */
get_header();

$fp_first_screen_title = get_field('fp_first_screen_title');
$fp_first_screen_bg = get_field('fp_first_screen_bg');

$fp_first_screen_video_file = get_field('fp_first_screen_video_file');
$fp_first_screen_video_bg = get_field('fp_first_screen_video_bg');

$fp_our_story_title = get_field('fp_our_story_title');
$fp_our_story_left = get_field('fp_our_story_left');
$fp_our_story_right = get_field('fp_our_story_right');
$fp_our_story_bottom_title = get_field('fp_our_story_bottom_title');
$fp_our_story_bottom_infograph = get_field('fp_our_story_bottom_infograph2');
$fp_section_video_title = get_field('fp_section_video_title');
$fp_section_video_link = get_field('fp_section_video_link');
$fp_section_red_title = get_field('fp_section_red_title');
$fp_section_red_infograph = get_field('fp_section_red_infograph2');
$fp_featured_listings_title = get_field('fp_featured_listings_title');
?>

<?php if(!empty($fp_first_screen_bg)) : ?>
<section class="sec-top sec-top-home" style="background-image: url('<?php echo $fp_first_screen_bg ?>')">
<?php else: ?>
<section class="sec-top sec-top-home" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/homepage-top-bg-s.jpg')">
<?php endif; ?>
	<?php if(!empty($fp_first_screen_video_file)): ?>
		<video <?php echo (!empty($fp_first_screen_video_bg))?'poster="'.$fp_first_screen_video_bg.'"':'' ?> playsinline autoplay muted loop>
			<source src="<?php echo $fp_first_screen_video_file ?>" type="video/mp4">
		</video>
	<?php endif; ?>
	<div class="container">
		<div class="tbl">
			<div class="tbl-cell">
				<h1 class="page-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $fp_first_screen_title ?></h1>
				<a href="#" id="arrow-down" class="arrow-down">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/down-arrow.svg" alt="">
				</a>
			</div>
		</div>
	</div>
</section>

	<div class="content-wrap content-wrap-home">
		<div class="btn-share-container container">
			<a href="#" class="btn btn-share">Talk To An<br>Agent Now</a>
		</div>

		<section class="sec-default">
			<div class="container">
				<p class="sec-header wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $fp_our_story_title ?></p>
				<div class="row fix-1">
					<div class="col-md-4 col-md-offset-1 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
						<p class="text-brown"><?php echo $fp_our_story_left ?></p>
					</div>
					<div class="col-md-6 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s">
						<?php echo $fp_our_story_right ?>
					</div>
				</div>
				<hr>
				<p class="sec-subheader wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $fp_our_story_bottom_title ?></p>
				<div class="temp-infog wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"><?php if( !empty($fp_our_story_bottom_infograph) ): ?><img src="<?php echo $fp_our_story_bottom_infograph['url']; ?>" alt="<?php echo $fp_our_story_bottom_infograph['alt']; ?>" /><?php endif; ?></div>
				<p class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
					<a href="#" class="btn btn-red">Start Living The Dream</a>
				</p>
			</div>
		</section>

		<section class="sec-video-mobile">
			<p class="sec-header text-center"><?php echo $fp_section_video_title ?></p>
		</section>
		<section class="sec-video">
			<div class="container">
				<div class="tbl">
					<div class="tbl-cell">
						<p class="sec-header text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $fp_section_video_title ?></p>
						<p id="video-gallery" class="text-center">
							<a href="<?php echo $fp_section_video_link ?>" class="btn btn-video-play"></a>
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="sec-red">
			<div class="container">
				<p class="sec-header text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $fp_section_red_title ?></p>
				<div class="temp-infog"><?php if( !empty($fp_section_red_infograph) ): ?><img src="<?php echo $fp_section_red_infograph['url']; ?>" alt="<?php echo $fp_section_red_infograph['alt']; ?>" /><?php endif; ?></div>
				<p class="text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">
					<a href="#" class="btn btn-white">Start Living The Dream</a>
				</p>
			</div>
		</section>

		<section class="sec-featured">
			<div class="container">
				<div class="sec-head">
					<p class="sec-header text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $fp_featured_listings_title ?></p>
					<a href="/buying/" class="btn btn-view-all wow fadeInRight" data-wow-duration="1.3s" data-wow-delay="0.2s">View All</a>
				</div>
				<div class="row">
					<div class="col-md-4 bl">
						<div class="bl-inner">
							<div class="bl-img">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/sec-featured-img-1.jpg" alt="">
							</div>
							<div class="bl-price">$1,588,000</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-icons">
								<div class="bed">
									<div class="icon"></div><div class="txt">3 + 2</div>
								</div>
								<div class="bath">
									<div class="icon"></div><div class="txt">3</div>
								</div>
							</div>
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
							<div class="bl-price">$1,588,000</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-icons">
								<div class="bed">
									<div class="icon"></div><div class="txt">3 + 2</div>
								</div>
								<div class="bath">
									<div class="icon"></div><div class="txt">3</div>
								</div>
							</div>
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
							<div class="bl-price">$1,588,000</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-icons">
								<div class="bed">
									<div class="icon"></div><div class="txt">3 + 2</div>
								</div>
								<div class="bath">
									<div class="icon"></div><div class="txt">3</div>
								</div>
							</div>
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
							<div class="bl-price">$1,588,000</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-icons">
								<div class="bed">
									<div class="icon"></div><div class="txt">3 + 2</div>
								</div>
								<div class="bath">
									<div class="icon"></div><div class="txt">3</div>
								</div>
							</div>
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
							<div class="bl-price">$1,588,000</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-icons">
								<div class="bed">
									<div class="icon"></div><div class="txt">3 + 2</div>
								</div>
								<div class="bath">
									<div class="icon"></div><div class="txt">3</div>
								</div>
							</div>
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
							<div class="bl-price">$1,588,000</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-icons">
								<div class="bed">
									<div class="icon"></div><div class="txt">3 + 2</div>
								</div>
								<div class="bath">
									<div class="icon"></div><div class="txt">3</div>
								</div>
							</div>
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
							<div class="bl-price">$1,588,000</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-icons">
								<div class="bed">
									<div class="icon"></div><div class="txt">3 + 2</div>
								</div>
								<div class="bath">
									<div class="icon"></div><div class="txt">3</div>
								</div>
							</div>
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
							<div class="bl-price">$1,588,000</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-icons">
								<div class="bed">
									<div class="icon"></div><div class="txt">3 + 2</div>
								</div>
								<div class="bath">
									<div class="icon"></div><div class="txt">3</div>
								</div>
							</div>
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
							<div class="bl-price">$1,588,000</div>
							<div class="bl-title">122 Hudson Estate Suite 918</div>
							<div class="bl-loc">Toronto, ON</div>
							<div class="bl-icons">
								<div class="bed">
									<div class="icon"></div><div class="txt">3 + 2</div>
								</div>
								<div class="bath">
									<div class="icon"></div><div class="txt">3</div>
								</div>
							</div>
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

		<section class="sec-testimonials-slider wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">
			<div class="container">
				<div class="row">
					<div class="content_slider_4 owl-carousel owl-theme">
						<?php
						$args = array(
							'post_type' => 'testimonials',
							'posts_per_page' => -1,
							'order' => 'DESC',
							'orderby' => 'date',
							'post_status' => 'publish',
						);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
							// ACF
							$testimonial_text = get_field('testimonial_text');
							$testimonial_author = get_field('testimonial_author');
							$testimonial_role = get_field('testimonial_role');

							?>
							<div class="item bl">
								<div class="bl-inner">
									<div class="bl-img">
										<?php if ( has_post_thumbnail() ) : ?>
											<img src="<?php the_post_thumbnail_url(); ?>" alt="">
										<?php endif; ?>
									</div>
									<div class="bl-txt">“<?php echo $testimonial_text ?>”</div>
									<div class="bl-author"><?php echo $testimonial_author ?></div>
									<div class="bl-meta"><?php echo $testimonial_role ?></div>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</section>

	</div>

<?php get_footer(); ?>
