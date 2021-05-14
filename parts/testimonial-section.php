<?php
$test_title = get_field( 'test_title' );
$test_desc  = get_field( 'test_desc' );
if ( have_rows( 'test_list' ) ) : ?>
    <section class="testim-section ease-order" data-scroll>
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
				<?php if ( $test_title ) : ?>
                    <h2 class="testim-section__title text-center cell ease-order__item ease-top"><?php echo $test_title; ?></h2>
				<?php endif; ?>
				<?php if ( $test_desc ) : ?>
                    <div class="testim-section__desc text-center cell ease-order__item ease-top"><?php echo $test_desc; ?></div>
				<?php endif; ?>
                <div class="testim-section__list cell ease-order__item ease-btm">
					<?php while ( have_rows( 'test_list' ) ): the_row();
						$img      = get_sub_field( 'img' );
						$text     = get_sub_field( 'text' );
						$nickname = get_sub_field( 'nickname' ); ?>
                        <article class="testimonial">
							<?php echo wp_get_attachment_image( $img, 'full', false, array( 'class' => 'testimonial__img' ) ); ?>
                            <div class="testimonial__text"><?php echo $text; ?></div>
                            <h5 class="testimonial__nickname"><?php _e( '@', 'campy' );
								echo $nickname; ?></h5>
                        </article>
					<?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>