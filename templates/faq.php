<section class="section section--faq">
	<div class="container">
		<h2 class="section__title"><?php the_field('faq_title', $postID); ?></h2>
		<div class="faq">
			<div class="column">
				<ul class="list">
				<?php if( have_rows('faq_content') ): ?>
				<?php $count = 0; ?>
					<?php while ( have_rows('faq_content') ) : the_row(); ?>
					<?php $count++; ?>
					<?php if( $count > 6 ): ?>
						<?php break; ?>
					<?php endif; ?>
					<li class="list__item">
						<button class="button--accordion"><?php the_sub_field('faq_content_question'); ?></button>
						<div class="block--accordion"><?php the_sub_field('faq_content_answer'); ?></div>
					</li>
					<?php endwhile; ?>
				<?php endif; ?>
				</ul>
				<!--<button class="btn-expand btn-expand--turquoise">Read full FAQ</button>-->
			</div>
			<div class="column">
				<div class="chat">
					<div class="chat__title"><?php echo __('still have questions?'); ?></div>
					<div class="chat__subtitle"><?php echo __('Don’t hesitate to contact us via Live Chat'); ?></div>
					<button class="button button--small"><?php echo __('Live chat'); ?></button>
				</div>
			</div>
		</div>
	</div>
</section>