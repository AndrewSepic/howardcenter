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

					<div class="top-footer grid-x grid-margin-x grid-padding-x">

						<div class="small-12 medium-6 large-4 cell ">
              <a href="#">
              	<h4> Join Our Newsletter </h4>
              </a>
	    			</div>

            <div class="small-12 medium-6 large-4 cell ">
              <a href="#">
                <h4> Read the Latest News </h4>
              </a>
	    			</div>

            <div class="small-12 medium-6 large-4 cell ">
              <a href="#">
                <h4> Connect with Us </h4>
              </a>
	    			</div>

					</div> <!-- end #top-footer -->

          <!--Colorbar-->
          <div class="grid-x grid-margin-x grid-padding-x colorBar"></div>

          <!-- Bottom Footer -->
          <div class="bottom-footer grid-x grid-margin-x grid-padding-x">

              <?php footer_sidebar(); ?>

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