<?php
	// ///////////////////
	// //Add extra css classes to menu items
	// function mytheme_nav_menu_css_class( $classes = array(), $item, $args ) {
	//     $location_name = 'primary';
	//     if($args->theme_location== $location_name){//Limit to this menu location only
	        
	//         if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $location_name ] ) ) {
	//             $main_nav = wp_get_nav_menu_object( $locations[ $location_name ] );
	//             if ($item->menu_order == 1) {
	//                 $classes[] = 'first'; //First menu item
	//             }
	//             if ($item->menu_order >= $main_nav->count) {
	//                 $classes[] = 'last-items-menu'; //Overall last menu item
	//             }
	//         }
	//     }
	//     return $classes;
	// }
	// add_filter( 'nav_menu_css_class', 'mytheme_nav_menu_css_class', 10, 3 );

	// Add class active in current menu
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

	function special_nav_class ($classes, $item) {
	    if (in_array('current-menu-item', $classes) ){
	        $classes[] = 'active';
	    }
	    return $classes;
	}

	// Add class in last and first
	function wpb_first_and_last_menu_class($items) {
	    $items[1]->classes[] = '';
	    $items[count($items)]->classes[] = 'get-start';
	    return $items;
	}
	add_filter('wp_nav_menu_objects', 'wpb_first_and_last_menu_class');

	// Footer menu
	// class Walker_Nav_Pointers extends Walker_Nav_Menu
	// {
	//     function start_lvl( &$output, $depth = 0, $args = array() )
	//     {
	//         $indent = str_repeat("\t", $depth);
	//         $output .= "\n$indent<ul class=\"sub-menu\">\n";
	//     }
	//     function end_lvl( &$output, $depth = 0, $args = array() )
	//     {
	//         $indent = str_repeat("\t", $depth);
	//         $output .= "$indent</ul>\n";
	//     }
	// }

	// // Add class menu footer
	// function atg_menu_classes($classes, $item, $args) {
	//   if($args->theme_location == 'footer_menu') {
	//     $classes[] = 'col-xs-6 col-sm-3';
	//   }
	//   return $classes;
	// }
	// add_filter('nav_menu_css_class','atg_menu_classes',1,3);

	// Edit walker (submenu)
	class Teliax_Nav_Walker extends Walker_Nav_Menu{
		 public function start_lvl( &$output, $depth = 0, $args = array() ) {
		  $indent = str_repeat("\t", $depth);
		  $output .= "\n$indent<div class=\"dropdown-menu\">
		    <ul>\n";
		 }

		 public function end_lvl( &$output, $depth = 0, $args = array() ) {
		  $indent = str_repeat("\t", $depth);
		  $output .= "$indent</ul></div>\n";
		 }	
	}

	// Submenu custom
	add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu', 10, 2 );
	// filter_hook function to react on sub_menu flag
	function my_wp_nav_menu_objects_sub_menu( $sorted_menu_items, $args ) {
	   	// var_dump($sorted_menu_items);die;
	  	if ( isset( $args->sub_menu ) ) {
	   		$root_id = 0;
	    
	    // find the current menu item
	    foreach ( $sorted_menu_items as $menu_item ) {
	      if ( $menu_item->current ) {
	        // set the root id based on whether the current menu item has a parent or not
	        $root_id = ( $menu_item->menu_item_parent ) ? $menu_item->menu_item_parent : $menu_item->ID;
	        break;
	      }
	    }
	    
	    // find the top level parent
	    if ( ! isset( $args->direct_parent ) ) {
	      $prev_root_id = $root_id;
	      while ( $prev_root_id != 0 ) {
	        foreach ( $sorted_menu_items as $menu_item ) {
	          if ( $menu_item->ID == $prev_root_id ) {
	            $prev_root_id = $menu_item->menu_item_parent;
	            // don't set the root_id to 0 if we've reached the top of the menu
	            if ( $prev_root_id != 0 ) $root_id = $menu_item->menu_item_parent;
	            break;
	          } 
	        }
	      }
	    }
	    $menu_item_parents = array();
	    foreach ( $sorted_menu_items as $key => $item ) {
	      // init menu_item_parents
	      if ( $item->ID == $root_id ) 
	        $menu_item_parents[] = $item->ID;

	      if ( in_array( $item->menu_item_parent, $menu_item_parents ) && $item->menu_item_parent == $root_id) {
	        // part of sub-tree: keep!
	        $menu_item_parents[] = $item->ID;
	        $sorted_menu_items[$key]->menu_item_parent = '';
	      } else if ( ! ( isset( $args->show_parent ) && in_array( $item->ID, $menu_item_parents ) ) ) {
	        // not part of sub-tree: away with it!
	        if($sorted_menu_items[$key]->ID != $root_id)
	        //var_dump($sorted_menu_items[$key]);
	          unset( $sorted_menu_items[$key] );
	      }
	    }
		//    $menu_items = wp_get_nav_menu_items( 'primary' );
		// $this_item = current( wp_filter_object_list( $menu_items, array( 'object_id' => get_queried_object_id() ) ) );
		// var_dump($this_item);die;
		if (count($sorted_menu_items) != 1)
	    	return $sorted_menu_items;
	} else {
	    return $sorted_menu_items;
	}}

	// Add menu items
	function add_nav_menu_items ($items, $args){
		if ($args->theme_location == 'primary') {
			$items .= '<li class="phone-number bold hidden"><i class="fa fa-phone" aria-hidden="true"></i>'.get_field('telephone', 'option').'</li>';
			
		}
		return $items;
	}
	add_filter('wp_nav_menu_items', 'add_nav_menu_items', 10, 2);

?>