<?php


function tpcvendors_display_image( $name ) {

  if( $name == 'staff_avatar1' ) {
    $image = get_field( 'staff_avatar1' );

    if( !empty($image)) {
    echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
    }
  } 

  
  if( $name == 'staff_avatar2' ) {
    $image = get_field( 'staff_avatar2' );

    if( !empty($image)) {
    echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
    }
  } 


  if( $name == 'heading_logo' ) {
    $image = get_field( 'heading_logo' );

    if( !empty($image)) {
    echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
    }
  } 

}
/**
 * Logo Header Markup
 */
function tpcvendors_frontend_logo_section() {

    $heading_logo   = tpcvendors_display_image( 'heading_logo' );

    if( !empty($heading_logo) ) {
        ?>
        <div class="row v-header-logo row-1">
            <div class="small-12 columns">
                <?php echo $heading_logo ?>
            </div>   
        </div>
        <?php         
    }
} 

/**
 * Heading
 *
 * @param $media Media Query specific markup
 * 
 */
function tpcvendors_frontend_header( $media ) {
    $heading = the_field( 'heading' );

    if( $media == 'medium' ) {
        $markup = '<div class="columns small-12 hide-for-large-up">'
                . '<h2>' .  $heading . '</h2>'
                . '</div>';
    }
    if( $media == 'large' ) {
        $markup = '<h2 class="show-for-large-up">'
                . $heading
                . '</h2>';
    }

    if( !empty($heading) ) {
        echo $markup;
    }

    
}

/**
 * Header Section
 */
/*
function tpcvendors_frontend_header_section() {
   
        $heading = the_field( 'heading' );
        $sub_heading = the_field( 'sub_heading' );
        $affiliate_link = the_field( 'affiliate_link' );
        $button_label = the_field( 'button1_label' );

        $medium_heading = tpcvendors_frontend_header( 'medium' );
        $large_heading = tpcvendors_frontend_header( 'large' );

       ?>
       <div class="row v-header-section"><!-- ROW OPEN -->

         <?php echo $medium_heading; ?>

          <div class="columns medium-6"><!-- Media - Left -->

            <div class="flex-video">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/s4ItaOEyKiw" frameborder="0" allowfullscreen></iframe>
            </div>

          </div>

          <div class="columns medium-6"><!-- Subheader - Right -->

          <?php echo $large_heading; ?>

          <?php echo ; ?>

          <a href="<?php the_field( 'affiliate_link' ); ?>" class="button expand"><?php the_field( 'button1_label' ); ?></a><!-- Call to Action Button 1 -->

          </div>

        </div> <!-- ROW CLOSE -->
        <?php
}
*/








// Class End