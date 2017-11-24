<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.adpu.net
 * @since    1.02
 *
 * @package    sif
 * @subpackage sif/admin
 */
/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    sif
 * @subpackage sif/admin
 * @author    Jordi Verdaguer <info@adpu.net>
 */
class Sif_Admin {
	/**
	 * The ID of this plugin.
	 *
	 * @since    1.02
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;
	/**
	 * The version of this plugin.
	 *
	 * @since    1.02
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.02
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;
		add_action( 'woocommerce_before_shop_loop_item_title', array( $this, 'sif_add_secondary_image'));
		add_action( 'wp_head', array( $this, 'sif_my_custom_styles'));
	}
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.02
	 */
	public function enqueue_styles() {
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/sif-admin.css', array(), $this->version, 'all' );
	}
	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.02
	 */
	public function enqueue_scripts() {
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/sif-admin.js', array( 'jquery' ), $this->version, false );
	}
/**
* This function adds image hover from product gallery 
*/
public function sif_add_secondary_image() {
    global $product;
    $attachment_urls = $product->get_gallery_image_ids();
    if ( ! empty( $attachment_urls[0] ) ) {
    $image_link = wp_get_attachment_url($attachment_urls[0]); 
	echo "<img src='".$image_link."' class='rollover-image' alt='Rollover image' />";  
	}else{
	echo "<img src='".plugin_dir_url( __FILE__ )."/images/no-image.jpg' class='rollover-image' alt='Rollover image' />"; 
	}
}
/**
* This function adds css inline style in woocommerce pages
*/
public function sif_my_custom_styles()
{
	  if( is_woocommerce() ){
	  echo '<style type="text/css">.woocommerce ul.products li.product a img{margin:0}ul.products li.product a.woocommerce-LoopProduct-link img{height:auto;object-fit: cover;}ul.products li.product a.woocommerce-LoopProduct-link:hover img{height:0}ul.products li.product a.woocommerce-LoopProduct-link img.rollover-image{height:0}ul.products li.product a.woocommerce-LoopProduct-link:hover img.rollover-image{height:auto;object-fit: cover;}</style>';
	}
}
}