<?php
/**
 * The template for single posts in the education series category
 */

get_header(); ?>

<div class="content">

	<div class="inner-content grid-x grid-margin-x grid-padding-x">

		<?php get_sidebar(); ?>

		<main class="main small-12 medium-8 large-8 cell" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header class="article-header">
							<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
					    </header> <!-- end article header -->

					    <section class="entry-content" itemprop="articleBody">
							<?php the_content(); ?>
							</section> <!-- end article section -->

						<footer class="article-footer">
							<p class="tags"><span class="producer">Producer:</span><?php the_field('producer');?> <span class="episode"> Episode: </span><?php the_field('episode');?><span class="episode"> Original Air Date:</span><?php the_field('air_date');?></p>
						</footer> <!-- end article footer -->

						<?php comments_template(); ?>

					</article> <!-- end article -->

		    <?php endwhile; else : ?>

		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

				<a class="button return" href="/category/community-education-series/">&laquo; Back to the Archives</a>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>