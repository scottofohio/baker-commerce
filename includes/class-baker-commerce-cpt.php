<?php 
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://bakerdesign.co
 * @since      1.0.0
 *
 * @package    Baker_Commerce
 * @subpackage Baker_Commerce/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Baker_Commerce
 * @subpackage Baker_Commerce/includes
 * @author     Scott Baker <scott@bakerdesign.co>
 */
class Baker_Load_Cpt {

  public function register_post_type_orders() {
    function wosu_order_post_type() {
      $labels = array(
        'name'                => _x( 'Orders', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Order', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Orders', 'text_domain' ),
        'name_admin_bar'      => __( 'Order', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
        'all_items'           => __( 'All Orders', 'text_domain' ),
        'add_new_item'        => __( 'Add New Order', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'new_item'            => __( 'New Order', 'text_domain' ),
        'edit_item'           => __( 'Edit Order', 'text_domain' ),
        'update_item'         => __( 'Update Order', 'text_domain' ),
        'view_item'           => __( 'View Order', 'text_domain' ),
        'search_items'        => __( 'Search Order', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
      );
    
    $args = array(
        'label'               => __( 'Orders', 'text_domain' ),
        'description'         => __( 'Order Custom Post Type', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'author' ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 7,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'map_meta_cap'        => true,
        'query_var' 		  => true,
        'capability_type' => 'post'
        
      );
    
      register_post_type( 'orders', $args );
    }
    add_action( 'init', 'wosu_order_post_type', 0 );
  }

}