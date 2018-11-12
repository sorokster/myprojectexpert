<?php get_header(); ?>

	<?php if ( is_home() && ! is_front_page() ) : ?>
		<?php get_template_part('templates/first-block'); ?>
		<?php get_template_part('templates/writing-help'); ?>
		<?php get_template_part('templates/reasons-to-choose'); ?>
		<?php get_template_part('templates/benefits'); ?>
		<?php get_template_part('templates/writing-offer'); ?>
		<?php get_template_part('templates/meet-some'); ?>
		<?php get_template_part('templates/how-it-works'); ?>
		<?php get_template_part('templates/testimonials'); ?>
		<?php get_template_part('templates/orders'); ?>
		<?php get_template_part('templates/faq'); ?>
		<?php get_template_part('templates/popuplar-services'); ?>
	<?php endif: ?>

<?php get_footer(); ?>
