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
						<div id="bulletin">

							<!-- First Row -->

							<div class="grid-x grid-padding-x">

								<div class="cell small-6 medium-4 large-3">

								</div>

								<div class="cell small-6 medium-4 large-3">

								</div>

								<div class="cell small-6 medium-4 large-3">

								</div>

							</div>

							<!-- Second Row -->

							<div class="grid-x grid-padding-x">

								<div class="cell small-6 medium-4 large-3">

								</div>

								<div class="cell small-6 medium-4 large-3">

								</div>

								<div class="cell small-6 medium-4 large-3">

								</div>

							</div>

						</div>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
