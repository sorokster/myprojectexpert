<section class="section section--testimonials">
	<div class="container">
		<h2 class="section__title"><?php the_field('testimonials_title', $postID); ?></span></h2>
		<div class="slider slider--testimonials">
			<div class="owl-carousel">
			<?php $posts_testimonials = get_field('testimonials_content'); ?>
			<?php if ($posts_testimonials): ?>
				<?php foreach($posts_testimonials as $post_testimonial): ?>
				<div class="item">
					<div class="item__header">
						<div class="name"><?php echo get_field('testimonials_name', $post_testimonial); ?></div>
						<div class="rating"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-stars.png" width="100" height="17" alt=""></div>
					</div>
					<div class="item__date"><?php echo get_field('testimonials_date', $post_testimonial); ?></div>
					<div class="item__description"><?php echo get_field('testimonials_description', $post_testimonial); ?></div>
				</div>
				<?php endforeach; ?>
			<?php endif; ?>
			</div>
		</div>
	</div>
</section>