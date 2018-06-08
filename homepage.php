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

						<div class="useIcons grid-x">

							<div class="cell small-6 medium-4 large-1 large-offset-1">
									<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/DS-icon.png" alt="Developmental Services"/>
									<h4>Developmental</h4>
									<h5>Services</h5>
							</div>

							<div class="cell small-6 medium-4 large-1">
								<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/MH-icon.png" alt="Mental Health Services"/>
								<h4>Mental Health</h4>
								<h5>Services</h5>
							</div>

							<div class="cell small-6 medium-4 large-1">
								<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/SU-icon.png" alt="Substance Use & Recovery Services"/>
								<h4>Substance Use & Recovery</h4>
								<h5>Services</h5>
							</div>

							<div class="cell small-6 medium-4 large-1">
								<img class="icon" src="<?php  echo get_template_directory_uri(); ?>/assets/images/First-Call-4c.png" alt="First Call for Help"/>
								<h4>Crisis</h4>
								<h5>Services</h5>
							</div>
							<div class="cell small-6 medium-4 large-1"></div>
							<div class="cell small-6 medium-4 large-1"></div>
							<div class="cell small-6 medium-4 large-1"></div>
						</div>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
