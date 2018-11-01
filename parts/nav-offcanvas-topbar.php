<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left show-for-medium">
		<?php joints_top_nav(); ?>
	</div>
	<div class="top-bar-right ">
		<ul class="medium-horizontal menu">
			<li class="portal"><a href="https://howardcenter.org/patient-portal/">Patient Portal</a></li>
			<li class="donate"><a target="_blank" href="https://54461.thankyou4caring.org/">Donate</a></li>
		</ul>
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>