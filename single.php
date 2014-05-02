<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div class="row">

	<?php get_sidebar(); ?>

	<?php the_post() ?>
	<div class="col-md-9">
		<div id="post-<?php the_ID(); ?>" class="post_thumb">
			<div class="row">
				<hr>

				<?php the_breadcrumb(); ?>

				<hr>

				<h3><?php the_title(); ?></h3>
				<small>Posted by: <?php the_author(); ?> | Posted on: <?php the_date('F j, Y'); ?></small>
				<hr>
	
				<?php the_content(); ?>

			</div><!-- .row -->
		</div><!-- .post_thumb -->
	</div> <!-- .col-md-9 -->
	<?php get_footer(); ?>
</div>