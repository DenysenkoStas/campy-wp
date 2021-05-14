<?php
$submain_title = get_field( 'submain_title' );
$submain_desc  = get_field( 'submain_desc' );
$submain_img   = get_field( 'submain_img' );
if ( $submain_title && $submain_desc ) : ?>
    <section class="submain-section ease-order fade-in" <?php bg( $submain_img, 'full' ); ?> data-scroll>
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell">
                    <div class="submain-section__container ease-order__item ease-right">
                        <h2 class="submain-section__title"><?php echo format_field_text( $submain_title ); ?></h2>
                        <div class="submain-section__desc"><?php echo $submain_desc; ?></div>
						<?php if ( $submain_img ) : ?>
                            <img class="hide-for-medium" src="<?php echo $submain_img; ?>" alt="submain-img">
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>