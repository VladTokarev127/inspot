<?php
/* Template name: Контакты */
get_header();
?>

	<!-- start section contacts -->
	<section class="contacts">
		<div class="container">

			<div class="contacts__top">
				<div class="contacts__info">
					<div class="contacts__info-imgs">
						<img class="contacts__info-img contacts__info-img_desc" src="/wp-content/themes/inspot/img/contacts-info-img.png" alt="">
						<img class="contacts__info-img contacts__info-img_md" src="/wp-content/themes/inspot/img/contacts-info-img-md.png" alt="">
						<img class="contacts__info-img contacts__info-img_xs" src="/wp-content/themes/inspot/img/contacts-info-img-xs.png" alt="">
					</div>
					<div class="contacts__text contacts__text_desc">
						<h1 class="contacts__title"><?php the_field('title'); ?></h1>
						<?php the_field('text'); ?>
					</div>
					<div class="contacts__text contacts__text_mob">
						<h1 class="contacts__title"><?php the_field('title'); ?></h1>
						<?php the_field('text_mobile'); ?>
					</div>
				</div>
				<div class="contacts__socials contacts__socials_desc">
					<?php if(get_field('facebook')): ?>
						<a href="<?php the_field('facebook'); ?>" target="_blank" class="contacts__item">
							<div class="contacts__item-icon contacts__item-icon_fb">
								<img src="/wp-content/themes/inspot/img/soc-icon-1.svg" alt="facebook">
								<img src="/wp-content/themes/inspot/img/soc-icon-mob-1.svg" alt="facebook">
							</div>
							<div class="contacts__item-name">facebook</div>
						</a>
					<?php endif; ?>
					<?php if(get_field('youtube')): ?>
						<a href="<?php the_field('youtube'); ?>" target="_blank" class="contacts__item">
							<div class="contacts__item-icon contacts__item-icon_yt">
								<img src="/wp-content/themes/inspot/img/soc-icon-2.svg" alt="youtube">
								<img src="/wp-content/themes/inspot/img/soc-icon-mob-2.svg" alt="youtube">
							</div>
							<div class="contacts__item-name">youtube</div>
						</a>
					<?php endif; ?>
					<?php if(get_field('telegram')): ?>
						<a href="<?php the_field('telegram'); ?>" target="_blank" class="contacts__item">
							<div class="contacts__item-icon contacts__item-icon_tg">
								<img src="/wp-content/themes/inspot/img/soc-icon-3.svg" alt="telegram">
								<img src="/wp-content/themes/inspot/img/soc-icon-mob-3.svg" alt="telegram">
							</div>
							<div class="contacts__item-name">telegram</div>
						</a>
					<?php endif; ?>
					<?php if(get_field('instagram')): ?>
						<a href="<?php the_field('instagram'); ?>" target="_blank" class="contacts__item">
							<div class="contacts__item-icon contacts__item-icon_inst">
								<img src="/wp-content/themes/inspot/img/soc-icon-4.svg" alt="instagram">
								<img src="/wp-content/themes/inspot/img/soc-icon-mob-4.svg" alt="instagram">
							</div>
							<div class="contacts__item-name">instagram</div>
						</a>
					<?php endif; ?>
					<?php if(get_field('discord')): ?>
						<a href="<?php the_field('discord'); ?>" target="_blank" class="contacts__item">
							<div class="contacts__item-icon contacts__item-icon_dis">
								<img src="/wp-content/themes/inspot/img/soc-icon-5.svg" alt="discord">
								<img src="/wp-content/themes/inspot/img/soc-icon-mob-5.svg" alt="discord">
							</div>
							<div class="contacts__item-name">discord</div>
						</a>
					<?php endif; ?>
					<?php if(get_field('whatsapp')): ?>
						<a href="<?php the_field('whatsapp'); ?>" target="_blank" class="contacts__item">
							<div class="contacts__item-icon contacts__item-icon_wa">
								<img src="/wp-content/themes/inspot/img/soc-icon-6.svg" alt="whatsapp">
								<img src="/wp-content/themes/inspot/img/soc-icon-mob-6.svg" alt="whatsapp">
							</div>
							<div class="contacts__item-name">whatsapp</div>
						</a>
					<?php endif; ?>
				</div>
			</div>

			<div class="contacts__form-mob">
				<div class="contacts__form-list">
					<?php while( the_repeater_field('form_list') ): ?>
						<div class="contacts__form-accordion">
							<button class="contacts__form-tab" data-accordion-trigger>
								<?php the_sub_field('title'); ?>
								<svg width="47" height="60" viewBox="0 0 47 60" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M27.8623 40.1646L27.8623 0H17.8623L17.8623 39.8202L0.5625 22.4979V36.6492L19.4965 55.6078L23.0343 59.1503L26.5721 55.6078L46.3125 35.8418V21.6904L27.8623 40.1646Z" />
								</svg>
							</button>
							<div class="contacts__form-content" data-accordion-target>
								<div class="contacts__form-bg"><img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt']; ?>"></div>
								<div class="contacts__form-calls"><?php the_sub_field('text'); ?></div>
								<?php echo do_shortcode('[contact-form-7 id="106" title="Форма в контактах" html_class="contacts__form"]') ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>

			<div class="contacts__form-wrapper">
				<div class="contacts__form-circle"></div>
				<div class="contacts__form-tabs" data-tabs>
					<?php while( the_repeater_field('form_list') ): ?>
						<button class="contacts__form-tab <?php echo get_row_index() === 1 ? 'is-active' : ''; ?>" data-tab>
							<?php the_sub_field('title'); ?>
							<svg width="42" height="24" viewBox="0 0 42 24" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M26.3553 8.23145L18.1131 0H29.4342L41.6614 12.2113L29.8574 24H18.5363L26.315 16.2314H0V8.23145H26.3553Z"/>
							</svg>
						</button>
					<?php endwhile; ?>
				</div>
				<div class="contacts__form-contents" data-tab-contents>
					<?php while( the_repeater_field('form_list') ): ?>
						<div class="contacts__form-content <?php echo get_row_index() === 1 ? 'is-active' : ''; ?>" data-tab-content>
							<div class="contacts__form-bg"><img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt']; ?>"></div>
							<div class="contacts__form-calls"><?php the_sub_field('text'); ?></div>
							<?php echo do_shortcode('[contact-form-7 id="106" title="Форма в контактах" html_class="contacts__form"]') ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>

			<div class="contacts__socials contacts__socials_mob">
				<?php if(get_field('vk')): ?>
					<a href="<?php the_field('vk'); ?>" target="_blank" class="contacts__item">
						<div class="contacts__item-icon contacts__item-icon_fb">
							<img src="/wp-content/themes/inspot/img/vk.svg" alt="вконтакте">
							<img src="/wp-content/themes/inspot/img/vk-active.svg" alt="вконтакте">
						</div>
						<div class="contacts__item-name">вконтакте</div>
					</a>
				<?php endif; ?>
				<?php if(get_field('facebook')): ?>
					<a href="<?php the_field('facebook'); ?>" target="_blank" class="contacts__item">
						<div class="contacts__item-icon contacts__item-icon_fb">
							<img src="/wp-content/themes/inspot/img/soc-icon-1.svg" alt="facebook">
							<img src="/wp-content/themes/inspot/img/soc-icon-mob-1.svg" alt="facebook">
						</div>
						<div class="contacts__item-name">facebook</div>
					</a>
				<?php endif; ?>
				<?php if(get_field('youtube')): ?>
					<a href="<?php the_field('youtube'); ?>" target="_blank" class="contacts__item">
						<div class="contacts__item-icon contacts__item-icon_yt">
							<img src="/wp-content/themes/inspot/img/soc-icon-2.svg" alt="youtube">
							<img src="/wp-content/themes/inspot/img/soc-icon-mob-2.svg" alt="youtube">
						</div>
						<div class="contacts__item-name">youtube</div>
					</a>
				<?php endif; ?>
				<?php if(get_field('telegram')): ?>
					<a href="<?php the_field('telegram'); ?>" target="_blank" class="contacts__item">
						<div class="contacts__item-icon contacts__item-icon_tg">
							<img src="/wp-content/themes/inspot/img/soc-icon-3.svg" alt="telegram">
							<img src="/wp-content/themes/inspot/img/soc-icon-mob-3.svg" alt="telegram">
						</div>
						<div class="contacts__item-name">telegram</div>
					</a>
				<?php endif; ?>
				<?php if(get_field('instagram')): ?>
					<a href="<?php the_field('instagram'); ?>" target="_blank" class="contacts__item">
						<div class="contacts__item-icon contacts__item-icon_inst">
							<img src="/wp-content/themes/inspot/img/soc-icon-4.svg" alt="instagram">
							<img src="/wp-content/themes/inspot/img/soc-icon-mob-4.svg" alt="instagram">
						</div>
						<div class="contacts__item-name">instagram</div>
					</a>
				<?php endif; ?>
				<?php if(get_field('discord')): ?>
					<a href="<?php the_field('discord'); ?>" target="_blank" class="contacts__item">
						<div class="contacts__item-icon contacts__item-icon_dis">
							<img src="/wp-content/themes/inspot/img/soc-icon-5.svg" alt="discord">
							<img src="/wp-content/themes/inspot/img/soc-icon-mob-5.svg" alt="discord">
						</div>
						<div class="contacts__item-name">discord</div>
					</a>
				<?php endif; ?>
				<?php if(get_field('whatsapp')): ?>
					<a href="<?php the_field('whatsapp'); ?>" target="_blank" class="contacts__item">
						<div class="contacts__item-icon contacts__item-icon_wa">
							<img src="/wp-content/themes/inspot/img/soc-icon-6.svg" alt="whatsapp">
							<img src="/wp-content/themes/inspot/img/soc-icon-mob-6.svg" alt="whatsapp">
						</div>
						<div class="contacts__item-name">whatsapp</div>
					</a>
				<?php endif; ?>
			</div>

		</div>
	</section>
	<!-- end section contacts -->

<?php get_footer(); ?>