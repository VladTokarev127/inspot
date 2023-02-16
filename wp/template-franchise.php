<?php
/* Template name: Франшиза */
get_header();
?>

	<!-- start section franchise__hero -->
	<section class="franchise__hero">
		<div class="container">

			<div class="franchise__hero-content">
				<h1 class="franchise__hero-title"><?php the_field('title_1'); ?></h1>
				<h2 class="franchise__hero-subtitle"><?php the_field('subtitle_1'); ?></h2>
				<a href="<?php the_field('file_1'); ?>" class="franchise__hero-btn btn btn_red popup-link" data-popup="popup-download">Скачать бизнес-план</a>
			</div>
			<div class="franchise__advantages">
				<div class="franchise__advantages-bg">
					<span class="franchise__advantages-mask franchise__advantages-mask-bg">
						<span style="background-image: url(<?php echo esc_url(get_field('img_1')['url']); ?>);"></span>
					</span>
					<span class="franchise__advantages-mask">
						<img src="<?php echo esc_url(get_field('img_1')['url']); ?>" alt="<?php echo get_field('img_1')['alt']; ?>">
						<img src="<?php echo esc_url(get_field('img_1-mob')['url']); ?>" alt="<?php echo get_field('img_1-mob')['alt']; ?>">
					</span>
				</div>
				<div class="franchise__advantages-list">
					<?php while( the_repeater_field('list_1') ): ?>
						<div class="franchise__advantages-item"><?php the_sub_field('text'); ?></div>
					<?php endwhile; ?>
				</div>
			</div>

		</div>
	</section>
	<!-- end section franchise__hero -->

	<!-- start section results -->
	<section class="results">
		<div class="container">

			<h2 class="title results__title"><?php the_field('title_2'); ?></h2>
			<div class="results__grid">
				<?php while( the_repeater_field('list_2') ): ?>
					<div class="results__item">
						<div class="results__item-content">
							<div class="results__img">
								<img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt']; ?>">
								<img src="<?php echo esc_url(get_sub_field('img_mob')['url']); ?>" alt="<?php echo get_sub_field('img_mob')['alt']; ?>">
							</div>
							<div class="results__text">
								<h3 class="results__item-title"><?php the_sub_field('title'); ?></h3>
								<div class="results__subtitle"><?php the_sub_field('subtitle'); ?></div>
								<div class="results__list">
									<?php while( the_repeater_field('list') ): ?>
										<div class="results__list-item"><?php the_sub_field('text'); ?></div>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>

			<div class="results__bottom">
				<div class="results__bottom-title"><?php the_field('subtitle_2'); ?></div>
				<div class="results__bottom-text"><?php the_field('text_1'); ?></div>
				<a href="<?php the_field('link_1'); ?>" class="btn btn_red results__bottom-btn popup-link" data-popup="popup-quiz">Рассчитать</a>
			</div>

			<div class="results__circle"></div>
		</div>
	</section>
	<!-- end section results -->
	
	<!-- start section inspot -->
	<section class="inspot">
		<div class="container">

			<h2 class="title inspot__title"><?php the_field('title_3'); ?></h2>
			<div class="inspot__list">
				<?php while( the_repeater_field('list_3') ): ?>
					<div class="inspot__item">
						<div class="inspot__star"><span></span></div>
						<div class="inspot__text"><?php the_sub_field('text'); ?></div>
					</div>
				<?php endwhile; ?>
			</div>

			<div class="configuration__grid configuration__grid_inspot">
				<?php while( the_repeater_field('list_4') ): ?>
					<div class="configuration__item">
						<div class="configuration__icon">
							<div class="configuration__icon-bg"><span></span></div>
							<img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt']; ?>">
						</div>
						<div class="configuration__info">
							<div class="configuration__type"><?php the_sub_field('text'); ?></div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>

		</div>
	</section>
	<!-- end section inspot -->

	<!-- start section tournament -->
	<section class="tournament">
		<div class="tournament__circle"></div>
		<div class="container">

			<h2 class="title tournament__title"><?php the_field('title_4'); ?></h2>
			<div class="tournament__swiper-container">
				<div class="tournament__swiper swiper">
					<div class="tournament__swiper-wrapper swiper-wrapper">
						<?php while( the_repeater_field('list_5') ): ?>
							<div class="tournament__swiper-slide swiper-slide">
								<div class="tournament__bg">
									<img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt']; ?>">
									<img src="<?php echo esc_url(get_sub_field('img_mob')['url']); ?>" alt="<?php echo get_sub_field('img_mob')['alt']; ?>">
								</div>
								<div class="tournament__content">
									<div class="tournament__logo"><img src="<?php echo esc_url(get_sub_field('logo')['url']); ?>" alt="<?php echo get_sub_field('logo')['alt']; ?>"></div>
									<h3 class="tournament__content-title"><?php the_sub_field('title'); ?></h3>
									<div class="tournament__bottom">
										<div class="tournament__list">
											<?php while( the_repeater_field('list') ): ?>
												<div class="tournament__list-item"><?php the_sub_field('text'); ?></div>
											<?php endwhile; ?>
										</div>
										<div class="tournament__text"><?php the_sub_field('text'); ?></div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>

		</div>
	</section>
	<!-- end section tournament -->

	<!-- start section graph -->
	<section class="graph">
		<div class="container">

			<h2 class="title graph__title"><?php the_field('title_5'); ?></h2>
			<div class="graph__text"><?php the_field('subtitle_3'); ?></div>
			<div class="graph__label"><?php the_field('text_2'); ?></div>
			<div class="graph__img">
				<img src="<?php echo esc_url(get_field('img_2')['url']); ?>" alt="<?php echo get_field('img_2')['alt']; ?>">
				<img src="<?php echo esc_url(get_field('img_2-mob')['url']); ?>" alt="<?php echo get_field('img_2-mob')['alt']; ?>">
			</div>

		</div>
	</section>
	<!-- end section graph -->

	<!-- start section steps -->
	<section class="steps">
		<div class="container">

			<h2 class="title steps__title"><?php the_field('title_6'); ?></h2>
			<div class="steps__list">
				<?php while( the_repeater_field('list_6') ): ?>
					<div class="steps__item">
						<div class="steps__icon"><?php the_sub_field('svg'); ?></div>
						<div class="steps__text"><?php the_sub_field('text'); ?></div>
					</div>
				<?php endwhile; ?>
			</div>

		</div>
	</section>
	<!-- end section steps -->

	<!-- start section download -->
	<section class="download">
		<div class="container">

			<div class="download__mask">
				<h2 class="download__title"><?php the_field('title_7'); ?></h2>
				<a href="<?php the_field('file_2'); ?>" class="download__btn btn btn_white popup-link" data-popup="popup-download">Скачать</a>
			</div>

		</div>
	</section>
	<!-- end section download -->

	<!-- start section chart -->
	<section class="chart">
		<div class="container">

			<h2 class="chart__title"><?php the_field('title_8'); ?></h2>
			<div class="chart__bg container">
				<img src="/wp-content/themes/inspot/img/chart-bg.png" alt="">
				<img src="/wp-content/themes/inspot/img/chart-bg-sm.png" alt="">
			</div>

		</div>
	</section>
	<!-- end section chart -->

	<!-- start section place -->
	<section class="place">
		<div class="container">

			<div class="place__wrapper">
				<?php while( the_repeater_field('list_7') ): ?>
					<div class="place__item">
						<h2 class="title place__title"><?php the_sub_field('title'); ?></h2>
						<div class="place__grid">
							<div class="place__list">
								<?php while( the_repeater_field('list') ): ?>
									<div class="place__list-item"><?php the_sub_field('text'); ?></div>
								<?php endwhile; ?>
							</div>
							<div class="place__img">
								<div class="place__mask"><img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt']; ?>"></div>
								<div class="place__circle" style="background-color: <?php the_sub_field('color'); ?>;"></div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>

		</div>
	</section>
	<!-- end section place -->

	<!-- start section offer -->
	<section class="offer">
		<div class="container">

			<div class="offer__mask">
				<h2 class="offer__title"><?php the_field('title_9'); ?></h2>
				<a href="<?php the_field('file_3'); ?>" class="offer__btn btn btn_red popup-link" data-popup="popup-download">Скачать договор</a>
			</div>

		</div>
	</section>
	<!-- end section offer -->

<?php get_footer(); ?>