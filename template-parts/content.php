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
$class = '';
if (!is_single()) {
	$class = 'danh-sach';
}
?>

<article <?php post_class($class); ?> id="post-<?php the_ID(); ?>">

	<div class="banner-top1 ">
		<div class="row row-top1">
			<div class="col-md-4">
				<?php
				if (!is_search()) {
					//hình ảnh
					get_template_part('template-parts/featured-image');
				}
				?>
			</div>
			<div class="col-md-8">
				<?php get_template_part('template-parts/entry-header'); ?>
				<div class="post-inner banner-content <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">
					<div class="entry-content">
						<?php
						if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
							the_excerpt();
						} else {
							the_content(__('Continue reading', 'twentytwenty'));
						}
						?>

					</div><!-- .entry-content -->

				</div><!-- .post-inner -->
			</div>
		</div>

	</div>

	<?php
	// tiêu đề
	//get_template_part( 'template-parts/entry-header' );

	// if ( ! is_search() ) {
	// 	//hình ảnh
	// 	get_template_part( 'template-parts/featured-image' );
	// }

	?>




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