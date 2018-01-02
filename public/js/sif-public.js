(function( $ ) {
	'use strict';
	$( window ).load(function() {
	var heightpops = $( 'img.size-shop_catalog.wp-post-image' ).height();
	$( 'ul.products li.product .woocommerce-LoopProduct-link' ).hover(
	  function() {
		  $( 'ul.products li.product a.woocommerce-LoopProduct-link:hover img.size-shop_catalog.wp-post-image' ).hide();
          $( 'ul.products li.product a.woocommerce-LoopProduct-link:hover img.rollover-image' ).show();
		  $( 'ul.products li.product a.woocommerce-LoopProduct-link:hover img.rollover-image' ).css( 'height' , heightpops );
      }, function() {
		   $( 'ul.products li.product a.woocommerce-LoopProduct-link img.size-shop_catalog.wp-post-image' ).show();
          $( 'ul.products li.product a.woocommerce-LoopProduct-link img.rollover-image' ).hide();
		  $( 'ul.products li.product a.woocommerce-LoopProduct-link img.rollover-image' ).css( 'height' ,'0' );
      }
	);
});

  /**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

})( jQuery );
