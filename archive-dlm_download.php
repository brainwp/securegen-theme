<?php
/**
 * The template for displaying Archive Publicacoes.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package OnePress
 */

get_header(); ?>

	<div id="content" class="site-content">
<?php if(has_post_thumbnail() && $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', true )):?>
		<div class="page-fullheader">
		 <img src="<?php echo $img[0];?>"/>
		</div>
		<?php endif;?>
		<div id="content-inside" class="container no-sidebar">
		<?php
			_e( 'Publicações', 'onepress' );
		?>
			<div id="primary" class="content-area">

  				<main id="main" class="site-main" role="main">
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						get_template_part( 'content', 'downloads' );

					endwhile;

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->
<?php
get_footer('contact');
