<?php

// Widgets


/**
 *
 */
class Social_Icons_Widget extends WP_Widget {
	//setup the widget name, description, etc...
	public function __construct() {
		$widget_options = array(
			'classname' 	=> 'social-icons-widget',
			'description' 	=> 'Social Icons Widget',
		);
		parent::__construct( 'social_icons', 'Social Icons', $widget_options );
	}

	//back-end display of widget
	public function form( $instance ){

	}


	//front-end display of widget
	public function widget( $args, $instance ) {

	}

}

add_action( 'widgets_init', function() {
	register_widget( 'Social_Icons_Widget' );
} );
