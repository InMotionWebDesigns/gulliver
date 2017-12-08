<?php
/**
 * Blog Loop Page Template.
 *
 * This is the template responsible for displaying the
 * blog page in the BoldGrid Theme.
 *
 * @since 2.0
 * @package Prime
 */

global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
/**
 * Display the call to action widget area if configs are set.
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php do_action( 'before_entry_title' ); ?>
	<header class="entry-header">
		<?php get_template_part( 'templates/entry-header' ); ?>
	</header><!-- .entry-header -->

	<?php do_action( 'after_entry_title' ); ?>
	<div class="entry-content">
		<div class="bgtfw <?php echo BoldGrid::print_container_class( 'entry-content' )?>">
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
                          <h2 class="post-title"><?php the_title(); ?></h2>
                          <p class="post-content"><?php the_excerpt(); ?></p>
                        </figcaption>
                      </div><!-- col -->
                      <?php
                     }
                 }
             }
          ?>
      </div>

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
                          <h2 class="post-title"><?php the_title(); ?></h2>
                          <p class="post-content"><?php the_excerpt(); ?></p>
                        </figcaption>
                      </div><!-- col -->
                      <?php
                   }
               }
           }
        ?>
      </div>
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
                          <h2 class="post-title"><?php the_title(); ?></h2>
                          <p class="post-content"><?php the_excerpt(); ?></p>
                        </figcaption>
                      </div><!-- col -->
                      <?php
                     }
                 }
             }
          ?>
      </div>
		</div>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php get_template_part( 'templates/entry-footer' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
