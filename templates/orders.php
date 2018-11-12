<section class="section section--orders">
	<div class="container">
		<h2 class="section__title"><?php the_field('orders_title', $postID); ?></h2>
		<div class="table">
			<table class="table--orders">
				<thead>
					<tr>
						<td>Topic Title kjopic hitleеopic еitlegopic gitle</td>
						<td>Discipline</td>
						<td>Delivered</td>
						<td>Type of paper</td>
						<td>Pages</td>
					</tr>
				</thead>
				<tbody>
				<?php if( have_rows('orders_content') ): ?>
					<?php while ( have_rows('orders_content') ) : the_row(); ?>
					<tr>
						<td><?php the_sub_field('orders_content_title'); ?></td>
						<td><?php the_sub_field('orders_content_discipline'); ?></td>
						<td><?php the_sub_field('orders_content_delivered'); ?></td>
						<td><?php the_sub_field('orders_content_type_of_paper'); ?></td>
						<td><?php the_sub_field('orders_content_pages'); ?></td>
					</tr>
					<?php endwhile; ?>
				<?php endif; ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="5">
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</section>