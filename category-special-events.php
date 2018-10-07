<?php
/**
 * Archive Page for special events & Calendar
 *
 */

get_header(); ?>

	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">

				<?php// get_sidebar(); ?>

		    <main class="main small-12 medium-8 large-8 large-offset-2 cell" role="main">

		    	<header>
		    		<h1 class="page-title">Calendar &amp; Special Events</h1>
						<?php //the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	</header>

		    	<?php $args = array('post_type' => 'event',
															'posts_per_page'  => '6',
															'meta_key' => 'event_date',
															'orderby' => 'meta_value_num',
															'order' => 'ASC'
															);
									$the_query = new WP_Query( $args );

								// The Loop
								if ( $the_query->have_posts() ) {
										while ( $the_query->have_posts() ) {
											$the_query->the_post(); ?>

						<!--Post Display-->
						<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

							<section class="entry-content grid-x grid-padding-x" itemprop="articleBody">

								<div class="cell large-2 date">
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
								</div>

								<div class="cell large-10 details">
									<header class="article-header">
										<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
									</header> <!-- end article header -->
									<p class="tags"><?php the_field('event_time');?> | <?php the_field('event_location');?></p>

								</div>

							</section> <!-- end article section -->

						</article> <!-- end article -->

					<?php }
					/* Restore original Post Data */
					wp_reset_postdata();
			} else {
				get_template_part( 'parts/content', 'missing' );
			}
			?>

			</main> <!-- end #main -->

	    </div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>