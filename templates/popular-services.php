<section class="section section--popular-services ">
	<div class="container">
		<div class="services">
			<h3 class="services__title">Popular Services</h3>
			<ul class="list">
			<?php 
			$args = [
				'post_type' => 'page',
				'fields' => 'ids',
				'nopaging' => true,
				'meta_key' => '_wp_page_template',
				'meta_value' => 'esse.php'
			];
			$pages = get_posts( $args );
			?>
			<?php foreach ($pages as $page): ?>
				<li class="list__item">
					<a class="list__link" href="<?php echo get_the_permalink($page); ?>" target="_blank"><?php echo get_the_title($page); ?></a>
				</li>
			<?php endforeach; ?>
			</ul>
			<!--<button class="btn-expand btn-expand--white">More services</button>-->
		</div>
	</div>
</section>