<?php if ( have_rows( 'download_links', 'options' ) ): ?>
    <div class="download-links ease-left" data-scroll>
		<?php while ( have_rows( 'download_links', 'options' ) ): the_row();
			$img  = get_sub_field( 'img' );
			$link = get_sub_field( 'link' ); ?>
            <a class="download-links__link" href="<?php echo $link; ?>" target="_blank">
				<?php echo wp_get_attachment_image( $img, 'full', false, array('class' => 'download-links__img') ); ?>
            </a>
		<?php endwhile; ?>
    </div>
<?php endif; ?>