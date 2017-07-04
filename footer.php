<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package living
 */

$footer_social_link_linkedin = get_field('footer_social_link_linkedin', 'option');
$footer_social_link_facebook = get_field('footer_social_link_facebook', 'option');
$footer_social_link_twitter = get_field('footer_social_link_twitter', 'option');
$footer_address = get_field('footer_address', 'option');
$footer_agent_login_text = get_field('footer_agent_login_text', 'option');
$footer_agent_login_link = get_field('footer_agent_login_link', 'option');
$footer_copyright = get_field('footer_copyright', 'option');
?>

	<footer class="footer">
		<div class="container">
			<?php if(is_page_template('template-careers.php')): ?><a href="#" class="btn btn-share">Talk To An<br>Agent Now</a><?php endif; ?>
			<div class="social">
				<a href="<?php echo $footer_social_link_linkedin ?>" class="linkedin">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/linkedin.svg" alt="linkedin">
				</a>
				<a href="<?php echo $footer_social_link_facebook ?>" class="facebook">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/facebook.svg" alt="facebook">
				</a>
				<a href="<?php echo $footer_social_link_twitter ?>" class="twitter">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/twitter.svg" alt="twitter">
				</a>
			</div>
			<p><?php echo $footer_address ?></p>
			<p><a id="back-to-top" href="#" class="backtotop">Back To Top</a></p>
			<p><a href="<?php echo $footer_agent_login_link ?>" class="btn btn-footer"><?php echo $footer_agent_login_text ?></a></p>
			<p><?php echo $footer_copyright ?></p>
		</div>
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jQueryFormStyler/jquery.formstyler.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/OwlCarousel2/owl.carousel.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/lightGallery/js/lightgallery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/lightGallery/lib/lg-autoplay.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/lightGallery/lib/lg-video.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jquery.stellar.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/wow.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

	<?php if(is_page_template('template-buying.php')): ?>
		<script>
			$(function () {
				var type = 'featured';
				$('#listings_list .listing').each(function(){
					if($(this).hasClass(type) || type == 'all'){
						$(this).show();
					}else{
						$(this).hide();
					}
				});
				$('.filter').click(function(){
					var type = $(this).attr('data-filter');
					$('.filter').removeClass('active');
					$(this).addClass('active');
					$('#listings_list .listing').each(function(){
						if($(this).hasClass(type) || type == 'all'){
							$(this).show();
						}else{
							$(this).hide();
						}
					});
				});
			});
		</script>
	<?php endif; ?>

	<?php wp_footer(); ?>

</body>
</html>
