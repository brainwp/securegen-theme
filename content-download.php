<div class="col-sm-3 download-info">
<?php if ( $dlm_download->has_version_number() ) {
	printf( __( 'Version %s', 'download-monitor' ), $dlm_download->get_the_version_number() );
} ?>
</div>
<div class="col-sm-3 download-info">
<?php $dlm_download->the_title(); ?>
</div>
<div class="col-sm-3 download-info">
<?php the_date('M/Y'); ?>
</div>
<a class="col-sm-3 download-button" href="<?php $dlm_download->the_download_link(); ?>" rel="nofollow"><i class="fa fa-download" aria-hidden="true"></i> Download
</a>
