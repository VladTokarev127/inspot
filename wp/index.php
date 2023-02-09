<?php get_header(); ?>

	<!-- start section hero__mobile -->
	<section class="hero__mobile">

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
								<div class="container">
									<div class="hero__swiper-content-wrapper">
										<a href="<?php the_sub_field('video'); ?>" class="hero__swiper-play">
											<svg width="11" height="14" viewBox="0 0 11 14" xmlns="http://www.w3.org/2000/svg">
												<path d="M11 7L0.5 13.0622L0.500001 0.937822L11 7Z"/>
											</svg>
										</a>
										<div class="hero__swiper-title"><?php the_sub_field('title'); ?></div>
										<div class="hero__swiper-desc"><?php the_sub_field('text'); ?></div>
										<a href="<?php the_sub_field('link'); ?>" class="hero__swiper-btn btn btn_white">Подробнее</a>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="swiper-pagination-container">
					<div class="container">
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
			<div class="hero__rgb"><span></span></div>
		</div>

		<div class="hero__circle"></div>
	</section>
	<!-- end section hero__mobile -->

	<!-- start section hero__info -->
	<section class="hero__info">
		<div class="container">

			<div class="hero__info-img">
				<picture>
					<source media="(min-width:565px)" srcset="/wp-content/themes/inspot/img/info.png">
					<img src="<?php echo esc_url(get_field('logo_mobile', 'options')['url']); ?>" alt="<?php echo get_field('logo_mobile', 'options')['alt']; ?>">
				</picture>
			</div>
			<div class="hero__info-content">
				<p>Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan  Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan  Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan</p>
				<p>Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan  Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan Nunc lectus fringilla tempus, auctor accumsan  </p>
			</div>

		</div>
	</section>
	<!-- end section hero__info -->

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