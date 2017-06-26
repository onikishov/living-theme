<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package living
 */

?>

<a href="<?php echo esc_url( get_permalink() ) ?>" class="col-md-4 bl-stories bl-stories-slider">
	<div class="bl-img">
		<?php if ( has_post_thumbnail() ) : ?>
			<img src="<?php the_post_thumbnail_url(); ?>" alt="">
		<?php endif; ?>
	</div>
	<div class="bl-title"><?php the_title(); ?></div>
	<p><?php the_excerpt(); ?></p>
</a>