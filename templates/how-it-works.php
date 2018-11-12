<section class="section section--how-it-works">
	<div class="container">
		<h2 class="section__title"><?php the_field('seventh_block_title', $postID); ?></h2>
		<div class="list">
		<?php if( have_rows('seventh_block_content') ): ?>
			<?php while ( have_rows('seventh_block_content') ) : the_row(); ?>
			<div class="list__item">
				<div class="list__count"></div>
				<p class="list__description"><?php the_sub_field('seventh_block_content_description'); ?></p>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</section>