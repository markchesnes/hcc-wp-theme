<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div class="row">

		<?php get_sidebar(); ?>

		<div class="col-md-9">
			<div class="row">
				
				<hr>

				<?php the_breadcrumb(); ?>

				<hr>

				<?php if ( have_posts() ) : ?>

					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'postthumb', get_post_format() ); ?>
					<?php endwhile; ?>

					<?php // twentythirteen_paging_nav(); ?>

				<?php else : ?>
					<?php // get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>				

				<ul class="pager">
					<li>
						<a href="#">Next 5 Posts</a>
					</li>
				</ul>

			</div><!-- .row -->
		</div><!-- .col-md-9 -->

<?php get_footer(); ?>