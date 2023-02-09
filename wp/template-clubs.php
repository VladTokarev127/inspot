<?php
/* Template name: Клубы */
get_header();
?>

	<!-- start section clubs -->
	<section class="clubs">
		<div class="container">

			<div class="clubs__list">
				<?php
				if ( get_query_var('paged') ) {
					$paged = get_query_var('paged');
				} elseif ( get_query_var('page') ) {
					$paged = get_query_var('page');
				} else {
					$paged = 1;
				}
				$args = array(
					'post_type' => 'clubs',
					'post_status' => 'publish',
					'paged' => $paged,
					'order' => 'ASC',
					'posts_per_page' => '4',
				);
				$clubs = new WP_Query( $args );
				?>
				<?php if($clubs->have_posts()):
				while($clubs->have_posts()): $clubs->the_post(); ?>
					<div class="clubs__item">
						<div class="clubs__swiper swiper">
							<div class="clubs__swiper-wrapper swiper-wrapper">
								<?php $images = get_field('gallery'); foreach( $images as $key=>$image ): ?>
									<div class="clubs__swiper-slide swiper-slide">
										<span class="clubs__swiper-slide-mask clubs__swiper-slide-bg">
											<span style="background-image: url(<?php echo esc_url($image['url']); ?>);"></span>
										</span>
										<span class="clubs__swiper-slide-mask">
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>">
										</span>
									</div>
								<?php endforeach; ?>
							</div>
							<div class="swiper-pagination"></div>
						</div>
						<div class="clubs__content">
							<div class="clubs__country"><?php the_field('city'); ?></div>
							<div class="clubs__loc"><?php the_field('preview_text'); ?></div>
							<a href="<?php the_permalink(); ?>" class="clubs__btn btn btn_grey">подробнее</a>
						</div>
					</div>
				<?php endwhile; ?>
				<?php else: ?>
					Записей нет!
				<?php endif; wp_reset_query(); ?>
				<?php if($clubs->max_num_pages > $paged): ?>
					<button class="clubs__show-more" data-paged="<?php echo $paged + 1; ?>">показать больше клубов</button>
				<?php endif; ?>
			</div>

		</div>
	</section>
	<!-- end section clubs -->

<?php get_footer(); ?>