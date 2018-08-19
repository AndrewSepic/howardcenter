<?php
/**
 * Displays archive pages if a speicifc template is not set.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">

				<?php get_sidebar(); ?>

		    <main class="main small-12 medium-8 large-8 cell" role="main">

		    	<header>
		    		<h1 class="page-title"><?php the_archive_title();?></h1>
						<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	</header>

					<h3 class="series">Series Archives<i class="fi-video"></i></h2>

		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<!--Post Display-->
						<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

							<section class="entry-content grid-x grid-padding-x" itemprop="articleBody">

								<div class="cell large-4 edu-thumb">
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('edu-series'); ?></a>
								</div>

								<div class="cell large-8 details">
									<header class="article-header">
										<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
									</header> <!-- end article header -->
									<?php the_excerpt('<button class="tiny">' . __( 'Watch Now >', 'jointswp' ) . '</button>'); ?>
									<p class="tags"><span class="producer">Producer:</span><?php the_field('producer');?> <span class="episode"> Episode: </span><?php the_field('episode');?><span class="episode"> Original Air Date:</span><?php the_field('air_date');?></p>

								</div>

							</section> <!-- end article section -->

						</article> <!-- end article -->

				<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

			</main> <!-- end #main -->

	    </div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>