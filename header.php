<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Set up Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
    <!-- Remove Microsoft Edge's & Safari phone-email styling -->
    <meta name="format-detection" content="telephone=no,email=no,url=no">

    <!-- Add external fonts below (GoogleFonts / Typekit) -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'no-outline' ); ?>>
<?php wp_body_open(); ?>

<!-- <div class="preloader hide-for-medium">
	<div class="preloader__icon"></div>
</div> -->

<!-- BEGIN of header -->
<?php
$single_btn  = get_field( 'single_btn', 'options' );
$regular_btn = get_field( 'regular_btn', 'options' );
$pink_btn    = get_field( 'pink_btn', 'options' );
?>
<header id="header" class="header ease-top" data-scroll>
    <div class="grid-container menu-grid-container">
        <div class="grid-x grid-margin-x">
            <div class="header__wrapper cell">
                <div class="header__logo show-for-medium">
					<?php show_custom_logo(); ?>
                    <span class="css-clip"><?php echo get_bloginfo( 'name' ); ?></span>
                </div>
                <div class="header__menu">
					<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
                        <div class="title-bar hide-for-medium"
                             data-responsive-toggle="main-menu"
                             data-hide-for="medium">
                            <button class="menu-icon"
                                    type="button"
                                    data-toggle
                                    aria-label="Menu"
                                    aria-controls="main-menu">
                                <span></span></button>
                            <div class="header__logo">
								<?php show_custom_logo(); ?>
                                <span class="css-clip"><?php echo get_bloginfo( 'name' ); ?></span>
                            </div>
                        </div>
                        <nav class="top-bar" id="main-menu">
                            <div class="top-bar__wrapper">
								<?php wp_nav_menu( array(
									'theme_location' => 'header-menu',
									'menu_class'     => 'menu header-menu',
									'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown" data-submenu-toggle="true" data-multi-open="false" data-close-on-click-inside="false">%3$s</ul>',
									'walker'         => new Foundation_Navigation()
								) ); ?>
								<?php if ( $single_btn || $regular_btn || $pink_btn ) : ?>
                                    <ul class="menu header-menu accordion-menu hide-for-medium">
										<?php if ( ! is_page_template( "templates/template-business.php" ) ) : ?>
                                            <li class="menu-item">
                                                <a href="<?php echo esc_url( $single_btn['url'] ); ?>"
                                                   target="<?php echo esc_attr( $single_btn['target'] ? $single_btn['target'] : '_self' ); ?>"><?php echo esc_html( $single_btn['title'] ); ?></a>
                                            </li>
										<?php else: ?>
                                            <li class="menu-item">
                                                <a href="<?php echo esc_url( $regular_btn['url'] ); ?>"
                                                   target="<?php echo esc_attr( $regular_btn['target'] ? $regular_btn['target'] : '_self' ); ?>"><?php echo esc_html( $regular_btn['title'] ); ?></a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="<?php echo esc_url( $pink_btn['url'] ); ?>"
                                                   target="<?php echo esc_attr( $pink_btn['target'] ? $pink_btn['target'] : '_self' ); ?>"><?php echo esc_html( $pink_btn['title'] ); ?></a>
                                            </li>
										<?php endif; ?>
                                    </ul>
								<?php endif; ?>
                            </div>
                        </nav>
					<?php endif; ?>
                </div>
				<?php if ( $single_btn || $regular_btn || $pink_btn ) : ?>
                    <div class="header__btn show-for-medium">
						<?php if ( ! is_page_template( "templates/template-business.php" ) ) : ?>
                            <a class="button"
                               href="<?php echo esc_url( $single_btn['url'] ); ?>"
                               target="<?php echo esc_attr( $single_btn['target'] ? $single_btn['target'] : '_self' ); ?>"><?php echo esc_html( $single_btn['title'] ); ?></a>
						<?php else: ?>
                            <a class="button short"
                               href="<?php echo esc_url( $regular_btn['url'] ); ?>"
                               target="<?php echo esc_attr( $regular_btn['target'] ? $regular_btn['target'] : '_self' ); ?>"><?php echo esc_html( $regular_btn['title'] ); ?></a>
                            <a class="button pink short"
                               href="<?php echo esc_url( $pink_btn['url'] ); ?>"
                               target="<?php echo esc_attr( $pink_btn['target'] ? $pink_btn['target'] : '_self' ); ?>"><?php echo esc_html( $pink_btn['title'] ); ?></a>
						<?php endif; ?>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
</header>

<section class="header__substrate"></section>
<!-- END of header -->
