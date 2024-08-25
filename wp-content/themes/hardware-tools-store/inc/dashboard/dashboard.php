<?php

add_action( 'admin_menu', 'hardware_tools_store_gettingstarted' );
function hardware_tools_store_gettingstarted() {
	add_theme_page( esc_html__('Theme Installation', 'hardware-tools-store'), esc_html__('Theme Installation', 'hardware-tools-store'), 'edit_theme_options', 'hardware-tools-store-guide-page', 'hardware_tools_store_guide');
}

function hardware_tools_store_admin_theme_style() {
   wp_enqueue_style('hardware-tools-store-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'hardware_tools_store_admin_theme_style');

if ( ! defined( 'HARDWARE_TOOLS_STORE_SUPPORT' ) ) {
define('HARDWARE_TOOLS_STORE_SUPPORT',__('https://wordpress.org/support/theme/hardware-tools-store/','hardware-tools-store'));
}
if ( ! defined( 'HARDWARE_TOOLS_STORE_REVIEW' ) ) {
define('HARDWARE_TOOLS_STORE_REVIEW',__('https://wordpress.org/support/theme/hardware-tools-store/reviews/','hardware-tools-store'));
}
if ( ! defined( 'HARDWARE_TOOLS_STORE_LIVE_DEMO' ) ) {
define('HARDWARE_TOOLS_STORE_LIVE_DEMO',__('https://trial.ovationthemes.com/hardware-tools-store-pro/','hardware-tools-store'));
}
if ( ! defined( 'HARDWARE_TOOLS_STORE_BUY_PRO' ) ) {
define('HARDWARE_TOOLS_STORE_BUY_PRO',__('https://www.ovationthemes.com/products/tools-wordpress-theme','hardware-tools-store'));
}
if ( ! defined( 'HARDWARE_TOOLS_STORE_PRO_DOC' ) ) {
define('HARDWARE_TOOLS_STORE_PRO_DOC',__('https://trial.ovationthemes.com/docs/ot-hardware-tools-store-pro-doc/','hardware-tools-store'));
}
if ( ! defined( 'HARDWARE_TOOLS_STORE_FREE_DOC' ) ) {
define('HARDWARE_TOOLS_STORE_FREE_DOC',__('https://trial.ovationthemes.com/docs/ot-hardware-tools-store-free-doc/','hardware-tools-store'));
}
if ( ! defined( 'HARDWARE_TOOLS_STORE_THEME_NAME' ) ) {
define('HARDWARE_TOOLS_STORE_THEME_NAME',__('Premium Hardware Tools Store Theme','hardware-tools-store'));
}

/**
 * Theme Info Page
 */
function hardware_tools_store_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$hardware_tools_store_theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $hardware_tools_store_theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'hardware-tools-store'); ?><?php echo esc_html($hardware_tools_store_theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( HARDWARE_TOOLS_STORE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'hardware-tools-store'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( HARDWARE_TOOLS_STORE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'hardware-tools-store'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','hardware-tools-store'); ?></h3>
					<p><?php $hardware_tools_store_theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $hardware_tools_store_theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','hardware-tools-store'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','hardware-tools-store'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','hardware-tools-store'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','hardware-tools-store'); ?></h4>
					<p><?php esc_html_e('To check your website click here','hardware-tools-store'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','hardware-tools-store'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','hardware-tools-store'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','hardware-tools-store'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( HARDWARE_TOOLS_STORE_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','hardware-tools-store'); ?></a>
				</div>
       	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(HARDWARE_TOOLS_STORE_THEME_NAME); ?></h3>
				<img class="hardware_tools_store_img_responsive" style="width: 100%;" src="<?php echo esc_url( $hardware_tools_store_theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( HARDWARE_TOOLS_STORE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'hardware-tools-store'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( HARDWARE_TOOLS_STORE_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'hardware-tools-store'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( HARDWARE_TOOLS_STORE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'hardware-tools-store'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
					<li class="upsell-hardware_tools_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'hardware-tools-store');?> </li>                 
					<li class="upsell-hardware_tools_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'hardware-tools-store');?> </li>
					<li class="upsell-hardware_tools_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'hardware-tools-store');?> </li>
					<li class="upsell-hardware_tools_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'hardware-tools-store');?> </li>
					<li class="upsell-hardware_tools_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'hardware-tools-store');?> </li>
					<li class="upsell-hardware_tools_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'hardware-tools-store');?> </li>
					<li class="upsell-hardware_tools_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'hardware-tools-store');?> </li>
					<li class="upsell-hardware_tools_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'hardware-tools-store');?> </li>
					<li class="upsell-hardware_tools_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'hardware-tools-store');?> </li>
					<li class="upsell-hardware_tools_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'hardware-tools-store');?> </li>
					<li class="upsell-hardware_tools_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'hardware-tools-store');?> </li>
					<li class="upsell-hardware_tools_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'hardware-tools-store');?> </li>
					<li class="upsell-hardware_tools_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'hardware-tools-store');?> </li>
               <li class="upsell-hardware_tools_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'hardware-tools-store');?> </li>
            </ul>
        	</div>
		</div>
	</div>

<?php }?>