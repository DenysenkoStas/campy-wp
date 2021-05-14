<?php
$cta_title = get_field( 'cta_title' );
$cta_desc  = get_field( 'cta_desc' );
$cta_btn   = get_field( 'cta_btn' );
if ( $cta_title || $cta_btn ) : ?>
    <section class="cta-section ease-order" data-scroll>
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <h2 class="cta-section__title page-title h1 text-center cell ease-order__item ease-top"><?php echo $cta_title; ?></h2>
				<?php if ( $cta_desc ) : ?>
                    <div class="cta-section__desc h3 text-center cell ease-order__item ease-top"><?php echo $cta_desc; ?></div>
				<?php endif; ?>
                <div class="cta-section__btn text-center cell ease-order__item ease-btm">
                    <a class="button pink wide"
                       href="<?php echo esc_url( $cta_btn['url'] ); ?>"
                       target="<?php echo esc_attr( $cta_btn['target'] ? $cta_btn['target'] : '_self' ); ?>"><?php echo esc_html( $cta_btn['title'] ); ?></a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>