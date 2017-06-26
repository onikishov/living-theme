<?php
/*
YARPP Template: Thumbnails
Description: Requires a theme which supports post thumbnails
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?>
<?php if (have_posts()):?>

	<section class="sec-default brownbg bl-blog-slider">
		<div class="container">
			<p class="sec-header small-header">You Might Also Like</p>
			<div class="row">
				<div class="content_slider owl-carousel owl-theme">
					<?php while (have_posts()) : the_post(); ?>
						<?php if (has_post_thumbnail()):?>
							<a href="<?php the_permalink() ?>" rel="bookmark" class="item bl-stories bl-stories-slider">
								<div class="bl-img">
									<img src="<?php the_post_thumbnail_url(); ?>" alt="">
								</div>
								<div class="bl-title"><?php the_title(); ?></div>
								<p><?php the_excerpt(); ?></p>
							</a>
						<?php endif; ?>
					<?php endwhile; ?>

				</div>
			</div>
			<br>
			<br>
			<br>
		</div>
	</section>

<?php else: ?>

<?php endif; ?>
