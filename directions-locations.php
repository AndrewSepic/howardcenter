<?php
/*
Template Name: Locations
*/

get_header(); ?>

	<div class="content">

		<div class="inner-content grid-x">

		    <main class="main small-12 medium-12 large-12 cell" role="main">

					<!-- Google Map Embed -->
					<div class="responsive-embed panorama">
						<iframe width="1400" height="480" src="https://www.google.com/maps/d/embed?mid=1BqFCKBOnlLMpls_C9EsEAYu_iHHgc6sQ" frameborder="0" allowfullscreen></iframe>
					</div>

					<div class="grid-container">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php get_template_part( 'parts/loop', 'page' ); ?>

						<?php endwhile; endif; ?>
					</div>
			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
