<section class="section section--reasons-choose">
	<div class="container">
		<h2 class="section__title"><?php the_field('third_block_title', $postID); ?></h2>
		<div class="slider slider--reasons">
			<div class="owl-carousel">
			<?php if( have_rows('third_block_content') ): ?>
				<?php while ( have_rows('third_block_content') ) : the_row(); ?>
				<div class="item">
					<div class="item__image">
						<img src="<?php the_sub_field('third_block_content_image'); ?>" alt="">
					</div>
					<div class="item__title"><?php the_sub_field('third_block_content_title'); ?></div>
					<div class="item__description"><?php the_sub_field('third_block_content_description'); ?></div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>
		<div class="tabs">
			<ul class="tabs__caption">
			<?php $count_titles = 0; ?>
			<?php if( have_rows('third_block_content') ): ?>
				<?php while ( have_rows('third_block_content') ) : the_row(); ?>
				<li class="<?php if ($count_titles == 0) : echo 'active'; endif;?>"><?php the_sub_field('third_block_content_title'); ?></li>
				<?php $count_titles++; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			</ul>
			<?php $count_contents = 0; ?>
			<?php if( have_rows('third_block_content') ): ?>
				<?php while ( have_rows('third_block_content') ) : the_row(); ?>
				<div class="tabs__content <?php if ($count_contents == 0) : echo 'active'; endif; ?>">
					<div class="content">
						<div class="content__image">
							<img src="<?php the_sub_field('third_block_content_image'); ?>" alt="">
						</div>
						<div class="content__description"><?php the_sub_field('third_block_content_description'); ?></div>
					</div>
				</div>
				<?php $count_contents++; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>