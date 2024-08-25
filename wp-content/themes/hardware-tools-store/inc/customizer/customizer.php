<?php
/**
 * Hardware Tools Store: Customizer
 *
 * @subpackage Hardware Tools Store
 * @since 1.0
 */

function hardware_tools_store_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('hardware_tools_store_pro', array(
        'title'    => __('HARDWARE TOOLS STORE PREMIUM ', 'hardware-tools-store'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('hardware_tools_store_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Hardware_Tools_Store_Pro_Control($wp_customize, 'hardware_tools_store_pro', array(
        'label'    => __('HARDWARE TOOLS STORE PREMIUM', 'hardware-tools-store'),
        'section'  => 'hardware_tools_store_pro',
        'settings' => 'hardware_tools_store_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'hardware_tools_store_customize_register' );


define('HARDWARE_TOOLS_STORE_PRO_LINK',__('https://www.ovationthemes.com/products/tools-wordpress-theme','hardware-tools-store'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Hardware_Tools_Store_Pro_Control')):
    class Hardware_Tools_Store_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( HARDWARE_TOOLS_STORE_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE HARDWARE TOOLS PREMIUM ','hardware-tools-store');?> </a>
	        </div>
            <div class="col-md">
                <img class="hardware_tools_store_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
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
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( HARDWARE_TOOLS_STORE_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE HARDWARE TOOLS PREMIUM ','hardware-tools-store');?> </a>
            </div>
        </label>
    <?php } }
endif;