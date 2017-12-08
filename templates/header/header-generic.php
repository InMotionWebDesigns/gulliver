<?php
/**
 * Header Template
 *
 * This file contains the markup for the header template.
 *
 * @package Prime
 */

// Get the theme configs.
global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
?>

<header id="masthead" class="<?php echo basename( __FILE__, '.php' ); ?>" role="banner" <?php BoldGrid_Framework_Schema::header( true ); ?>>
	<?php do_action( 'boldgrid_header_top' ); ?>
		<div class='boldgrid-section'>
			<div class="container-fluid bg-color-1 header-top">
				<div class="bgtfw <?php echo $configs['template']['pages']['global']['header']; ?>">
					<div class='row bg-color-1'>
						<div class='col-xs-12 col-sm-4 col-sm-push-4'>
							<?php do_action( 'boldgrid-theme-location', 'header', '6' ); ?>
						</div><!--col -->
						<div class="col-xs-6 col-sm-4 col-sm-pull-4 header-search">
							<?php do_action( 'boldgrid-theme-location', 'header', '2' ); ?>
						</div><!-- col -->
						<div class="col-xs-6 col-sm-4 header-social">
							<?php do_action( 'boldgrid-theme-location', 'header', '3' ); ?>
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->
			</div><!-- bg-color-1 -->
			<div class="bgtfw <?php echo $configs['template']['pages']['global']['header']; ?>">
				<div class="row">
					<div class='col-12 header-menu'>
						<?php do_action( 'boldgrid-theme-location', 'header', '7' ); ?>
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- .container -->
		</div><!-- .section -->
	<?php do_action( 'boldgrid_header_bottom' ); ?>
</header><!-- #masthead -->
