<section class="section section--writing-help">
	<div class="container">
		<h2 class="section__title"><?php the_field('second_block_title', $postID ); ?></h2>
		<div class="list">
		<?php if( have_rows('second_block_proofreading_assistance') ): ?>
			<?php while ( have_rows('second_block_proofreading_assistance') ) : the_row(); ?>
			<div class="list__item">
				<img src="<?php the_sub_field('proofreading_assistance_image'); ?>" alt="">
				<p><?php the_sub_field('proofreading_assistance_title'); ?></p>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
		<button class="button button--big"><?php echo __('Order now'); ?></button>
	</div>
</section>