<?php get_header(); ?>

	<!-- start section hero -->
	<section class="hero">
		<div class="container">

			<div class="hero__grid">
				<?php while( the_repeater_field('hero_list') ): ?>
					<div class="hero__item hero__item_<?php echo get_row_index(); ?> <?php echo get_row_index() === 1 ? 'hero__item_active' : ''; ?>">
						<div class="hero__item-bg"><img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt'] ?>"></div>
						<a href="<?php the_sub_field('link'); ?>" class="hero__item-btn btn btn_white">Подробнее</a>
						<div class="hero__item-info"><?php the_sub_field('desc'); ?></div>
						<div class="hero__rgb"><span></span></div>
					</div>
				<?php endwhile; ?>
			</div>

		</div>
		<div class="hero__circle"></div>
	</section>
	<!-- end section hero -->

	<!-- start section hero__mobile -->
	<section class="hero__mobile">
		<div class="container">

			<div class="hero__swiper-container">
				<div class="hero__swiper swiper">
					<div class="hero__swiper-wrapper swiper-wrapper">
						<?php while( the_repeater_field('hero_list_mobile') ): ?>
							<div class="hero__swiper-slide swiper-slide">
								<div class="hero__swiper-img">
									<span class="hero__swiper-mask">
										<img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt'] ?>">
									</span>
								</div>
								<div class="hero__swiper-content">
									<div class="hero__swiper-title"><?php the_sub_field('title'); ?></div>
									<div class="hero__swiper-desc"><?php the_sub_field('text'); ?></div>
									<a href="<?php the_sub_field('link'); ?>" class="hero__swiper-btn btn btn_white">Подробнее</a>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="swiper-pagination"></div>
				</div>
				<div class="hero__rgb"><span></span></div>
			</div>

		</div>
		<div class="hero__circle"></div>
	</section>
	<!-- end section hero__mobile -->

	<!-- star section hero__clubs -->
	<section class="hero__clubs">
		<div class="container">

			<div class="hero__clubs-list">
				<?php while( the_repeater_field('clubs_list') ): ?>
					<a href="<?php the_sub_field('link'); ?>" class="hero__clubs-item">
						<div class="hero__clubs-content">
							<div class="hero__clubs-num"><?php the_sub_field('title'); ?></div>
							<div class="hero__clubs-text"><?php the_sub_field('text'); ?></div>
						</div>
						<div class="hero__clubs-img">
							<span class="hero__clubs-mask hero__clubs-bg">
								<span style="background-image: url(<?php echo esc_url(get_sub_field('img')['url']); ?>);"></span>
							</span>
							<span class="hero__clubs-mask">
								<img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt']; ?>">
							</span>
						</div>
					</a>
				<?php endwhile; ?>
			</div>

		</div>
	</section>
	<!-- end section hero__clubs -->

	<?php get_template_part('template-parts/template-map'); ?>

<?php get_footer(); ?>