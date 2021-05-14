<?php
$features_title = get_field( 'features_title' );
$features_desc  = get_field( 'features_desc' );
$features_img   = get_field( 'features_img' );
if ( $features_title && $features_desc && $features_img ) : ?>
    <section class="features-section">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="medium-6 small-order-2 medium-order-1 cell ease-left" data-scroll>
                    <h2 class="features-section__title"><?php echo $features_title; ?></h2>
                    <div class="features-section__desc">
						<?php echo $features_desc; ?>
                    </div>
                </div>
                <div class="medium-6 small-order-1 medium-order-2 text-right cell ease-right ease-delay-100" data-scroll>
					<?php echo wp_get_attachment_image( $features_img, 'full', false, array( 'class' => 'features-section__img' ) ); ?>
                </div>
				<?php if ( have_rows( 'features_list' ) ): ?>
                    <div class="features-section__list small-order-3 cell">
						<?php while ( have_rows( 'features_list' ) ): the_row();
							$img   = get_sub_field( 'img' );
							$title = get_sub_field( 'title' );
							$desc  = get_sub_field( 'desc' ); ?>
                            <article class="features-item">
								<?php echo wp_get_attachment_image( $img, 'full', false, array( 'class' => 'features-item__img ease-top', 'data-scroll' => '' ) ); ?>
                                <div class="features-item__wrapper ease-btm ease-delay-100" data-scroll>
                                    <h3 class="features-item__title"><?php echo $title; ?></h3>
                                    <div class="features-item__desc"><?php echo $desc; ?></div>
                                </div>
                            </article>
						<?php endwhile; ?>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>