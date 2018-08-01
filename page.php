<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">

				<?php get_sidebar(); ?>

		    <main class="main small-12 large-8 medium-8 cell" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>

			    <?php endwhile; endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

		<?php
		// Test for HC Stories
		if (get_field('story_title')) {
			?>
			<div class="hc-stories grid-x grid-padding-x">

				<div class="small-12 medium-6 large-3 cell">
					<div class="circleWrap" style="background-image: url('<?php the_field('story_image');?>')">
					</div>
				</div>

				<div class="small-12 medium-6 large-5 cell">
					<div class="story">
						<h2><?php the_field('story_title');?></h2>
						<div class="story-text"><?php the_field('story_text');?></div>
					</div>
				</div>

				<div class="small-12 medium-6 large-3 large-offset-1 cell">
					<blockquote><?php the_field('story_testimonial');?>
						<span class="author"><?php the_field('client_name');?></span>
					</blockquote>

				</div>

			</div>
			<?php
		}
		else {
			// do nothing
		}
		?>

	</div> <!-- end #content -->

<?php get_footer(); ?>