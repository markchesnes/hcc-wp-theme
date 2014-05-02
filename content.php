<?php
/**
 * The default template for post thumbnails
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" class="post_thumb">
	<div class="row">
		<h3><?php the_title(); ?></h3>
		<small>Posted by: <?php the_author(); ?> | Posted on: <?php the_date('F j, Y'); ?></small>
		<hr>
		
		<?php the_content(); ?>

	</div>
</div>