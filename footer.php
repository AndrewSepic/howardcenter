<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>

				<footer class="footer" role="contentinfo">

					<div class="top-footer grid-x">

						<div class="small-12 medium-6 large-4 cell newsletter">
              <a href="#">
              	<h4> Join Our Newsletter</h4> <i class="fi-arrow-right"></i>
              </a>
	    			</div>

            <div class="small-12 medium-6 large-4 cell latest-news">
              <a href="#">
                <span class="circle"><i class="fi-megaphone"></i></span><h4>Read the Latest News </h4>
              </a>
	    			</div>

            <div class="small-12 medium-6 large-4 cell social">
                <h4> Connect with Us </h4>
                <a href="#"><span class="circle"><i class="fi-social-facebook"></i></span></a>
                <a href="#"><span class="circle"><i class="fi-social-twitter"></i></span></a>
                <a href="#"><span class="circle"><i class="fi-social-linkedin"></i></span></a>
                <a href="#"><span class="circle"><i class="fi-mail"></i></span></a>
	    			</div>

					</div> <!-- end #top-footer -->

          <!--Colorbar-->
          <div class="grid-x grid-margin-x grid-padding-x colorBar"></div>

          <!-- Bottom Footer -->
          <div class="bottom-footer grid-x grid-margin-x grid-padding-x">

              <div class="small-12 medium-6 large-3 cell">
                <img class="footerLogo" src="<?php echo get_site_url();?>/wp-content/uploads/2018/06/hc-logo.png" alt="Howard Center Logo">
                <p>
                  <?php the_field('howard_center_contact_info', 'option');?>
                </p>
              </div>

              <div class="small-12 medium-6 large-3 cell">
                <h2>Our Mission</h2>
                <p>
                  <?php the_field('our_mission_text', 'option'); ?>
                </p>
                <ul class="missionLogos">
                  <?php
                  // check if the repeater field has rows of data
                    if( have_rows('our_mission_partner_logos', 'option') ):

                     	// loop through the rows of data
                        while ( have_rows('our_mission_partner_logos', 'option') ) : the_row();   ?>

                          <li> <a href="<?php the_sub_field('partner_link', 'option')?>"><img src="<?php the_sub_field('partner_logo', 'option');?>" alt="Partner Logo"/></a></li>   <?php

                        endwhile;

                    else :
                        // no rows found
                    endif;
                    ?>

                </ul>
              </div>

              <div class="small-12 medium-6 large-3 cell">
                <h2>Quick Links </h2>
                <ul class="quickLinks">
                  <?php
                  // check if the repeater field has rows of data
                    if( have_rows('quick_links', 'option') ):

                      // loop through the rows of data
                        while ( have_rows('quick_links', 'option') ) : the_row();   ?>

                          <li> <a href="<?php the_sub_field('quick_link_link', 'option')?>"><?php the_sub_field('quick_link_text', 'option');?></a></li>   <?php

                        endwhile;

                    else :
                        // no rows found
                    endif;
                    ?>
                </ul>

              </div>

              <div class="small-12 medium-6 large-3 cell">
                <a class="button orange" href="#">Donate</a>
                <ul class="adminLinks">
                  <?php
                  // check if the repeater field has rows of data
                    if( have_rows('donate_column_admin_links', 'option') ):

                      // loop through the rows of data
                        while ( have_rows('donate_column_admin_links', 'option') ) : the_row();   ?>

                          <li> <a href="<?php the_sub_field('admin_link', 'option')?>"><?php the_sub_field('admin_link_text', 'option');?></a></li>   <?php

                        endwhile;

                    else :
                        // no rows found
                    endif;
                    ?>

                </ul>
              </div>

            <div class="small-12 medium-12 large-12 cell copy">
              <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. | Privacy Policy  | Terms of Use</p>
            </div>

          </div><!-- end .bottom-footer -->

				</footer> <!-- end .footer -->

			</div>  <!-- end .off-canvas-content -->

		</div> <!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->