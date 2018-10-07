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
              <a href="/email-newsletter/">
              	<h4> Sign Up for Our Newsletter</h4> <i class="fi-arrow-right"></i>
              </a>
	    			</div>

            <div class="small-12 medium-6 large-4 cell latest-news">
              <a href="/category/news-archive/">
                <span class="circle"><i class="fi-megaphone"></i></span><h4>Read the Latest News </h4>
              </a>
	    			</div>

            <div class="small-12 medium-12 large-4 cell social">
                <h4> Connect with Us </h4>
                <a href="http://www.facebook.com/pages/HowardCenter/106516727431" target="_blank"><span class="circle"><i class="fi-social-facebook"></i></span></a>
                <a href="https://twitter.com/HowardCenterVT" target="_blank"><span class="circle"><i class="fi-social-twitter"></i></span></a>
                <a href="http://www.linkedin.com/company/howardcenter" target="_blank"><span class="circle"><i class="fi-social-linkedin"></i></span></a>
                <a href="/email-newsletter/"><span class="circle"><i class="fi-mail"></i></span></a>
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

                          <li> <a href="<?php the_sub_field('quick_link_link')?>"><?php the_sub_field('quick_link_text');?></a></li>   <?php

                        endwhile;

                    else :
                        // no rows found
                    endif;
                    ?>
                </ul>

              </div>

              <div class="small-12 medium-6 large-3 cell">
                <a class="button orange" target="_blank" href="https://54461.thankyou4caring.org/">Donate</a>
                <ul class="adminLinks">
                  <?php
                  // check if the repeater field has rows of data
                    if( have_rows('donate_column_admin_links', 'option') ):

                      // loop through the rows of data
                        while ( have_rows('donate_column_admin_links', 'option') ) : the_row();   ?>

                          <li> <a href="<?php the_sub_field('admin_link')?>"><?php the_sub_field('admin_link_text');?></a></li>   <?php

                        endwhile;

                    else :
                        // no rows found
                    endif;
                    ?>

                </ul>
                <p>
                  <?php the_field('ada', 'option'); ?>
                </p>
              </div>

            <div class="small-12 medium-12 large-12 cell copy">
              <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. | <a href="/privacy-policy">Privacy Policy</a></p>
            </div>

          </div><!-- end .bottom-footer -->

				</footer> <!-- end .footer -->

			</div>  <!-- end .off-canvas-content -->

		</div> <!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-10830303-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-10830303-1');
    </script>


	</body>

</html> <!-- end page -->