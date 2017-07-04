<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package living
 */

get_header(); ?>

	<section class="sec-top blog-detail-slider-wrap">
		<div class="blog-detail-slider owl-carousel owl-theme">
			<?php
			$rows = get_field('blog_slider', 'option');
			if( $rows ): ?>

				<?php foreach($rows as $row) : ?>

					<div class="item sec-top blog-detail" style="background-image: url('<?php echo $row['blog_slider_image'] ?>')">
						<div class="container">
							<div class="tbl">
								<div class="tbl-cell">
									<br>
									<br>
									<h1 class="page-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s"><?php echo $row['blog_slider_title'] ?></h1>
									<a href="<?php echo $row['blog_slider_link'] ?>" class="btn btn-slider wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.1s">Read</a>
								</div>
							</div>
						</div>
					</div>

				<?php endforeach; ?>

			<?php else: ?>
				<div class="item sec-top blog-detail" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/tmp/blog-detail-top-bg.jpg')">
					<div class="container">
						<div class="tbl">
							<div class="tbl-cell">
								<!-- -->
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>

<div class="content-wrap content-wrap-blog">
	<div class="btn-share-container container">
		<a href="#" class="btn btn-share">Talk To An<br>Agent Now</a>
	</div>

	<section class="sec-default bl-blog">
		<div class="container">
			<div class="row">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
		</div>
	</section>

</div>

<?php
//get_sidebar();
get_footer();
