<?php get_header(); ?>

<!-- LOGO HEADER -->

  <img src="file:///Users/brianhayes/Sites/Foundation%20Projects/tests/img/DIY_homepage.png" alt="Logo">


<!-- ROW 1 - HEADING -->

<div class="row"><!-- ROW OPEN -->

  <div class="columns small-12"><!-- Title - Right -->
    <h2>Expert Video-based Tutorials that Insure You Provide Expert Service AND Get Paid!</h2>
    </div>

  <div class="columns medium-6"><!-- Media - Left -->

    <div class="flex-video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/s4ItaOEyKiw" frameborder="0" allowfullscreen></iframe>
    </div>

  </div>

  <div class="columns medium-6"><!-- Subheader - Right -->

  <h3>IRS Audits, Exams and Collections are Skyrocketing!</h3>

  <h4>Make Sure Your Clients Get Expert Service in This Critical Area with!</h4>

  <a href="#" class="button expand">Call to Action</a><!-- Call to Action Button 1 -->

  </div>

</div> <!-- ROW CLOSE -->

<!-- ROW 2 - INFO BOXES -->

<div class="row" data-equalizer> <!-- Use Equalizer Markup -->

  <div class="columns small-12 medium-6 large-3" data-equalizer-watch> <!-- COLUMN -->
    <div class="info-box">
      <span class="fa fa-laptop"></span>  

      <h3>Visual Tutorials</h3>

      <p>Video and PDF eBook tutorials that give you exactly the information you need, as well as real world application and examples!</p>
    </div> <!-- INFO BOX CLOSE -->
  </div> <!-- COLUMN CLOSE -->

  <div class="columns small-12 medium-6 large-3" data-equalizer-watch> <!-- COLUMN -->
    <div class="info-box">
      <span class="fa fa-laptop"></span>  

      <h3>Visual Tutorials</h3>

      <p>Video and PDF eBook tutorials that give you exactly the information you need, as well as real world application and examples!</p>
    </div> <!-- INFO BOX CLOSE -->
  </div> <!-- COLUMN CLOSE -->

  <div class="columns small-12 medium-6 large-3" data-equalizer-watch> <!-- COLUMN -->
    <div class="info-box">
      <span class="fa fa-laptop"></span>  

      <h3>Visual Tutorials</h3>

      <p>Video and PDF eBook tutorials that give you exactly the information you need, as well as real world application and examples!</p>
    </div> <!-- INFO BOX CLOSE -->
  </div> <!-- COLUMN CLOSE -->

  <div class="columns small-12 medium-6 large-3" data-equalizer-watch> <!-- COLUMN -->
    <div class="info-box">
      <span class="fa fa-laptop"></span>  

      <h3>Visual Tutorials</h3>

      <p>Video and PDF eBook tutorials that give you exactly the information you need, as well as real world application and examples!</p>
    </div> <!-- INFO BOX CLOSE -->
  </div> <!-- COLUMN CLOSE -->

</div> <!-- ROW CLOSE -->

<!-- ROW 3 - MEET THE STAFF -->

<div class="row"><!-- ROW OPEN -->

  <!-- STAFF 1 -->
  <div class="columns large-6">
    <div class="row">
      <div class="columns small-5">
        <img src="file:///Users/brianhayes/Sites/Foundation%20Projects/tests/img/allen2b.jpg" alt="Allen">
      </div>
      
      <div class="columns small-7">
        <h3>Allen Scioli</h3>
        <h4>President</h4> 
      </div>
    </div>
    <div class="columns small-12">
      <p>A former field assistance tax specialist and revenue officer with the SB/SE division of the Internal Revenue Service. He has been involved in the federal taxation arena for over fourteen years, which includes practicing in a top national public accounting firm and the U.S. Government.</p>

      <p>Since forming Scioli and Associates, a tax representation firm in Saginaw, Michigan, Mr. Scioli, a specialist in IRS Offers in Compromise, has saved clients millions of dollars with hundreds of approved offers. Additionally, Allen has served as an expert witness in many State Tax Tribunal cases, U.S. Bankruptcy & District Court cases, and U.S. Dept. of Justice cases dealing with the Tax Division. Mr. Scioli is a former U.S. Treasury Secretary Appointee and a member of the IRS's Taxpayer Advocacy Panel (TAP).</p>
    </div>
  </div>
  <!-- STAFF 2 -->
  <div class="columns large-6">
    <div class="row">
      <div class="columns small-5">
        <img src="file:///Users/brianhayes/Sites/Foundation%20Projects/tests/img/allen2b.jpg" alt="Allen">
      </div>
      
      <div class="columns small-7">
        <h3>Allen Scioli</h3>
        <h4>President</h4> 
      </div>
    </div>
    <div class="columns small-12">
      <p>A former field assistance tax specialist and revenue officer with the SB/SE division of the Internal Revenue Service. He has been involved in the federal taxation arena for over fourteen years, which includes practicing in a top national public accounting firm and the U.S. Government.</p>

      <p>Since forming Scioli and Associates, a tax representation firm in Saginaw, Michigan, Mr. Scioli, a specialist in IRS Offers in Compromise, has saved clients millions of dollars with hundreds of approved offers. Additionally, Allen has served as an expert witness in many State Tax Tribunal cases, U.S. Bankruptcy & District Court cases, and U.S. Dept. of Justice cases dealing with the Tax Division. Mr. Scioli is a former U.S. Treasury Secretary Appointee and a member of the IRS's Taxpayer Advocacy Panel (TAP).</p>
    </div>
  </div>

</div><!-- ROW CLOSE -->

<!-- EXTRA CONTENT -->

<div class="row"><!-- ROW OPEN -->

</div><!-- ROW CLOSE -->

<!-- MAIN CONTENT -->

<div class="row"><!-- ROW OPEN -->

</div><!-- ROW CLOSE -->

<?php

/*
*  get all custom fields and dump for testing
*/

$fields = get_fields();
var_dump( $fields ); 

/*
*  get all custom fields, loop through them and load the field object to create a label => value markup
*/

$fields = get_fields();

if( $fields )
{
  foreach( $fields as $field_name => $value )
  {
    // get_field_object( $field_name, $post_id, $options )
    // - $value has already been loaded for us, no point to load it again in the get_field_object function
    $field = get_field_object($field_name, false, array('load_value' => false));

    echo '<div>';
      echo '<h3>' . $field_name . '</h3>';
      echo $value;
    echo '</div>';
  }
}

?>


  <!-- body content here -->

<?php get_footer(); ?>  