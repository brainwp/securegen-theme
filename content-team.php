<?php
/* 
* Content equipe
*/
global $post;
$thumb_src = null;
if ( has_post_thumbnail($post->ID) ) {
	$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
	$thumb_src = $src[0];
}
?>
	<article class="col-sm-12 profile">
		<div class="profile-header col-sm-4">
			<?php if ( $thumb_src ): ?>
			<img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>" class="img">
			<?php endif; ?>
		</div>
		
		<div class="profile-content col-sm-8">
			<h3><?php the_title(); ?></h3>
			<p class="lead position"><?php the_field('team_position'); ?></p>
			<div class="entry-content"><?php the_content(); ?>
				<?php if ( $tel = get_field('team_phone') ): ?>
					<div class="tel" href="tel:<?php echo $tel; ?>" alt="Telefone">
					<i class="fa fa-phone"></i> <?php echo $tel; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="profile-footer">
				<a href="mailto:<?php echo antispambot( get_field('team_email') ); ?>" alt="<?php echo antispambot( get_field('team_email') ); ?>"><i class="fa fa-envelope"></i></a>
				<?php if ( $twitter = get_field('team_twitter') ): ?>
				<a href="<?php echo $twitter; ?>" alt="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a>
				<?php endif; ?>
				<?php if ( $linkedin = get_field('team_linkedin') ): ?>
				<a href="<?php echo $linkedin; ?>" alt="<?php echo $linkedin; ?>"><i class="fa fa-linkedin-square"></i></a>
				<?php endif; ?>
				<?php if ( $github = get_field('team_github') ): ?>
				<a href="<?php echo $github; ?>" alt="GitHub"><i class="fa fa-github"></i></a>
				<?php endif; ?>
				<?php if ( $wporg = get_field('team_wporg') ): ?>
				<a href="<?php echo $wporg; ?>" title="<?php _e('Perfil no WordPress.org','tema-brasa'); ?>" alt="<?php echo $wporg; ?>"><i class="fa fa-wordpress"></i></a>
				<?php endif; ?>
			</div>
		</div>
	</article>
