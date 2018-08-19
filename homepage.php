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
				<ul>
					<li><a href="<?php echo site_url(); ?>/welcome/">Welcome</a></li>
					<li><a href="<?php echo site_url(); ?>/welcome/bienvenue">Bienvenue</a></li>
					<li><a href="<?php echo site_url(); ?>/welcome/dobrodosli">Dobrodošli</a></li>
					<li><a href="<?php echo site_url(); ?>/welcome/ြိုဆ ို">  ြိုဆ ို</a></li>
					<li><a href="<?php echo site_url(); ?>/welcome/歡迎">歡迎</a></li>
					<li><a href="<?php echo site_url(); ?>/welcome/स्वागत छ">स्वागत छ</a></li>
				</ul>
				<ul>
					<li><a href="<?php echo site_url(); ?>/welcome/soo-dhawee">Soo dhawee</a></li>
					<li><a href="<?php echo site_url(); ?>/welcome/bienvenido">Bienvenido</a></li>
					<li><a href="<?php echo site_url(); ?>/welcome/karibu">Karibu</a></li>
					<li><a href="<?php echo site_url(); ?>/welcome/ཕེབས་པར་དགའ་བསུ་ཞུ།">ཕེབས་པར་དགའ་བསུ་ཞུ།</a></li>
					<li><a href="<?php echo site_url(); ?>/welcome/chao-mung">Chào mừng</a></li>
					<li><a href="<?php echo site_url(); ?>/welcome/Добродошли">Добродошли</a></li>
					<li><a href="<?php echo site_url(); ?>/welcome/sa-dhowaw">Sa dhowaw</a></li>
				</ul>

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
								<a class="icon-button" href="first-call-for-chittenden-county/" >
									<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/First-Call-4c.png" alt="First Call for Help"/>
									<h4>Crisis</h4>
									<h5>Services</h5>
								</a>
							</div>
							<div class="cell small-6 medium-4 large-1">
								<a class="icon-button" href="children-youth-all/" >
									<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/children-icon.png" alt="Children & Youth Services"/>
									<h4>For Children & Youth</h4>
								</a>
							</div>
							<div class="cell small-6 medium-4 large-1">
								<a class="icon-button" href="adults-all" >
									<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/adult-icon.png" alt="Adult Services"/>
									<h4>For Adults</h4>
								</a>
							</div>
							<div class="cell small-6 medium-4 large-1">
								<a class="icon-button" href="families-all" >
									<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/families-icon.png" alt="Family Services"/>
									<h4>For Families</h4>
								</a>
							</div>
						</div>

						<!-- FAQ & Search -->
						<h3 class="needHelp">Need Help finding something?</h3>
						<div class="help grid-x grid-padding-x">

							<div class="cell small-6 medium-4 large-3 large-offset-3">

								<ul class="dropdown menu" data-dropdown-menu>
									<li>Frequently Asked questions
										<ul class="menu">
										  <li><a href="/directions-locations">Howard Center hours & locations</a></li>
										  <li><a href="/faq-frequently-asked-questions/#services">What services does Howard Center offer?</a></li>
										  <li><a href="/faq-frequently-asked-questions/#insurance">What types of insurance does Howard Center accept?</a></li>
										  <li><a href="/faq-frequently-asked-questions/#crisis">What is considered a “crisis”?</a></li>
											<li><a href="/faq-frequently-asked-questions/#call">If I call the crisis hotline, what will happen?</a></li>
											<li><a href="/faq-frequently-asked-questions/#eligible">Am I eligible for services?</a></li>
											<li><a href="/faq-frequently-asked-questions/#cancel">How do I cancel an appointment with my provider?</a></li>
											<li><a href="/faq-frequently-asked-questions/#records">Where can I get a copy of my records?</a></li>
											<li><a href="/faq-frequently-asked-questions/#idrp">How do I access services at the Impaired Driver Rehabilitation Program, formerly CRASH?</a></li>
											<li><a href="/faq-frequently-asked-questions/#assessment">Where can I get a drug or alcohol assessment?</a></li>
											<li><a href="/faq-frequently-asked-questions/#appointment">How do I make an initial appointment?</a></li>
											<li><a href="/faq-frequently-asked-questions/#newappointment">What do I need for my first appointment?</a></li>
											<li><a href="/faq-frequently-asked-questions/#intern">Who do I contact to set up an internship placement?</a></li>
										</ul>
									</li>
								</ul>

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
							<?php $args = array('post_type' => 'bulletin_post_type',
																		'posts_per_page'  => '3'
						 										);
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
													?><div class="cell small-12 medium-6 large-4">	<?php
												//} ?>
															<a href="<?php the_field('bulletin_link'); ?>" class="bulletinLink">

																	<?php // Return the bulletin Image
																	 the_post_thumbnail('bulletin-featured');

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

									<div class="cell small-12 medium-6 large-4 jobs">
										<div>
											<h3><?php the_field('employment_widget_title', 'option');?></h3>
											<ul>
												<?php
												// check if the repeater field has rows of data
												if( have_rows('job_postings', 'option') ):

												 	// loop through the rows of data
												    while ( have_rows('job_postings', 'option') ) : the_row();

												        ?><li>
																		<a href="<?php the_sub_field('link', 'option');?>"/> <?php the_sub_field('job_title', 'option');?></a>
																	</li>
																	<?php

												    endwhile;

												else :

												    // no rows found

												endif; ?>

											</ul>
											<a class="button orange small" href="<?php the_field('button_link', 'option');?>"><?php the_field('job_button_text','option');?></a>
										</div>
									</div>

									<div class="cell small-12 medium-6 large-4 directions">
											<h4>Directions & Locations</h4>
											<a href="/directions-locations">
												<div class="mapCircle">
													<img src="<?php  echo get_template_directory_uri(); ?>/assets/images/map.png" alt="Howard Center Maps"/>
												</div>
											</a>
									</div>

									<div class="cell small-12 medium-12 large-4 twitter">
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
