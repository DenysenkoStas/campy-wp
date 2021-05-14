<?php
/**
 * Footer
 */
?>

<!-- BEGIN of footer -->
<footer class="footer">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="large-5 small-order-2 medium-order-1 cell">
                <div class="footer__logo show-for-medium">
					<?php if ( $footer_logo = get_field( 'footer_logo', 'options' ) ):
						echo wp_get_attachment_image( $footer_logo['id'], 'medium' );
					else:
						show_custom_logo();
					endif; ?>
                </div>

				<?php if ( $copyright = get_field( 'copyright', 'options' ) ): ?>
                    <div class="footer__copy"><?php echo $copyright; ?></div>
				<?php endif; ?>
            </div>

            <div class="footer__wrapper large-7 small-order-1 medium-order-2 cell">
				<?php
				if ( has_nav_menu( 'footer-menu' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'menu_class'     => 'footer__menu',
						'depth'          => 2
					) );
				}
				?>

				<?php if ( $menu_title = get_field( 'menu_title', 'options' ) ) : ?>
                    <div class="footer__sp">
                        <p class="sp-title"><?php echo $menu_title; ?></p>
						<?php get_template_part( 'parts/socials' ); // Social profiles ?>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<!-- END of footer -->

<?php wp_footer(); ?>
</body>
</html>
