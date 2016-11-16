<?php
/**
 * Template Name: Archive Equipe
 * Description: A full-width template with no sidebar
 *
 * @package Tema Brasa
 */

get_header(); ?>

<div id="content" class="site-content">
	<div id="content-inside" class="container no-sidebar">
		<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<h2 class="fullheader-title">
						<?php
							if ( $title = get_option('team_title') ) {
								echo $title;
							} else {
								echo "Equipe Securegen";
							}
						?>
					</h2>
					<br />
					<p><?php if($title = get_option('team_subtitle')) echo $title;?></p>
				    
				    <?php while ( have_posts() ) : the_post(); ?>

				        <?php get_template_part( 'content', 'team' ); ?>
 
       				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content-inside -->
</div><!-- #content -->

<?php get_footer('contact'); ?>