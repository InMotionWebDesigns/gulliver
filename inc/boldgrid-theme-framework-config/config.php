<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;
	$boldgrid_framework_configs['parent-theme-name'] = 'boldgrid-prime';
	$boldgrid_framework_configs['theme_name'] = 'gulliver';
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;
	$boldgrid_framework_configs['template']['footer'] = 'generic';
	$boldgrid_framework_configs['template']['navbar-search-form'] = false;
	$boldgrid_framework_configs['template']['header'] = 'generic';
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;
	$boldgrid_framework_configs['template']['call-to-action'] = 'false';
	$boldgrid_framework_configs['template']['sidebar'][] = '[page_blog.php]is_page_template';

	// Remove Container ID that is targetted by navbar-toggle.
	$boldgrid_framework_configs['menu']['prototype']['primary']['container_id'] = 'primary-menu';

	// Remove the container classes that are targetted with navbar-collapse.
	$boldgrid_framework_configs['menu']['prototype']['primary']['container_class'] = 'primary-menu';

	// Assign menus, widgets, and actions to locations in generic header template.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
	        '1' => array( '[menu]secondary' ),
					'2' => array( '[widget]boldgrid-widget-1' ),
	        '3' => array( '[widget]boldgrid-widget-2' ),
	        '6' => array( '[action]boldgrid_site_identity' ),
	        '7' => array( '[action]boldgrid_primary_navigation' ),
	        '8' => array( '[menu]tertiary' ),
	        '11' => array( '[widget]boldgrid-widget-2' ),
	    );

	// Assign menus, widgets, and actions to locations in generic footer template.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
	        '1' => array( '[menu]social' ),
					'2' => array( '[action]boldgrid_primary_navigation' ),
					'3' => array( '[widget]boldgrid-widget-2' ),
	        '5' => array( '[menu]footer_center' ),
	        '8' => array( '[widget]boldgrid-widget-3' , '[action]boldgrid_display_contact_block' ),
	        '11' => array( '[action]boldgrid_display_attribution_links' ),
	    );

			// Default Colors.
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
				array(
					'default' => true,
					'format' => 'palette-primary',
					'neutral-color' => '#ffffff',
					'colors' => array( '#1a1d14', '#12140e', '#8b9c6b', '#e7e7e7' ),
				),
			);

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;


	// Get Subcategory ID from the Database
	$boldgrid_install_options = get_option( 'boldgrid_install_options', array() );
	$subcategory_id = null;
	if ( !empty( $boldgrid_install_options['subcategory_id'] ) ) {
		$subcategory_id = $boldgrid_install_options['subcategory_id'];
	}

	// Override Options per Subcategory
	switch ( $subcategory_id ) {
		case 14: //<-- Fashion
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 32: //<-- General
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;

		// Default Behavior
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}



	// Social Media Icons.
	$boldgrid_framework_configs['social-icons']['type'] = 'icon-circle-open-thin';
	$boldgrid_framework_configs['social-icons']['size'] = 'normal';
	$boldgrid_framework_configs['menu']['default-menus']['social']['items'] = array(
		array (
			'menu-item-title' =>  __( 'Pinterest' ),
			'menu-item-classes' => 'pinterest',
			'menu-item-url' => '//pinterest.com',
			'menu-item-status' => 'publish'
		),
		array (
			'menu-item-title' =>  __( 'Instagram' ),
			'menu-item-classes' => 'instagram',
			'menu-item-url' => '//instagr.am',
			'menu-item-status' => 'publish',
		),
		array (
			'menu-item-title' =>  __( 'Flickr' ),
			'menu-item-classes' => 'flickr',
			'menu-item-url' => '//flickr.com',
			'menu-item-status' => 'publish'
		),
		array (
			'menu-item-title' =>  __( 'Dribbble' ),
			'menu-item-classes' => 'dribbble',
			'menu-item-url' => '//dribbble.com',
			'menu-item-status' => 'publish',
		),
	);

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#000000';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Secondary Menu, Above Header";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Top Right, Above Header";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Top of Footer";
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

	/**
	 * Widgets
	 */

	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Search';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Social Media';

	// Configs above will override framework defaults
	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Open Sans';

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );

// Adss menu to configs
