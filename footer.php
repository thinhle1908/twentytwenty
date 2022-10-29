<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

<<<<<<< HEAD
?>
<footer id="site-footer" class="header-footer-group">

	<div class="section-inner">

		<div class="footer-credits">

			<p class="footer-copyright">&copy;
				<?php
				echo date_i18n(
					/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
					_x('Y', 'copyright date format', 'twentytwenty')
				);
				?>
				<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
			</p><!-- .footer-copyright -->

			<?php
			if (function_exists('the_privacy_policy_link')) {
				the_privacy_policy_link('<p class="privacy-policy">', '</p>');
			}
			?>

			<p class="powered-by-wordpress">
				<a href="<?php echo esc_url(__('https://wordpress.org/', 'twentytwenty')); ?>">
					<?php _e('Powered by WordPress', 'twentytwenty'); ?>
				</a>
			</p><!-- .powered-by-wordpress -->

		</div><!-- .footer-credits -->

		<a class="to-the-top" href="#site-header">
			<span class="to-the-top-long">
				<?php
				/* translators: %s: HTML character for up arrow. */
				printf(__('To the top %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&uarr;</span>');
				?>
			</span><!-- .to-the-top-long -->
			<span class="to-the-top-short">
				<?php
				/* translators: %s: HTML character for up arrow. */
				printf(__('Up %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&uarr;</span>');
				?>
			</span><!-- .to-the-top-short -->
		</a><!-- .to-the-top -->

	</div><!-- .section-inner -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>
=======
$has_footer_menu = has_nav_menu('footer');
$has_social_menu = has_nav_menu('social');

$has_sidebar_3 = is_active_sidebar('sidebar-3');
$has_sidebar_4 = is_active_sidebar('sidebar-4');
$has_sidebar_5 = is_active_sidebar('sidebar-5');

if ($has_footer_menu || $has_social_menu || $has_sidebar_3 || $has_sidebar_4 || $has_sidebar_5 ) {
?>

	<!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<?php if ($has_sidebar_3) { ?>
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
					<?php } ?>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
				<?php if ($has_sidebar_4) { ?>
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
					<?php } ?>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
				<?php if ($has_sidebar_5) { ?>
						<?php dynamic_sidebar( 'sidebar-5' ); ?>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
					<p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
				</div>
				<hr>
			</div>
		</div>
	</section>
	<!-- ./Footer -->


	<?php wp_footer(); ?>

	</body>

	</html>
<?php } ?>
>>>>>>> master
