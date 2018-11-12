<section class="section section--writing-offer">
	<div class="container">
		<h2 class="section__title"><?php the_field('sixth_block_title', $postID); ?></h2>
		<div class="writing-offer">
			<div class="writing-offer__item">
				<div class="list">
				<?php if( have_rows('sixth_block_content') ): ?>
					<?php while ( have_rows('sixth_block_content') ) : the_row(); ?>
					<div class="list__item">
						<div class="list__title"><?php the_sub_field('sixth_block_content_title'); ?></div>
						<div class="list__description"><?php the_sub_field('sixth_block_content_description'); ?></div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
			<div class="writing-offer__item writing-offer__item--form">
				<div class="form">
					<select name="" id="">
						<option value="" rel="hide">Type of paper</option>
					</select>
					<select name="" id="">
						<option value="" rel="hide">Subject</option>
						<option value="" rel="hide">type of subject 2</option>
						<option value="" rel="hide">type of subject 3</option>
					</select>
					<select name="" id="">
						<option value="" rel="hide">Deadline</option>
					</select>
					<button class="button button--small">Continue</button>
				</div>
			</div>
		</div>
	</div>
</section>