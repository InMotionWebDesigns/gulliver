<?php
/**
 * Home Page Template.
 *
 * This is the template responsible for displaying the
 * home page in the BoldGrid Theme.
 *
 * @since 2.0
 * @package Prime
 */

global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
$cta = $configs['template']['call-to-action'];

/**
 * Display the call to action widget area if configs are set.
 */
if ( 'all-pages' === $cta || 'home-only' === $cta ) {
	include locate_template( 'templates/call-to-action.php' );
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php do_action( 'before_entry_title' ); ?>
	<header class="entry-header">
		<?php get_template_part( 'templates/entry-header' ); ?>
	</header><!-- .entry-header -->
	<?php do_action( 'after_entry_title' ); ?>
	<div class="entry-content">
		<div class="bgtfw container">
			<div class="featured1 row">
        <?php
          $featuredBlogs = new WP_Query('category_name=featured1&posts_per_page=1');
            if ($featuredBlogs->have_posts()) {
              while($featuredBlogs->have_posts()) {
                 $featuredBlogs->the_post();
                    if(has_post_thumbnail()){
                      ?>
                      <div class="col-sm-12">
                        <div class="featured-image>"><?php the_post_thumbnail(); ?></div>
                        <figcaption>
                          <h3 class="post-title"><?php the_title(); ?></h3>
													<a href="#">View More <i class="fa fa-angle-double-right"></i></a>
                        </figcaption>
                      </div><!-- col -->
                      <?php
                     }
                 }
             }
          ?>
      </div>
<hr>
<h2>Tastes</h2>
      <div class="featured2 row">
      <?php
          $featuredBlogs = new WP_Query('category_name=featured2&posts_per_page=2');
          if ($featuredBlogs->have_posts()) {
              while($featuredBlogs->have_posts()) {
                   $featuredBlogs->the_post();
                    if(has_post_thumbnail()){
                      ?>
                        <div class="col-sm-6">
                        <div class="featured-image>"><?php the_post_thumbnail(); ?></div>
                        <figcaption>
                          <h3 class="post-title"><?php the_title(); ?></h3>
													<a href="#">View More <i class="fa fa-angle-double-right"></i></a>
                        </figcaption>
                      </div><!-- col -->
                      <?php
                   }
               }
           }
        ?>
      </div>
<hr>
<h2>Places</h2>
<div class="featured3 row">
<?php
		$featuredBlogs = new WP_Query('category_name=featured3&posts_per_page=3');
		if ($featuredBlogs->have_posts()) {
				while($featuredBlogs->have_posts()) {
						 $featuredBlogs->the_post();
							if(has_post_thumbnail()){
								?>
									<div class="col-sm-4">
									<div class="featured-image>"><?php the_post_thumbnail(); ?></div>
									<figcaption>
										<h3 class="post-title"><?php the_title(); ?></h3>
										<div class="post-content"><?php the_excerpt(); ?></div>
									</figcaption>
								</div><!-- col -->
								<?php
						 }
				 }
		 }
	?>
</div>
<hr>
<div class="row">
	<?php
			$featuredBlogs = new WP_Query('category_name=featured4&posts_per_page=1');
			if ($featuredBlogs->have_posts()) {
					while($featuredBlogs->have_posts()) {
							 $featuredBlogs->the_post();
								if(has_post_thumbnail()){
									?>
										<div class="col-sm-4">
											<div class="featured-image>"><?php the_post_thumbnail(); ?></div>
										</div><!-- col -->
										<div class="col-sm-4">
											<h3 class="post-title"><?php the_title(); ?></h3>
											<?php the_category(); the_date(); ?>
											<div class="post-content"><?php the_excerpt(); ?></div>
										</div><!-- col -->
									<?php
							 }
					 }
			 }
		?>
		<div class="col-sm-4">
			<?php do_action( 'boldgrid-theme-location', 'page', '1' ); ?>
		</div>
</div>
		</div><!-- container -->
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php get_template_part( 'templates/entry-footer' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
