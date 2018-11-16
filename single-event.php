<?php
/**
 * The template for single posts in the special events & calendar category
 */

get_header(); ?>

<div class="content">

	<div class="inner-content grid-x grid-margin-x grid-padding-x">

		<main class="main small-12 medium-8 medium-offset-2 large-8 large-offset-2 cell" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
						<div class="grid-x grid-padding-x">
							<div class="small-12 medium-4 large-6 cell">
								<header class="article-header">


									<div class="date-wrap">
										<?php
											// get raw date
											$date = get_field('event_date', false, false);
											// make date object
											$date = new DateTime($date); ?>
										<div class="month">
											<?php echo $date->format('F'); ?>
										</div>
										<div class="day">
											<?php echo $date->format('j'); ?>
										</div>
										<div class="year">
											<?php echo $date->format('Y'); ?>
										</div>
									</div>

									<p class="tags"><span><?php the_field('event_time');?></span> <br/> <?php the_field('event_location');?></p>
							  </header> <!-- end article header -->

							  <section class="entry-content" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->
							</div>

							<div class="small-12 medium-4 large-6 cell">
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('calendar'); ?></a>
							</div>
						</div>

					</article> <!-- end article -->

		    <?php endwhile; else : ?>

		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

				<a class="button return" href="/category/special-events">&laquo; Back to the Calendar</a>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>