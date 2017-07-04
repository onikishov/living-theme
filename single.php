<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package living
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();

	$bp_first_screen_bg = get_field('bp_first_screen_bg');
	$bp_first_screen_video_file = get_field('bp_first_screen_video_file');
	$bp_first_screen_video_bg = get_field('bp_first_screen_video_bg');

	?>
	<?php if(!empty($bp_first_screen_bg)): ?>
	<section class="sec-top blog-detail" style="background-image: url('<?php echo $bp_first_screen_bg ?>')">
	<?php else: ?>
	<section class="sec-top blog-detail" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/blog-detail-top-bg.jpg')">
	<?php endif; ?>
		<?php if(!empty($bp_first_screen_video_file)): ?>
			<video <?php echo (!empty($bp_first_screen_video_bg))?'poster="'.$bp_first_screen_video_bg.'"':'' ?> playsinline autoplay muted loop>
				<source src="<?php echo $bp_first_screen_video_file ?>" type="video/mp4">
			</video>
		<?php endif; ?>
		<div class="container">
			<div class="tbl">
				<div class="tbl-cell">
					<br>
					<br>
					<h1 class="page-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php the_title(); ?></h1>
					<div class="meta">
						<div class="meta-author wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">By <?php the_author(); ?></div>
						<div class="meta-date wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s"><?php the_date( "d/m/Y" ); ?></div>
					</div>
				</div>
			</div>
		</div>
	</section>

<div class="content-wrap content-wrap-blog-detail">
	<div class="btn-share-container container">
		<a href="#" class="btn btn-share">Talk To An<br>Agent Now</a>
	</div>

	<section class="sec-default blog-detail">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<?php
					the_content();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
//						comments_template();
					endif;
					?>
					<div class="meta">
						<div class="meta-img">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 107, '', get_the_author(), array('class'=>'img-circle')); ?>
						</div>
						<div class="meta-right">
							<div class="meta-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php the_author(); ?></div>
							<div class="meta-text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
								<?php echo wpautop( get_the_author_meta('description'), true ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php related_posts() ?>


	<?php

endwhile; // End of the loop.
?>
</div>

<?php
//get_sidebar();
get_footer();
