<?php

// Widgets


/**
 * Adds Foo_Widget widget.
 */
class Social_Icons_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'social_icons_widget', // Base ID
            'Social Icons', // Name
            array( 'description' => __( 'Social Icons Widget', 'social_icons_widget' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract( $args );
        $title 		= apply_filters( 'widget_title', $instance['title'] );
		$facebook 	= $instance['facebook'];
		$twitter 	= $instance['twitter'];
		$linkedin 	= $instance['linkedin'];
		$instagram	= $instance['instagram'];
		$youtube 	= $instance['youtube'];


        echo $before_widget;
        if ( ! empty( $title ) ) {
            echo $before_title . $title . $after_title;
        }

		if ( ! empty( $facebook ) ) {
			echo '<a href="'.$instance['facebook'].'"<i class="fab fa-facebook fa-3x"></i></a>';
		}

		if ( ! empty( $twitter ) ) {
			echo '<a href="'.$instance['twitter'].'"<i class="fab fa-twitter fa-3x"></i></a>';
		}

		if ( ! empty( $linkedin ) ) {
			echo '<a href="'.$instance['linkedin'].'"<i class="fab fa-linkedin fa-3x"></i></a>';
		}

		if ( ! empty( $instagram ) ) {
			echo '<a href="'.$instance['instagram'].'"<i class="fab fa-instagram fa-3x"></i></a>';
		}

		if ( ! empty( $youtube ) ) {
			echo '<a href="'.$instance['youtube'].'"<i class="fab fa-youtube fa-3x"></i></a>';
		}


        echo $after_widget;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( '', 'social_icons_widget' );
        }

		$facebook = ! empty( $instance['facebook'] ) ? $instance['facebook']: esc_html__('', 'social_icons_widget');
		$twitter = ! empty( $instance['twitter'] ) ? $instance['twitter']: esc_html__('', 'social_icons_widget');
		$linkedin = ! empty( $instance['linkedin'] ) ? $instance['linkedin']: esc_html__('', 'social_icons_widget');
		$instagram = ! empty( $instance['instagram'] ) ? $instance['instagram']: esc_html__('', 'social_icons_widget');
		$youtube = ! empty( $instance['youtube'] ) ? $instance['youtube']: esc_html__('', 'social_icons_widget');


        ?>

		<!--- Title --->
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?>
			</label>
            <input
				class="widefat"
				id="<?php echo $this->get_field_id( 'title' ); ?>"
				name="<?php echo $this->get_field_name( 'title' ); ?>"
				type="text"
				value="<?php echo esc_attr( $title ); ?>" />
         </p>

		 <!--- Facebook --->
		 <p>
			 <label for="<?php echo $this->get_field_name( 'facebook' ); ?>"><?php _e( 'Facebook:' ); ?>
			</label>
			 <input
				class="widefat"
				id="<?php echo $this->get_field_id( 'facebook' ); ?>"
				name="<?php echo $this->get_field_name( 'facebook' ); ?>"
				type="text"
				value="<?php echo esc_attr( $facebook ); ?>" />
		  </p>

		  <!--- Twitter --->
		  <p>
			  <label for="<?php echo $this->get_field_name( 'twitter' ); ?>"><?php _e( 'Twitter:' ); ?>
			 </label>
			  <input
				 class="widefat"
				 id="<?php echo $this->get_field_id( 'twitter' ); ?>"
				 name="<?php echo $this->get_field_name( 'twitter' ); ?>"
				 type="text"
				 value="<?php echo esc_attr( $twitter ); ?>" />
		   </p>

		   <!--- Linkedin --->
		<p>
			<label for="<?php echo $this->get_field_name( 'linkedin' ); ?>"><?php _e( 'Linkedin:' ); ?>
		   </label>
			<input
			   class="widefat"
			   id="<?php echo $this->get_field_id( 'linkedin' ); ?>"
			   name="<?php echo $this->get_field_name( 'linkedin' ); ?>"
			   type="text"
			   value="<?php echo esc_attr( $linkedin ); ?>" />
		 </p>

		 <!--- Instagram --->
		<p>
			<label for="<?php echo $this->get_field_name( 'instagram' ); ?>"><?php _e( 'Instagram:' ); ?>
		   </label>
			<input
			   class="widefat"
			   id="<?php echo $this->get_field_id( 'instagram' ); ?>"
			   name="<?php echo $this->get_field_name( 'instagram' ); ?>"
			   type="text"
			   value="<?php echo esc_attr( $instagram ); ?>" />
		 </p>

		 <!--- youtube --->
		<p>
			<label for="<?php echo $this->get_field_name( 'youtube' ); ?>"><?php _e( 'youtube:' ); ?>
		   </label>
			<input
			   class="widefat"
			   id="<?php echo $this->get_field_id( 'youtube' ); ?>"
			   name="<?php echo $this->get_field_name( 'youtube' ); ?>"
			   type="text"
			   value="<?php echo esc_attr( $youtube ); ?>" />
		 </p>
    <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['facebook'] = ( !empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
		$instance['twitter'] = ( !empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
		$instance['linkedin'] = ( !empty( $new_instance['linkedin'] ) ) ? strip_tags( $new_instance['linkedin'] ) : '';
		$instance['instagram'] = ( !empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
		$instance['youtube'] = ( !empty( $new_instance['youtube'] ) ) ? strip_tags( $new_instance['youtube'] ) : '';

        return $instance;
    }

} // class Foo_Widget

add_action( 'widgets_init', function() {
	register_widget( 'Social_Icons_Widget' );
} );
