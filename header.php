<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
	    <?php } ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/foundation-icons/foundation-icons.css" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">

			<!-- Load off-canvas container. Feel free to remove if not using. -->
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

			<div class="off-canvas-content" data-off-canvas-content>

				<header class="header" role="banner">

					 <!-- This navs will be applied to the topbar, above all content
						  To see additional nav styles, visit the /parts directory -->
					 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>

           <!-- Logo & Call Buttons -->
           <div class="headerMain grid-x grid-margin-x grid-padding-x">

             <div class="cell small-12 large-6">
                <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/hc-logo.png" alt="<?php echo get_bloginfo( 'name' );?>"/></a>
             </div>

             <div class="cell small-12 medium-6 large-3">

                <a href="tel:8024887777">
                  <div class="helpNow">
                     <span>Need Help Now?</span>
                     <span itemprop="telephone" class="number">802-488-7777</span>

                   <!-- <img class="firstCall" src="<?php //echo get_template_directory_uri(); ?>/assets/images/First-Call-4c.png" alt="Call for Help Now"/> -->
                  </div>
                 </a>
              </div>

              <div class="cell small-12 medium-6 large-3">

                 <div class="mainNumber">
                   <span>Main Number</span>
                   <span itemprop="telephone" class="number"><a href="tel:8024886000">802-488-6000</a></span>
                   <a href="mailto:info@howardcenter.org"/>
                    <div class="mainEmail">
                      Email <i class="fi-mail"></i>
                    </div>
                  </a>
                 </div>
              </div>

             </div>

           </div>

          <div class="megaMenu">
            <?php hc_mega_nav(); ?>
          </div>

				</header> <!-- end .header -->