<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<?php if ( have_posts() ): ?>
	<?php while ( have_posts() ):
		the_post(); ?>
        <main id="<?php the_ID(); ?>" <?php post_class( 'contact ease-order' ); ?> data-scroll>
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
					<?php
					$contact_title    = get_the_title();
					$contact_subtitle = get_field( 'contact_subtitle' );
					if ( $contact_title || $contact_subtitle ) : ?>
                        <div class="contact__column medium-6 cell ease-order__item ease-left">
							<?php if ( $contact_title ) : ?>
                                <h1 class="contact__title h2"><?php the_title(); ?></h1>
							<?php endif; ?>
							<?php if ( $contact_subtitle ) : ?>
                                <p class="contact__subtitle"><?php echo $contact_subtitle; ?></p>
							<?php endif; ?>
                        </div>
					<?php endif; ?>
					<?php if ( $form_content = apply_filters( 'the_content', get_the_content() ) ) : ?>
                        <div class="contact__column medium-6 cell ease-order__item ease-right">
                            <div class="contact__content">
								<?php echo $form_content; ?>
                            </div>
                        </div>
					<?php endif; ?>
					<?php if ( ( $contact_form = get_field( 'contact_form' ) ) && is_array( $contact_form ) ): ?>
                        <div class="contact__form cell ease-order__item ease-btm">
							<?php echo do_shortcode( "[gravityform id='{$contact_form['id']}' title='false' description='false' ajax='true']" ); ?>
                        </div>
					<?php endif; ?>
                </div>
            </div>
        </main>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>