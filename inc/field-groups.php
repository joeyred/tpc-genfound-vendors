<?php
/* Fire our meta box setup function on the post editor screen. */
add_action( 'load-post.php', 'tpcvendor_meta_boxes_setup' );
add_action( 'load-post-new.php', 'tpcvendor_meta_boxes_setup' );

function tpcvendor_meta_boxes_setup() {
	add_action('add_meta_boxes', 'tpcvendor_add_meta_boxes');

	add_action( 'save_post', 'tpcvendor_save_meta_box', 10, 2 );
}

function tpcvendor_add_meta_boxes() {

	add_meta_box(
	    'tpcvendor-heading',      // Unique ID
	    esc_html__( 'Heading', PLUGIN_DOMAIN ),    // Title
	    'tpcvendor_heading_meta_box',   // Callback function
	    'vendor',         // Admin page (or post type)
	    'normal',         // Context
	    'default'         // Priority
    );
}

function tpcvendor_heading_meta_box( $object, $box ) { 
	wp_nonce_field( basename( __FILE__ ), 'tpcvendor_heading_nonce' );
	?>

	<div class="row">
		<div class="small-12 columns">
			<label for="tpcvendor-heading"><?php _e( "Heading", PLUGIN_DOMAIN ); ?>
    		<input class="widefat" type="text" name="tpcvendor-heading" id="tpcvendor-heading" value="<?php echo esc_attr( get_post_meta( $object->ID, 'tpcvendor-heading', true ) ); ?>" />
    		</label>
		</div>
	</div>



<?php
}

function tpcvendor_save_meta_box() {

	 /* Verify the nonce before proceeding. */
    if ( !isset( $_POST['tpcvendor_heading_nonce'] ) || !wp_verify_nonce( $_POST['tpcvendor_heading_nonce'], basename( __FILE__ ) ) )
    	return $post_id;

	/* Get the post type object. */
    $post_type = get_post_type_object( $post->post_type );

    /* Check if the current user has permission to edit the post. */
  	if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
    	return $post_id;

    /* Get the posted data and sanitize it for use as an HTML class. */
  	$new_meta_value = ( isset( $_POST['tpcvendor-heading'] ) ? sanitize_html_class( $_POST['tpcvendor-heading'] ) : '' );

  	/* Get the meta key. */
  	$meta_key = 'tpcvendor_heading';

	/* Get the meta value of the custom field key. */
	$meta_value = get_post_meta( $post_id, $meta_key, true );

	/* If a new meta value was added and there was no previous value, add it. */
	if ( $new_meta_value && '' == $meta_value )
	add_post_meta( $post_id, $meta_key, $new_meta_value, true );

	/* If the new meta value does not match the old value, update it. */
	elseif ( $new_meta_value && $new_meta_value != $meta_value )
	update_post_meta( $post_id, $meta_key, $new_meta_value );

	/* If there is no new meta value but an old value exists, delete it. */
	elseif ( '' == $new_meta_value && $meta_value )
	delete_post_meta( $post_id, $meta_key, $meta_value );


}