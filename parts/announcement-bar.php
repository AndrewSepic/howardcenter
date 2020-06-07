<?php
/**
 * The template part for displaying The Announcement Bar
 */
?>

<?php
// Is the Announcement Bar actived ?
if( get_field('activate', 'option' ) ): ?>

  <?php // What type of Anncouncement?
   if( get_field('type_of_announcement', 'option') == 'informative' ):
       $type = 'info';
       $icon = 'info';
   elseif( get_field('type_of_announcement', 'option') == 'emergency'):
     $type = 'emergency';
     $icon = "alert";
   elseif( get_field('type_of_announcement', 'option') == 'relaxed'):
     $type = 'relaxed';
     $icon = "info";
  endif;
  ?>

  <div class="announcement <?php echo $type ?> grid-x grid-padding-x" style="display:none;">
    <div class="cell small-12 large-12">
        <i class="fi-<?php echo $icon ?>"></i>
        <!-- Announcement Message -->
        <h3><?php the_field('announcement_text', 'option');?></h3>
        <?php
        // If User wants button
        if( !get_field('toggle_button', 'option') ): ?>

 	       <a class="button" href="<?php the_field('announcement_button_link','option');?>"><?php the_field('button_text', 'option');?></a>

        <?php endif; ?>

       <a id="closeit">CLOSE <b>X</b></a>
    </div>
  </div>
<?php endif; ?>

<!--  Announcement Bar  END -->
