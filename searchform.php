<?php
/**
 * The template for displaying search form
 */
 ?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
    <div class="search">
        <i class="fi-magnifying-glass"></i>
		    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" />
    </div>
	</label>
	<!-- <input type="submit" class="search-submit button" value="<?php //echo esc_attr_x( 'Search', 'jointswp' ) ?>" />-->
</form>