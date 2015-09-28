<?php

require( dirname(__FILE__) . '/../inc/frontend-functions.php' );

?>

<?php 

get_header(); 

?>
<div class="tpc-wrapper v-header-logo">
  <div class="row row-1">
      <div class="small-12 columns">
          <?php tpcvendors_display_image( 'heading_logo' ); ?>
      </div>   
  </div>
</div>
<!-- ROW 1 - HEADING -->
<div class="tpc-wrapper v-header-section">
  <div class="row row-2"><!-- ROW OPEN -->


    <div class="columns small-12 hide-for-large-up">
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
</div> 

<!-- ROW 2 - INFO BOXES -->
<div class="tpc-wrapper v-info-box-section">
  <div class="row row-3" data-equalizer data-equalizer-mq="medium-up"> <!-- Use Equalizer Markup -->
  
    <div class="columns small-12 medium-6 large-3" data-equalizer-watch > <!-- COLUMN -->
      <div class="info-box">
        <span class="fa fa-<?php the_field( 'infobox1_icon' ); ?>"></span>  
        <div class="box-inner">
          <h3><?php the_field( 'infobox1_title' ); ?></h3>

          <?php the_field( 'infobox1_content' ); ?>
        </div>  
      </div> <!-- INFO BOX CLOSE -->
    </div> <!-- COLUMN CLOSE -->

    <div class="columns small-12 medium-6 large-3" data-equalizer-watch> <!-- COLUMN -->
      <div class="info-box">
        <span class="fa fa-<?php the_field( 'infobox2_icon' ); ?>"></span>  
        <div class="box-inner">
          <h3><?php the_field( 'infobox2_title' ); ?></h3>

          <?php the_field( 'infobox2_content' ); ?>
        </div>
      </div> <!-- INFO BOX CLOSE -->
    </div> <!-- COLUMN CLOSE -->

    <div class="columns small-12 medium-6 large-3" data-equalizer-watch> <!-- COLUMN -->
      <div class="info-box">
        <span class="fa fa-<?php the_field( 'infobox3_icon' ); ?>"></span>  
        <div class="box-inner">
          <h3><?php the_field( 'infobox3_title' ); ?></h3>

          <?php the_field( 'infobox3_content' ); ?>
        </div>
      </div> <!-- INFO BOX CLOSE -->
    </div> <!-- COLUMN CLOSE -->

    <div class="columns small-12 medium-6 large-3" data-equalizer-watch> <!-- COLUMN -->
      <div class="info-box">
        <span class="fa fa-<?php the_field( 'infobox4_icon' ); ?>"></span>  
        <div class="box-inner">
          <h3><?php the_field( 'infobox4_title' ); ?></h3>

          <?php the_field( 'infobox4_content' ); ?>
        </div>
      </div> <!-- INFO BOX CLOSE -->
    </div> <!-- COLUMN CLOSE -->
  </div>
</div> <!-- ROW CLOSE -->

<!-- ROW 3 - MEET THE STAFF -->
<div class="tpc-wrapper v-staff-section">
  <div class="row row-4"><!-- ROW OPEN -->
    <!-- STAFF 1 -->
    <div class="columns large-6">
      <div class="staff-profile">

        <div class="row staff-header">

          <div class="columns small-4">
            <div class="avatar-wrap">
              <?php tpcvendors_display_image( 'staff_avatar1' ); ?>
            </div>
          </div>

          <div class="columns small-8">
            <div class="name-title-wrap">

              <h2><?php the_field( 'staff_name1' ); ?></h2>

              <h4><?php the_field( 'staff_title1' ); ?></h4> 

            </div>
          </div>
        </div>

        <div class="row staff-description">
          <div class="columns small-12">

            <?php the_field( 'staff_description1' ); ?>

          </div>
        </div>
      </div>
    </div>

    <!-- STAFF 2 -->
    <div class="columns large-6">
      <div class="staff-profile">

        <div class="row staff-header">

          <div class="columns small-4">
            <div class="avatar-wrap">
              <?php tpcvendors_display_image( 'staff_avatar2' ); ?>
            </div>
          </div>

          <div class="columns small-8">
            <div class="name-title-wrap">

              <h2><?php the_field( 'staff_name2' ); ?></h2>

              <h4><?php the_field( 'staff_title2' ); ?></h4> 

            </div>
          </div>
        </div>

        <div class="row staff-description">
          <div class="columns small-12">

            <?php the_field( 'staff_description2' ); ?>

          </div>
        </div>
      </div>
    </div>

  </div><!-- ROW CLOSE -->
</div><!-- WRAPPER CLOSE -->

<!-- EXTRA CONTENT -->

<!-- <div class="row"> --><!-- ROW OPEN -->

<!-- </div> --><!-- ROW CLOSE -->

<!-- MAIN CONTENT -->
<div class="tpc-wrapper">
  <div class="row"><!-- ROW OPEN -->
  <!-- ADD EXTRA CONTENT FIELD -->
  </div>
</div><!-- ROW CLOSE -->
<div class="tpc-wrapper v-cta-bottom">
  <div class="row row-5"><!-- ROW OPEN -->
    <div class="large-8 medium-9 medium-centered columns">
      <a href="<?php the_field( 'affiliate_link' ); ?>" class="button expand"><?php the_field( 'button2_label' ); ?></a>
    </div>  
  </div>
</div><!-- ROW CLOSE -->

  <!-- body content here -->

<?php get_footer(); ?>  