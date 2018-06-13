<?php
/*
Template Name: Homepage
*/

get_header(); ?>

	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">

			<div id="hero">
				<!-- Howard Center Staff Pic -->
			</div>

			<div id="langWelcome">
				<img src="<?php  echo get_template_directory_uri(); ?>/assets/images/languages.png" alt="Welcome in All different languages"/>
			</div>

		    <main class="main small-12 medium-12 large-12 cell" role="main">

						<!-- ICON Area -->
						<div class="useIcons grid-x">

							<div class="cell small-6 medium-4 large-1 large-offset-1">
								<a class="icon-button" href="developmental-services/" >
									<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/DS-icon.png" alt="Developmental Services"/>
									<h4>Developmental</h4>
									<h5>Services</h5>
								</a>
							</div>

							<div class="cell small-6 medium-4 large-1">
								<a class="icon-button" href="mental-health/" >
									<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/MH-icon.png" alt="Mental Health Services"/>
									<h4>Mental Health</h4>
									<h5>Services</h5>
								</a>
							</div>

							<div class="cell small-6 medium-4 large-1">
								<a class="icon-button" href="substance-use-and-recovery/" >
									<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/SU-icon.png" alt="Substance Use & Recovery Services"/>
									<h4>Substance Use & Recovery</h4>
									<h5>Services</h5>
								</a>
							</div>

							<div class="cell small-6 medium-4 large-1">
								<a class="icon-button" href="#" >
									<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/First-Call-4c.png" alt="First Call for Help"/>
									<h4>Crisis</h4>
									<h5>Services</h5>
								</a>
							</div>
							<div class="cell small-6 medium-4 large-1">
								<a class="icon-button" href="#" >
									<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/children-icon.png" alt="Children & Youth Services"/>
									<h4>For Children & Youth</h4>
								</a>
							</div>
							<div class="cell small-6 medium-4 large-1">
								<a class="icon-button" href="#" >
									<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/adult-icon.png" alt="Adult Services"/>
									<h4>For Adults</h4>
								</a>
							</div>
							<div class="cell small-6 medium-4 large-1">
								<a class="icon-button" href="#" >
									<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/families-icon.png" alt="Family Services"/>
									<h4>For Families</h4>
								</a>
							</div>
						</div>

						<!-- FAQ & Search -->
						<h3 class="needHelp">Need Help finding something?</h3>
						<div class="help grid-x grid-padding-x">

							<div class="cell small-6 medium-4 large-3 large-offset-3">

									<select name="FAQ"> <!--Supplement an id here instead of using 'text'-->
									  <option value="first" selected>FAQ Topics</option>
									  <option value="second">Other Stuff</option>
									  <option value="third">Stuff on Mental Health</option>
									</select>

							</div>

							<div class="cell small-6 medium-4 large-3">
								<?php get_search_form(); ?>
							</div>

						</div>

						<!-- Bulleting Board -->
						<div id="bulletin1" class="grid-x grid-padding-x">
							<div class="cell small-12 medium-12 large-12">
								<h3 class="bulletinHeading">Bulletin Board</h3>
							</div>
							<!-- First Row -->
							<?php $args = array('post_type' => 'bulletin_post_type' );
										$the_query = new WP_Query( $args );

									// The Loop
									if ( $the_query->have_posts() ) {
									    while ( $the_query->have_posts() ) {
												$the_query->the_post();
												// If first post add grid offset
											//	if( 0 == $the_query->current_post ) { ?>
														<!-- <div class="cell small-6 medium-4 large-4 large-offset-1"> -->
												<?php //} else {
													// return to normal markup
													?><div class="cell small-6 medium-4 large-4">	<?php
												//} ?>
															<a href="<?php the_field('bulletin_link'); ?>" class="bulletinLink">

																	<?php // Return the bulletin Image
																	echo get_the_post_thumbnail( $page->ID, 'bulletin-featured' );

																	// Post Info for Hover State ?>
																	<div class="post-info <?php the_field('bulletin_color');?>">
																		<?php the_content();?>
																	</div>
															</a>
									        </div> <?php
									    }
									    /* Restore original Post Data */
									    wp_reset_postdata();
									} else {
									    // no posts found
									}
									?>

							</div>

							<!-- Second Row -->
							<div id="bulletin2" class="grid-x grid-padding-x">

									<div class="cell small-6 medium-4 large-4 jobs">
										<div>
											<h3>Join Our Team. <br/> Help Your Community.</h3>
											<ul>
												<li><a href="#">Case Manager - Safe Recovery</a></li>
												<li><a href="#">Job Title Number 2</a></li>
												<li><a href="#">Ovenight House Leader</a></li>
											</ul>
											<a class="button orange small">Apply Now</a>
										</div>
									</div>

									<div class="cell small-6 medium-4 large-4 directions">
											<h4>Directions & Locations</h4>
											<a href="#">
												<div class="mapCircle">
													<img src="<?php  echo get_template_directory_uri(); ?>/assets/images/map.png" alt="Howard Center Maps"/>
												</div>
											</a>
									</div>

									<div class="cell small-6 medium-4 large-4 twitter">
										<div>
											<h3>Twitter Feed</h3>
											<?php twitter_sidebar(); ?>
										</div>
									</div>

								</div>

						</div>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
