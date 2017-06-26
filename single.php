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

	?>
	<section class="sec-top blog-detail" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/blog-detail-top-bg.jpg')">
		<div class="container">
			<div class="tbl">
				<div class="tbl-cell">
					<br>
					<br>
					<h1 class="page-title"><?php the_title(); ?></h1>
					<div class="meta">
						<div class="meta-author">By <?php the_author(); ?></div>
						<div class="meta-date"><?php the_date( "d/m/Y" ); ?></div>
					</div>
					<a href="#" class="btn btn-share">Talk To An<br>Agent Now</a>
				</div>
			</div>
		</div>
	</section>

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
							<div class="meta-title"><?php the_author(); ?></div>
							<div class="meta-text">
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

<?php if(false): ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php endif; ?>

<?php
//get_sidebar();
get_footer();
