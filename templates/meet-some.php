<section class="section section--meet-some">
	<div class="container">
		<h2 class="section__title"><?php the_field('testimonials_title', $postID); ?></h2>
		<form action="">
			<div class="experts-nav">
				<select name="" id="">
					<option value="" rel="hide">Type of paper</option>
				</select>
				<select name="" id="">
					<option value="" rel="hide">Subject</option>
					<option value="" rel="hide">type of subject 2</option>
					<option value="" rel="hide">type of subject 3</option>
				</select>
				<button type="submit" class="button button--small button--submit">Search</button>
			</div>
		</form>
		<div class="slider slider--experts">
			<div class="owl-carousel">
			<?php $writers = get_field('writers_content'); ?>
			<?php if ($writers): ?>
				<?php foreach($writers as $writer): ?>
				<div class="item">
					<div class="item__avatar">
						<img src="<?php the_field('writers_avatar', $writer); ?>" alt="">
					</div>
					<div class="item__name"><?php the_field('writers_name', $writer); ?></div>
					<div class="item__career"><?php the_field('writers_career', $writer); ?></div>
					<div class="item__table">
						<div class="item__row">
							<div class="title"><?php echo __('Pages Written'); ?></div>
							<div class="rating"><?php the_field('writers_pages_written', $writer); ?></div>
						</div>
						<div class="item__row">
							<div class="title"><?php echo __('Years of Experience'); ?></div>
							<div class="rating"><?php the_field('writers_years_of_experience', $writer); ?></div>
						</div>
						<div class="item__row">
							<div class="title"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-stars.png" width="100" height="17" alt=""></div>
							<div class="rating"><?php the_field('writers_rating', $writer); ?></div>
						</div>
					</div>
					<div class="item__feedback">Based on <?php the_field('writers_customers_feedback_count', $writer); ?> Customer’s Feedback</div>
					<div class="item__categories">
						<ul class="list">
						<?php $writers_services = get_field('writers_services', $writer); ?>
						<?php if ($writers_services): ?>
							<?php foreach($writers_services as $writers_service): ?>
							<li class="list__item"><?php echo get_the_title($writers_service); ?></li>
							<?php endforeach; ?>
						<?php endif; ?>
						</ul>
					</div>
					<button class="button button--small">Hire me</button>
				</div>
				<?php endforeach; ?>
			<?php endif; ?>
			</div>
		</div>
	</div>
</section>