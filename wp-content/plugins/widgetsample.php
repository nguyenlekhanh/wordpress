<?php
/*
Plugin Name: Test Widget
Description: create widget item.
Author: []
Version: 1.0
Author URI: http://google.com
*/


/*
 * init widget item
 */
//----widgets----
add_action( 'widgets_init', 'create_sample_widget' );
function create_sample_widget() {
	register_widget('Sample_Widget');
}


/**
 * class Sample_Widget
 */
class Sample_Widget extends WP_Widget {
	/**
	 * widget: name, base ID
	 */
	function __construct() {
		parent::__construct (
	      'sample_widget', // id  widget
	      'Sample Widget', // name widget
	      array(
	          'description' => 'description widget'
	      )
	    );

	}


	/**
	 * form option for widget
	 */
	function form( $instance ) {
		parent::form( $instance );

		$default = array(
			'title' => 'Title widget'
		);


		$instance = wp_parse_args( (array) $instance, $default);


		$title = esc_attr( $instance['title'] );


		//Hiển thị form trong option của widget
		echo 'Title <input class="widefat" type="text" name="'.$this->get_field_name('title').'" value="'.$title.'" />';

	}


	/**
	 * save widget form
	 */


	function update( $new_instance, $old_instance ) {

		parent::update( $new_instance, $old_instance );


		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		return $instance;
	}


	/**
	 * Show widget
	 */


	function widget( $args, $instance ) {

		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );


		echo $before_widget;


		echo $before_title.$title.$after_title;

		echo "ABC XYZ";


		echo $after_widget;
	}

}