<?php /* Template Name: About Template */
get_header();

$about_first_screen_title = get_field('about_first_screen_title');
$about_first_screen_bg = get_field('about_first_screen_bg');

$about_first_screen_video_file = get_field('about_first_screen_video_file');
$about_first_screen_video_bg = get_field('about_first_screen_video_bg');

$about_our_story_title = get_field('about_our_story_title');
$about_our_story_left = get_field('about_our_story_left');
$about_our_story_right = get_field('about_our_story_right');
$about_living_culture_title = get_field('about_living_culture_title');
$about_living_culture_bg = get_field('about_living_culture_bg');
$about_living_culture_text = get_field('about_living_culture_text');
$about_lgoc_title = get_field('about_lgoc_title');
$about_lgoc_rows = get_field('about_lgoc_rows');
$about_join_us_left = get_field('about_join_us_left');
$about_join_us_right = get_field('about_join_us_right');
?>

<?php if(!empty($about_first_screen_bg)): ?>
<section class="sec-top about" style="background-image: url('<?php echo $about_first_screen_bg ?>')">
<?php else: ?>
<section class="sec-top about" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/about-top-bg.jpg')">
<?php endif; ?>
	<?php if(!empty($about_first_screen_video_file)): ?>
		<video <?php echo (!empty($about_first_screen_video_bg))?'poster="'.$about_first_screen_video_bg.'"':'' ?> playsinline autoplay muted loop>
			<source src="<?php echo $about_first_screen_video_file ?>" type="video/mp4">
		</video>
	<?php endif; ?>
	<div class="container">
		<div class="tbl">
			<div class="tbl-cell">
				<h1 class="page-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $about_first_screen_title ?></h1>
				<a href="#" id="arrow-down" class="arrow-down">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/down-arrow.svg" alt="">
				</a>
			</div>
		</div>
	</div>
</section>

	<div class="content-wrap content-wrap-about">
		<div class="btn-share-container container">
			<a href="#" class="btn btn-share">Talk To An<br>Agent Now</a>
		</div>

		<section class="sec-default">
			<div class="container">
				<p class="sec-header wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $about_our_story_title ?></p>
				<div class="row fix-1 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">
					<div class="col-md-4 col-md-offset-1">
						<p class="text-brown"><?php echo $about_our_story_left ?></p>
					</div>
					<div class="col-md-6">
						<?php echo $about_our_story_right ?>
					</div>
				</div>
				<hr class="about-hr">
				<p class="sec-subheader wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $about_living_culture_title ?></p>
				<?php if(!empty($about_living_culture_bg)) : ?>
				<div class="living-culture-imgbl" style="background-image: url('<?php echo $about_living_culture_bg ?>')" data-stellar-background-ratio="0.01">
				<?php else: ?>
				<div class="living-culture-imgbl" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/concert.jpg')" data-stellar-background-ratio="0.01">
				<?php endif; ?>
					<div class="row">
						<div class="col-md-6 col-left">
							<div class="tbl">
								<div class="tbl-cell"><?php echo $about_living_culture_text ?></div>
							</div>
						</div>
						<div class="col-md-6 col-right"></div>
					</div>
				</div>
			</div>
		</section>

		<section class="sec-default">
			<div class="container">
				<p class="sec-header wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $about_lgoc_title ?></p>
				<div class="lgoc-bl">
					<?php
					if( $about_lgoc_rows ): ?>
						<?php $cnt = 0; foreach($about_lgoc_rows as $row) : $cnt = $cnt+1; ?>

							<?php if($cnt%2!==0): ?>
								<div class="lgoc-bl-row wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay="0.1s" style="background-image: url('<?php echo $row['about_lgoc_rows_image'] ?>')">
									<div class="tbl">
										<div class="tbl-cell lgoc-img" style="background-image: url('<?php echo $row['about_lgoc_rows_image'] ?>')"></div>
										<div class="tbl-cell lgoc-txt">
											<p class="lgoc-title"><?php echo $row['about_lgoc_rows_title'] ?></p>
											<p><?php echo $row['about_lgoc_rows_text'] ?></p>
											<p><a href="<?php echo $row['about_lgoc_rows_link'] ?>" class="btn btn-learn-more">More Information</a></p>
										</div>
									</div>
								</div>
							<?php else: ?>
								<div class="lgoc-bl-row wow fadeInRight" data-wow-duration="1.3s" data-wow-delay="0.1s" style="background-image: url('<?php echo $row['about_lgoc_rows_image'] ?>')">
									<div class="tbl">
										<div class="tbl-cell lgoc-txt">
											<p class="lgoc-title"><?php echo $row['about_lgoc_rows_title'] ?></p>
											<p><?php echo $row['about_lgoc_rows_text'] ?></p>
											<p><a href="<?php echo $row['about_lgoc_rows_link'] ?>" class="btn btn-learn-more">More Information</a></p>
										</div>
										<div class="tbl-cell lgoc-img" style="background-image: url('<?php echo $row['about_lgoc_rows_image'] ?>')"></div>
									</div>
								</div>
							<?php endif; ?>

						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<section class="sec-default">
			<div class="container">
				<div class="row fix-1">
					<div class="col-md-4 col-md-offset-1 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">
						<br>
						<br>
						<br>
						<p class="text-brown text-right"><?php echo $about_join_us_left ?></p>
					</div>
					<div class="col-md-6 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">
						<?php echo $about_join_us_right ?>
						<br>
						<br>
						<br>
						<p>
							<a href="#" class="btn btn-red">Start Living The Dream</a>
						</p>
						<br>
						<br>
					</div>
				</div>
			</div>
		</section>

	</div>

<?php get_footer(); ?>
