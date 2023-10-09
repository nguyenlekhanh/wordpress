<?php

function mytheme_register_styles() {
	wp_enqueue_style('mytheme-boostrap', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

//when wordpress run this hook also run my function
add_action('wp_enqueue_scripts', 'mytheme_register_styles');
?>