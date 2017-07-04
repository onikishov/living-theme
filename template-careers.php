<?php /* Template Name: Careers Template */
get_header();

$careers_first_screen_title = get_field('careers_first_screen_title');
$careers_first_screen_bg = get_field('careers_first_screen_bg');
$careers_first_screen_video_file = get_field('careers_first_screen_video_file');
$careers_first_screen_video_bg = get_field('careers_first_screen_video_bg');
?>

<?php if(!empty($careers_first_screen_bg)): ?>
<section class="sec-top selling careers" style="background-image: url('<?php echo $careers_first_screen_bg ?>')">
<?php else: ?>
<section class="sec-top selling careers" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/careers-top-bg.jpg')">
<?php endif; ?>
	<?php if(!empty($careers_first_screen_video_file)): ?>
		<video <?php echo (!empty($careers_first_screen_video_bg))?'poster="'.$careers_first_screen_video_bg.'"':'' ?> playsinline autoplay muted loop>
			<source src="<?php echo $careers_first_screen_video_file ?>" type="video/mp4">
		</video>
	<?php endif; ?>

	<div class="container">
		<div class="tbl">
			<div class="tbl-cell">
				<br>
				<br>
				<br>
				<h1 class="page-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $careers_first_screen_title ?></h1>
				<br>
				<br>
				<br>
				<p class="text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">
					<a href="#" class="btn btn-white">Start Living The Dream</a>
				</p>
			</div>
		</div>
	</div>
</section>
<div class="content-wrap content-wrap-careers"></div>

<?php get_footer(); ?>
