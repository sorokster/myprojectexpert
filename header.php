<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header <?php if ( !is_front_page() ) : echo 'header--transparent'; endif; ?>">
	<div class="container">
		<div class="header__container">
			<div class="header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
			</div>
			<div class="header__info">
				<ul class="info">
					<li class="info__item info__item--phone">
						<a class="info__link" href="tel:<?php echo get_theme_mod('setting_info_phone'); ?>"><?php echo get_theme_mod('setting_info_phone'); ?></a>
					</li>
					<li class="info__item info__item--mail">
						<a class="info__link" href="mailto:<?php echo get_theme_mod('setting_info_email'); ?>"><?php echo get_theme_mod('setting_info_email'); ?></a>
					</li>
					<?php if ( is_front_page() ): ?>
					<li class="info__item info__item--account">
						<a class="info__link" href="javascript:void(0);">My account</a>
					</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</header>
