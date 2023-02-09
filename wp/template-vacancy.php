<?php
/* Template name: Вакансии */
get_header();
?>

	<!-- start section vacancy -->
	<section class="vacancy">
		<div class="container">

			<h1 class="title vacancy__title">наши вакансии</h1>

			<div class="vacancy__list">
				<?php while( the_repeater_field('list') ): ?>
					<div class="vacancy__item">
						<div class="vacancy__top" data-accordion-trigger>
							<h2 class="vacancy__name"><?php the_sub_field('title'); ?></h2>
							<div class="vacancy__arrow">
								<svg width="47" height="60" viewBox="0 0 47 60" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M27.8623 40.1646L27.8623 0H17.8623L17.8623 39.8202L0.5625 22.4979V36.6492L19.4965 55.6078L23.0343 59.1503L26.5721 55.6078L46.3125 35.8418V21.6904L27.8623 40.1646Z" />
								</svg>
							</div>
						</div>
						<div class="vacancy__desc" data-accordion-target>
							<div class="vacancy__price"><?php the_sub_field('price'); ?></div>
							<div class="vacancy__text"><?php the_sub_field('desc'); ?></div>
							<a href="<?php the_sub_field('link'); ?>" class="vacancy__btn btn btn_red">откликнуться</a>
						</div>
					</div>
				<?php endwhile; ?>
			</div>

		</div>
	</section>
	<!-- end section vacancy -->

	<!-- start section form -->
	<section class="form">
		<div class="container">

			<div class="form__content"><?php the_field('form_text'); ?></div>

			<div class="form__block-wrapper">
				<?php echo do_shortcode('[contact-form-7 id="69" title="Контактная форма 1" html_class="form__block"]') ?>
			</div>

		</div>
	</section>
	<!-- end section form -->

<?php get_footer(); ?>