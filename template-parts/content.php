<?php

/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$has_sidebar_right_1 = is_active_sidebar('sidebar-right-1');
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="banner-card-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php
					// hình ảnh 
					if (!is_search()) {
						get_template_part('template-parts/featured-image');
					}
					?>
				</div>
				<div class="col-md-9">
					<?php
					get_template_part('template-parts/entry-header');
					?>
					<div class="post-inner post-content <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">
						<div class="entry-content">
							<?php
							if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
								the_excerpt();
							} else {
								the_content(__('Continue reading', 'twentytwenty'));
							}
							?>

						</div><!-- .entry-content -->

		<?php if ($has_sidebar_right_1) { ?>
			<?php if ($has_sidebar_right_1) { ?>
				<div class="footer-widgets wp-container-7 wp-block-column" style="flex-basis:22.22%;">
					<?php dynamic_sidebar('sidebar-right-1'); ?>
				</div>
			<?php } ?>

		<?php } ?>

	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__('Page', 'twentytwenty') . '"><span class="label">' . __('Pages:', 'twentytwenty') . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		twentytwenty_the_post_meta(get_the_ID(), 'single-bottom');

		if (post_type_supports(get_post_type(get_the_ID()), 'author') && is_single()) {

			get_template_part('template-parts/entry-author-bio');
		}
		?>

	</div><!-- .section-inner -->

	<?php

	if (is_single()) {

		get_template_part('template-parts/navigation');
	}

	/*
	 * Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 */
	if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
	?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

	<?php
	}
	?>

</article><!-- .post -->