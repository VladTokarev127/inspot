<?php
get_header();
?>

	<!-- start section club__hero -->
	<section class="club__hero">
		<div class="container">
			<div class="club__hero-circle"></div>

			<div class="club__hero-swiper-container">
				<div class="club__hero-swiper swiper">
					<div class="club__hero-swiper-wrapper swiper-wrapper">
						<?php $images = get_field('gallery'); foreach( $images as $key=>$image ): ?>
							<div class="club__hero-swiper-slide swiper-slide">
								<span class="club__hero-swiper-slide-mask club__hero-swiper-slide-bg">
									<span style="background-image: url(<?php echo esc_url($image['url']); ?>);"></span>
								</span>
								<span class="club__hero-swiper-slide-mask">
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>">
								</span>
								<a href="<?php echo esc_url($image['url']); ?>" class="club__hero-swiper-full">
									<svg width="27" height="27" viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg">
										<path d="M23.3542 3.64138L16.5273 10.4683" stroke-width="3"/>
										<path d="M16.0742 3.64209L23.3562 3.64209L23.3562 10.9241" stroke-width="3"/>
										<path d="M3.64577 23.3537L10.4727 16.5269" stroke-width="3"/>
										<path d="M10.9297 23.353L3.64768 23.353L3.64768 16.071" stroke-width="3"/>
										<path d="M23.3601 23.3547L16.5332 16.5278" stroke-width="3"/>
										<path d="M23.3594 16.0728L23.3594 23.3548L16.0774 23.3548" stroke-width="3"/>
										<path d="M3.64089 3.64138L10.4678 10.4683" stroke-width="3"/>
										<path d="M3.6416 10.9233L3.6416 3.64133L10.9236 3.64133" stroke-width="3"/>
									</svg>
									<span>на весь экран</span>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
			<div class="club__hero-info">
				<div class="club__hero-loc"><?php the_field('city'); ?></div>
				<h1 class="club__hero-title"><?php the_field('address'); ?></h1>
			</div>

		</div>
	</section>
	<!-- end section club__hero -->

	<!-- start section configuration -->
	<section class="configuration">
		<div class="container">

			<h2 class="title configuration__title"><?php the_field('title_1'); ?></h2>
			<div class="configuration__tabs" data-tabs>
				<?php while( the_repeater_field('conf_list_1') ): ?>
					<button class="configuration__tab <?php echo get_row_index() === 1 ? 'is-active' : ''; ?>" data-tab><?php the_sub_field('title'); ?></button>
				<?php endwhile; ?>
			</div>
			<div class="configuration__tab-contents" data-tab-contents>
				<?php while( the_repeater_field('conf_list_1') ): ?>
					<div class="configuration__tab-content" data-tab-content>
						<div class="configuration__grid">
							<?php while( the_repeater_field('list') ): ?>
								<div class="configuration__item <?php echo get_row_index() === 1 ? 'is-active' : ''; ?>">
									<div class="configuration__icon">
										<div class="configuration__icon-bg"><span></span></div>
										<img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt']; ?>">
									</div>
									<div class="configuration__info">
										<div class="configuration__type"><?php the_sub_field('title'); ?></div>
										<div class="configuration__name"><?php the_sub_field('text'); ?></div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>

		</div>
	</section>
	<!-- end section configuration -->

	<!-- start section prices -->
	<section class="prices">
		<div class="prices__circle"></div>
		<div class="container">

			<h2 class="title prices__title"><?php the_field('title_2'); ?></h2>
			<div class="configuration__tabs" data-tabs>
				<?php while( the_repeater_field('price_list_1') ): ?>
					<button class="configuration__tab <?php echo get_row_index() === 1 ? 'is-active' : ''; ?>" data-tab><?php the_sub_field('title'); ?></button>
				<?php endwhile; ?>
			</div>
			<div class="configuration__tab-contents" data-tab-contents>
				<?php while( the_repeater_field('price_list_1') ): ?>
					<div class="configuration__tab-content" data-tab-content>
						<div class="prices__grid">
							<?php while( the_repeater_field('list') ): ?>
								<div class="prices__item">
									<div class="prices__content">
										<div class="prices__img-bg"></div>
										<div class="prices__img"><img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt']; ?>"></div>
										<div class="prices__top">
											<div class="prices__time"><?php the_sub_field('time'); ?></div>
											<div class="prices__desc"><?php the_sub_field('price'); ?></div>
										</div>
										<div class="prices__val"><?php the_sub_field('total'); ?></div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>

			<div class="prices__text"><?php the_field('text_1'); ?></div>

			<div class="prices__btns">
				<a href="<?php the_field('link_1'); ?>" class="btn btn_grey prices__btn" download>Смотреть полный прайс</a>
				<a href="<?php the_field('link_1_2'); ?>" class="btn btn_red prices__btn" download>список всех акций</a>
			</div>
			

		</div>
	</section>
	<!-- end section prices -->

	<!-- start section kitchen -->
	<section class="kitchen">
		<div class="container">

			<h2 class="title kitchen__title"><?php the_field('title_3'); ?></h2>
			<div class="kitchen__list">
				<?php while( the_repeater_field('list_3') ): ?>
					<div class="kitchen__item">
						<div class="kitchen__top" data-accordion-trigger>
							<div class="kitchen__top-content">
								<div class="kitchen__img"><img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt']; ?>"></div>
								<h3 class="kitchen__name"><?php the_sub_field('title'); ?></h3>
								<div class="kitchen__arrow">
									<svg width="47" height="60" viewBox="0 0 47 60" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M27.8623 40.1646L27.8623 0H17.8623L17.8623 39.8202L0.5625 22.4979V36.6492L19.4965 55.6078L23.0343 59.1503L26.5721 55.6078L46.3125 35.8418V21.6904L27.8623 40.1646Z" />
									</svg>
								</div>
							</div>
						</div>
						<div class="kitchen__desc" data-accordion-target>
							<div class="kitchen__rows">
								<?php while( the_repeater_field('list') ): ?>
									<div class="kitchen__row">
										<div class="kitchen__desc-name"><?php the_sub_field('name'); ?></div>
										<div class="kitchen__desc-price"><?php the_sub_field('price'); ?></div>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<div class="kitchen__item">
					<div class="kitchen__top">
						<div class="kitchen__top-content">
							<h3 class="kitchen__name kitchen__name_red"><?php the_field('title_4'); ?></h3>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- end section kitchen -->

	<!-- start section manager -->
	<section class="manager">
		<div class="container">
			<div class="manager__circle"></div>

			<div class="manager__content">
				<h2 class="title manager__title"><?php the_field('title_5'); ?></h2>
				<a href="<?php the_field('link_2'); ?>" class="btn btn_red manager__btn">Связаться</a>
			</div>

		</div>
	</section>
	<!-- end section manager -->

	<?php get_template_part('template-parts/template-map'); ?>

<?php get_footer(); ?>