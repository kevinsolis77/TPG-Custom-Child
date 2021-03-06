<?php

/* Collection of Walker Classes */

	/*
		wp_nav_menu()

		<div class="menu-container">
			<ul> // start_lvl()

				<li><a><span> // start_el()

					</a></span></li> // end_el()

				</ul> // end_lvl()
			</div>
		*/
class Walker_Nav_Side extends Walker_Nav_Menu {
	var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

	function start_lvl( &$output, $depth = 0, $args = array() ) {
	  $indent = str_repeat("\t", $depth);
	  $output .= "\n$indent<ul>\n";
	}

	function end_lvl( &$output, $depth = 0, $args = array() ) {
	  $indent = str_repeat("\t", $depth);
	  $output .= "$indent</ul>\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

	  global $wp_query;
	  $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	  $class_names = $value = '';
	  $classes = empty( $item->classes ) ? array() : (array) $item->classes;

	  /* Add active class */
	  if(in_array('current-menu-item', $classes)) {
		$classes[] = 'active';
		unset($classes['current-menu-item']);
	  }

	  /* Check for children */
	  $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
	  if (!empty($children)) {
		$classes[] = 'has-sub';
	  }

	  $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
	  $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

	  $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
	  $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

	  $output .= $indent . '<li' . $id . $value . $class_names .'>';

	  $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	  $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	  $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	  $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

	  $item_output = $args->before;
	  $item_output .= '<a'. $attributes .'><span>';
	  $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
	  $item_output .= '</span></a>';
	  $item_output .= $args->after;

	  $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	function end_el( &$output, $item, $depth = 0, $args = array() ) {
	  $output .= "</li>\n";
	}
}

class Nfr_Menu_Walker extends Walker_Nav_Menu{

                /**
         * Traverse elements to create list from elements.
         *
         * Display one element if the element doesn't have any children otherwise,
         * display the element and its children. Will only traverse up to the max
         * depth and no ignore elements under that depth. It is possible to set the
         * max depth to include all depths, see walk() method.
         *
         * This method shouldn't be called directly, use the walk() method instead.
         *
         * @since 2.5.0
         *
         * @param object $element Data object
         * @param array $children_elements List of elements to continue traversing.
         * @param int $max_depth Max depth to traverse.
         * @param int $depth Depth of current element.
         * @param array $args
         * @param string $output Passed by reference. Used to append additional content.
         * @return null Null on failure with no changes to parameters.
         */
        function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {

                if ( !$element )
                        return;

                $id_field = $this->db_fields['id'];

                //display this element
                if ( is_array( $args[0] ) )
                        $args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );

                //Adds the 'parent' class to the current item if it has children
                if( ! empty( $children_elements[$element->$id_field] ) ) {
                        array_push($element->classes,'parent');
                        $element->title .= ' &gt;';
                }

                $cb_args = array_merge( array(&$output, $element, $depth), $args);

                call_user_func_array(array(&$this, 'start_el'), $cb_args);

                $id = $element->$id_field;

                // descend only when the depth is right and there are childrens for this element
                if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {

                        foreach( $children_elements[ $id ] as $child ){

                                if ( !isset($newlevel) ) {
                                        $newlevel = true;
                                        //start the child delimiter
                                        $cb_args = array_merge( array(&$output, $depth), $args);
                                        call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
                                }
                                $this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
                        }
                        unset( $children_elements[ $id ] );
                }

                if ( isset($newlevel) && $newlevel ){
                        //end the child delimiter
                        $cb_args = array_merge( array(&$output, $depth), $args);
                        call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
                }

                //end this element
                $cb_args = array_merge( array(&$output, $element, $depth), $args);
                call_user_func_array(array(&$this, 'end_el'), $cb_args);
        }
}
