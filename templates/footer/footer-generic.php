<?php
/**
 * Footer Template
 *
 * This file contains the markup for the footer template.
 *
 * @since 2.0
 * @package Prime
 */

// Get the theme configs.
global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
?>

<footer id="colophon" role="contentinfo" <?php BoldGrid_Framework_Schema::footer( true ); ?>>
	<?php do_action( 'boldgrid_footer_top' ); ?>
		<div class='boldgrid-section'>
			<div class="bg-color-1 footer-menu">
				<div class="bgtfw <?php echo $configs['template']['pages']['global']['footer']; ?>">
					<div class='row'>
						<div class='col-md-12 footer-menu'><?php do_action( 'boldgrid-theme-location', 'footer', '2' ); ?></div>
					</div><!-- row -->
				</div><!-- .container -->
			</div><!-- bg-color-1 -->
			<div class="bg-color-2">
				<div class="bgtfw <?php echo $configs['template']['pages']['global']['footer']; ?>">
					<div class='row'>
						<div class='col-md-12 footer-social'><?php do_action( 'boldgrid-theme-location', 'footer', '3' ); ?></div>
					</div><!-- row -->
				</div><!-- .container -->
			</div><!-- bg-color-2 -->
		</div><!-- .section -->
	<?php do_action( 'boldgrid_footer_bottom' ); ?>
</footer><!-- #colophon -->
