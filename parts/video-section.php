<?php
$video_title      = get_field( 'video_title' );
$video_desc       = get_field( 'video_desc' );
$video_ph         = get_field( 'video_ph' );
$video_url        = get_field( 'video_url' );
$video_list_title = get_field( 'video_list_title' );
if ( $video_ph || $video_url ) : ?>
    <section class="video-section ease-order" data-scroll>
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
				<?php if ( $video_title ) : ?>
                    <div class="cell">
                        <h1 class="video-section__title page-title text-center ease-order__item ease-top"><?php echo $video_title; ?></h1>
                    </div>
				<?php endif; ?>
				<?php if ( $video_desc ) : ?>
                    <div class="video-section__desc text-center cell ease-order__item ease-top"><?php echo $video_desc; ?></div>
				<?php endif; ?>
                <div class="video-section__links cell">
					<?php get_template_part( 'parts/download-links' ); // Download links ?>
                </div>
				<?php if ( $video_url ) : ?>
                <a class="video-section__url cell" href="<?php echo $video_url; ?>" data-fancybox>
					<?php endif; ?>
					<?php echo wp_get_attachment_image( $video_ph, 'full', false, array( 'class' => 'video-section__ph cell ease-order__item ease-btm' ) ); ?>
					<?php if ( $video_url ) : ?>
                </a>
			<?php endif; ?>
				<?php if ( $video_list_title ) : ?>
                    <h3 class="video-section__list-title text-center cell ease-order__item ease-right"><?php echo $video_list_title; ?></h3>
				<?php endif; ?>
				<?php if ( have_rows( 'video_list' ) ): ?>
                    <ul class="video-section__list cell ease-order__item ease-right">
						<?php while ( have_rows( 'video_list' ) ): the_row();
							$item = get_sub_field( 'item' ); ?>
                            <li>
                                <span><?php echo get_row_index(); ?></span>
                                <p><?php echo $item; ?></p>
                            </li>
						<?php endwhile; ?>
                    </ul>
				<?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>