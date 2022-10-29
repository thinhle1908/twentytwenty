<?php

/**
 * Displays the next and previous post navigation in single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$next_post = get_next_post();
$prev_post = get_previous_post();

if ($next_post || $prev_post) {

	$pagination_classes = '';

	if (!$next_post) {
		$pagination_classes = ' only-one only-prev';
	} elseif (!$prev_post) {
		$pagination_classes = ' only-one only-next';
	}

?>

	<nav class="pagination-single section-inner<?php echo esc_attr($pagination_classes); ?>" aria-label="<?php esc_attr_e('Post', 'twentytwenty'); ?>">

		<hr class="styled-separator is-style-wide" aria-hidden="true" />

		<div class="headlines">
			<ul>
				<li>
					<?php if ($prev_post) { ?>
						<div class="headlinesdate">
							<div class="headlinesdm">
								<div class="headlinesday"><?php echo mysql2date('d', $prev_post->post_date, false) ?></div>
								<div class="headlinesmonth"><?php echo mysql2date('m', $prev_post->post_date, false) ?></div>

							</div>
							<div class="headlinesyear"><?php echo substr(mysql2date('Y', $prev_post->post_date, false), -2, 2) ?></div>
						</div>
					<?php } ?>
					<div class="headlinestitle">
						<?php
						if ($prev_post) {
						?>
							<a class="previous-post" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
								<span><?php echo wp_kses_post(get_the_title($prev_post->ID)); ?></span>
							</a>
						<?php } ?>
					</div>
				</li>
				<li>
					<?php if ($next_post) { ?>
						<div class="headlinesdate">
							<div class="headlinesdm">
								<div class="headlinesday"><?php echo mysql2date('d', $next_post->post_date, false) ?></div>
								<div class="headlinesmonth"><?php echo mysql2date('m', $next_post->post_date, false) ?></div>
							</div>
							<div class="headlinesyear"><?php echo substr(mysql2date('Y', $next_post->post_date, false), -2, 2) ?></div>
						</div>
					<?php } ?>
					<div class="headlinestitle">
						<?php if ($next_post) { ?>

							<a class="previous-post" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
								<span><?php echo wp_kses_post(get_the_title($next_post->ID)); ?></span>
							</a>
						<?php } ?>
					</div>
				</li>
			</ul>
		</div><!-- .pagination-single-inner -->

		<hr class="styled-separator is-style-wide" aria-hidden="true" />

	</nav><!-- .pagination-single -->

<?php
}
