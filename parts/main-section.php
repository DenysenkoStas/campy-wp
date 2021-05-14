<?php
$main_title = get_field( 'main_title' );
$main_desc  = get_field( 'main_desc' );
$main_link  = get_field( 'main_link' );
$main_img   = get_field( 'main_img' );
if ( $main_title && $main_img ) : ?>
    <section class="main-section ease-order" data-scroll>
        <div class="main-section__wrapper ease-order__item ease-btm" <?php bg( $main_img, 'full' ); ?>>
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="main-section__container large-6 medium-8 cell ease-order__item ease-top">
                        <h1 class="main-section__title page-title"><?php echo $main_title; ?></h1>
						<?php if ( $main_desc ) : ?>
                            <div class="main-section__desc"><?php echo $main_desc; ?></div>
						<?php endif; ?>
						<?php if ( $main_link ) : ?>
                            <a class="main-section__link"
                               href="<?php echo esc_url( $main_link['url'] ); ?>"
                               target="<?php echo esc_attr( $main_link['target'] ? $main_link['target'] : '_self' ); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M0 0H26V26H0z"
                                              transform="translate(-255 -648) translate(255 648)"/>
                                        <path stroke="#FFF"
                                              stroke-width="2"
                                              d="M3 8L13 18 23 8"
                                              transform="translate(-255 -648) translate(255 648)"/>
                                    </g>
                                </svg>
								<?php echo esc_html( $main_link['title'] ); ?>
                            </a>
						<?php endif; ?>
                        <img class="hide-for-medium" src="<?php echo $main_img; ?>" alt="main-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>