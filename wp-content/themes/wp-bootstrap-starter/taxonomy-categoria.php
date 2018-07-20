<?php
/**
 * The template for displaying archive noticias
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

 	<section id="primary" class="content-area col-sm-12 col-lg-12">
 		<main id="main" class="site-main card-group" role="main">
      <div>
        <?php
     		if ( have_posts() ) : ?>

     			<header class="page-header">
     				<?php
     					the_archive_title( '<h1><span class="badge badge-info">', '</span></h1>' );
     					the_archive_description( '<div class="archive-description">', '</div>' );
     				?>
     			</header><!-- .page-header -->
     			<?php
     			/* Start the Loop */
     			while ( have_posts() ) : the_post();

     				/*
     				 * Include the Post-Format-specific template for the content.
     				 * If you want to override this in a child theme, then include a file
     				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
     				 */
     				get_template_part( 'template-multimedia/content', get_post_format() );

     			endwhile;

     			the_posts_navigation();

     		else :

     			get_template_part( 'template-multimedia/content', 'none' );

     		endif; ?>
      </div>
    </main><!-- #main -->
 	</section><!-- #primary -->

 <?php
 get_sidebar();
 get_footer();
