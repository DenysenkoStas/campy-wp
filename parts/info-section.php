<?php
$info_title = get_field( 'info_title' );
$info_desc  = get_field( 'info_desc' );
$info_img   = get_field( 'info_img' );
if ( $info_title && $info_desc && $info_img ) : ?>
    <section class="info-section">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="medium-6 small-order-2 medium-order-1 cell ease-left" data-scroll>
                    <h2 class="info-section__title"><?php echo $info_title; ?></h2>
                    <div class="info-section__desc"><?php echo $info_desc; ?></div>
                </div>
                <div class="medium-6 small-order-1 medium-order-2 text-right cell ease-right ease-delay-100" data-scroll>
					<?php echo wp_get_attachment_image( $info_img, 'full', false, array( 'class' => 'info-section__img' ) ); ?>
                </div>
            </div>
        </div>
		<?php if ( have_rows( 'info_list' ) ): ?>
            <div class="info-section__list">
				<?php while ( have_rows( 'info_list' ) ): the_row();
					$img   = get_sub_field( 'img' );
					$title = get_sub_field( 'title' );
					$desc  = get_sub_field( 'desc' ); ?>
                    <article class="info-item fade-in" data-scroll <?php bg( $img, 'full' ); ?>>
                        <div class="grid-container">
                            <div class="grid-x grid-margin-x">
                                <div class="cell">
                                    <div class="info-item__container ease-btm" data-scroll>
                                        <img class="info-item__img hide-for-medium" src="<?php echo $img; ?>" alt="img">
                                        <h3 class="info-item__title"><?php echo $title; ?></h3>
                                        <div class="info-item__desc"><?php echo $desc; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
				<?php endwhile; ?>
            </div>
		<?php endif; ?>
    </section>
<?php endif; ?>