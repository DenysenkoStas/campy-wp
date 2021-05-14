<?php
$download_title = get_field( 'download_title' );
$download_img   = get_field( 'download_img' );
if ( $download_title || $download_img ) : ?>
    <section class="download-section ease-order" data-scroll="">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
				<?php if ( $download_title ) : ?>
                    <h2 class="download-section__title page-title h1 text-center cell ease-order__item ease-top"><?php echo $download_title; ?></h2>
				<?php endif; ?>
                <div class="download-section__links cell">
					<?php get_template_part( 'parts/download-links' ); // Download links ?>
                </div>
				<?php if ( $download_img ) : ?>
                    <div class="text-center cell ease-order__item ease-btm">
						<?php echo wp_get_attachment_image( $download_img, 'full', false, array( 'class' => 'download-section__img cell' ) ); ?>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>