<?php
/**
 * Page
 */
get_header(); ?>

<?php
$title    = get_the_title();
$subtitle = get_field( 'subtitle' );
if ( $title || $subtitle ) : ?>
    <section class="hero-section ease-order" <?php bg( get_field( 'bg' ), 'full' ); ?> data-scroll>
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
				<?php if ( $title ) : ?>
                    <h1 class="hero-section__title h2 cell ease-order__item ease-left"><?php echo $title; ?></h1>
				<?php endif; ?>
				<?php if ( $subtitle ) : ?>
                    <p class="hero-section__subtitle cell ease-order__item ease-left"><?php echo $subtitle; ?></p>
				<?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
        <main class="main-content default-content" <?php post_class( 'entry' ); ?>>
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <article class="entry__content cell">
						<?php the_content( '', true ); ?>
                    </article>
                </div>
            </div>
        </main>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>