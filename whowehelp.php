<?php
/*
Template Name: Who We Help Page
*/

get_header(); ?>

	<div class="content whowehelp">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">

				<?php get_sidebar(); ?>

		    <main class="main small-12 large-8 medium-8 cell" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>

			    <?php endwhile; endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>