<?php
/*
Plugin Name: Meta Box
Author: 
Description: create meta box
*/


/**
 create meta box
**/
function custom_meta_box()
{
	add_meta_box( 'information', 'Information', 'imformation_output', 'post' );
}
add_action( 'add_meta_boxes', 'custom_meta_box' );


function imformation_output($post)
{
	$link_download = get_post_meta( $post->ID, '_link_download', true );
	//create nonce for security
	wp_nonce_field( 'save_information', 'information_nonce' );
	// create Link Download field
	echo ( '<label for="link_download">Link Download: </label>' );
	echo ('<input type="text" id="link_download" name="link_download" value="'.esc_attr( $link_download ).'" />');
}

/**
 save meta box
 @param post_id
**/
function imformation_save( $post_id )
{
	//check nonce
	$information_nonce = $_POST['information_nonce'];

	if( !isset( $thongtin_nonce ) ) {
		return;
	}

	if( !wp_verify_nonce( $information_nonce, 'save_information' ) ) {
		return;
	}

	$link_download = sanitize_text_field( $_POST['link_download'] );
	update_post_meta( $post_id, '_link_download', $link_download );
}
add_action( 'save_post', 'imformation_save' );