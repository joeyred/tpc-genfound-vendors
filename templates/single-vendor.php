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

?>

<?php get_header(); ?>

<!-- LOGO HEADER -->

  <?php tpcvendors_display_image( 'heading_logo' ); ?>


<!-- ROW 1 - HEADING -->

<div class="row"><!-- ROW OPEN -->

  <div class="columns small-12 hide-for-large-up"><!-- Title - Right -->
    <h2><?php the_field( 'heading' ); ?></h2>
  </div>

  <div class="columns medium-6"><!-- Media - Left -->

    <div class="flex-video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/s4ItaOEyKiw" frameborder="0" allowfullscreen></iframe>
    </div>

  </div>

  <div class="columns medium-6"><!-- Subheader - Right -->

  <h2 class="show-for-large-up"><?php the_field( 'heading' ); ?></h2>

  <?php the_field( 'sub_heading' ); ?>

  <a href="<?php the_field( 'affiliate_link' ); ?>" class="button expand"><?php the_field( 'button1_label' ); ?></a><!-- Call to Action Button 1 -->

  </div>

</div> <!-- ROW CLOSE -->

<!-- ROW 2 - INFO BOXES -->

<div class="row" data-equalizer> <!-- Use Equalizer Markup -->

  <div class="columns small-12 medium-6 large-3" data-equalizer-watch> <!-- COLUMN -->
    <div class="info-box">
      <span class="fa fa-<?php the_field( 'infobox1_icon' ); ?>"></span>  

      <h3><?php the_field( 'infobox1_title' ); ?></h3>

      <?php the_field( 'infobox1_content' ); ?>

    </div> <!-- INFO BOX CLOSE -->
  </div> <!-- COLUMN CLOSE -->

  <div class="columns small-12 medium-6 large-3" data-equalizer-watch> <!-- COLUMN -->
    <div class="info-box">
      <span class="fa fa-<?php the_field( 'infobox2_icon' ); ?>"></span>  

      <h3><?php the_field( 'infobox2_title' ); ?></h3>

      <?php the_field( 'infobox2_content' ); ?>

    </div> <!-- INFO BOX CLOSE -->
  </div> <!-- COLUMN CLOSE -->

  <div class="columns small-12 medium-6 large-3" data-equalizer-watch> <!-- COLUMN -->
    <div class="info-box">
      <span class="fa fa-<?php the_field( 'infobox3_icon' ); ?>"></span>  

      <h3><?php the_field( 'infobox3_title' ); ?></h3>

      <?php the_field( 'infobox3_content' ); ?>

    </div> <!-- INFO BOX CLOSE -->
  </div> <!-- COLUMN CLOSE -->

  <div class="columns small-12 medium-6 large-3" data-equalizer-watch> <!-- COLUMN -->
    <div class="info-box">
      <span class="fa fa-<?php the_field( 'infobox4_icon' ); ?>"></span>  

      <h3><?php the_field( 'infobox4_title' ); ?></h3>

      <?php the_field( 'infobox4_content' ); ?>

    </div> <!-- INFO BOX CLOSE -->
  </div> <!-- COLUMN CLOSE -->

</div> <!-- ROW CLOSE -->

<!-- ROW 3 - MEET THE STAFF -->

<div class="row"><!-- ROW OPEN -->

  <!-- STAFF 1 -->
  <div class="columns large-6">
    <div class="row">
      <div class="columns small-5">
        <?php tpcvendors_display_image( 'staff_avatar1' ); ?>
      </div>
      
      <div class="columns small-7">

        <h3><?php the_field( 'staff_name1' ); ?></h3>

        <h4><?php the_field( 'staff_title1' ); ?></h4> 

      </div>
    </div>
    <div class="columns small-12">

      <?php the_field( 'staff_description1' ); ?>

    </div>
  </div>
  <!-- STAFF 2 -->
 <div class="columns large-6">
    <div class="row">
      <div class="columns small-5">
        <?php tpcvendors_display_image( 'staff_avatar2' ); ?>
      </div>
      
      <div class="columns small-7">

        <h3><?php the_field( 'staff_name2' ); ?></h3>

        <h4><?php the_field( 'staff_title2' ); ?></h4> 
        
      </div>
    </div>
    <div class="columns small-12">

      <?php the_field( 'staff_description2' ); ?>

    </div>
  </div>

</div><!-- ROW CLOSE -->

<!-- EXTRA CONTENT -->

<!-- <div class="row"> --><!-- ROW OPEN -->

<!-- </div> --><!-- ROW CLOSE -->

<!-- MAIN CONTENT -->

<div class="row"><!-- ROW OPEN -->

<!-- ADD EXTRA CONTENT FIELD -->

</div><!-- ROW CLOSE -->

<div class="row"><!-- ROW OPEN -->
<div class="large-8 medium-9 medium-centered columns">
  <a href="<?php the_field( 'affiliate_link' ); ?>" class="button expand"><?php the_field( 'button2_label' ); ?></a>
</div>  

</div><!-- ROW CLOSE -->

  <!-- body content here -->

<?php get_footer(); ?>  