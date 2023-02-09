<?php
	$tel = get_field('tel', 'options');
	$result = preg_replace('/(?:\G|^)[+\d]*\K[^:+\d]/m', '', $tel);
?>
	</main>

		<footer class="footer">
			<div class="container">

				<div class="footer__grid footer__grid_desc">
					<div class="footer__item">
						<p><?php the_field('ogrn', 'options'); ?></p>
						<p><?php the_field('inn', 'options'); ?></p>
					</div>
					<div class="footer__item">
						<p><?php the_field('address', 'options'); ?></p>
						<p><a href="<?php the_field('policy', 'options'); ?>">политика конфиденциальности</a></p>
					</div>
					<div class="footer__item">
						<p><a href="mailto:<?php the_field('mail', 'options'); ?>"><?php the_field('mail', 'options'); ?></a>	</p>
						<p><a href="tel:<?php echo $result; ?>"><?php echo $tel; ?></a></p>
					</div>
					<div class="footer__item">
						<?php 
							wp_nav_menu([
								'menu'            => 'footer_menu',
								'container'       => '',
							]);
						?>
						<div class="footer__copy"><?php the_field('copyright', 'options'); ?></div>
					</div>
				</div>

				<div class="footer__grid footer__grid_tab">
					<div class="footer__item">
						<p><?php the_field('ogrn', 'options'); ?></p>
						<p><?php the_field('inn', 'options'); ?></p>
						<p><?php the_field('address', 'options'); ?></p>
					</div>
					<div class="footer__item">
						<p><a href="mailto:<?php the_field('mail', 'options'); ?>"><?php the_field('mail', 'options'); ?></a></p>
						<p><a href="tel:<?php echo $result; ?>"><?php echo $tel; ?></a></p>
						<p><a href="<?php the_field('policy', 'options'); ?>">политика конфиденциальности</a></p>
					</div>
					<div class="footer__item">
						<?php 
							wp_nav_menu([
								'menu'            => 'footer_menu',
								'container'       => '',
							]);
						?>
						<div class="footer__copy"><?php the_field('copyright', 'options'); ?></div>
					</div>
				</div>

				<div class="footer__grid footer__grid_mob">
					<div class="footer__item">
						<p><?php the_field('ogrn', 'options'); ?></p>
						<p><?php the_field('inn', 'options'); ?></p>
						<p><?php the_field('address', 'options'); ?></p>
						<p><a href="<?php the_field('policy', 'options'); ?>">политика конфиденциальности</a></p>
					</div>
					<div class="footer__item">
						<p><a href="mailto:<?php the_field('mail', 'options'); ?>"><?php the_field('mail', 'options'); ?></a></p>
						<p><a href="tel:<?php echo $result; ?>"><?php echo $tel; ?></a></p>
						<?php 
							wp_nav_menu([
								'menu'            => 'footer_menu',
								'container'       => '',
							]);
						?>
					</div>
					<div class="footer__item">
						<div class="footer__copy"><?php the_field('copyright', 'options'); ?></div>
					</div>
				</div>

			</div>
		</footer>

	</div>

	<div class="popup-wrapper" id="popup-download">
		<div class="overlay"></div>
		<div class="popup">
			<div class="popup__logo">
				<picture>
					<source media="(min-width:565px)" srcset="/wp-content/themes/inspot/img/popup-logo.png">
					<img src="/wp-content/themes/inspot/img/popup-logo-xs.png" alt="Inspot">
				</picture>
			</div>
			<div class="popup__title">Куда вам отправить франчайзи-кит?</div>
			<?php echo do_shortcode('[contact-form-7 id="306" title="Форма попап" html_class="popup__form"]'); ?>
		</div>
	</div>

	<div class="popup-wrapper" id="popup-quiz">
		<div class="overlay"></div>
		<div class="popup">
			<div class="popup__logo">
				<picture>
					<source media="(min-width:565px)" srcset="/wp-content/themes/inspot/img/popup-logo.png">
					<img src="/wp-content/themes/inspot/img/popup-logo-xs.png" alt="Inspot">
				</picture>
			</div>
			<?php echo do_shortcode('[contact-form-7 id="309" title="Форма квиз" html_class="popup__form"]'); ?>
		</div>
	</div>

	<?php wp_footer(); ?>
	<?php if(is_front_page()): ?>
		<script>
			document.addEventListener('DOMContentLoaded',function() {
				$('.preloader__circle, .preloader__logo, .preloader__sublogo').addClass('is-active');
				window.onload = function(){
					setTimeout(function() {
						$('.preloader').fadeOut(700);
					}, 3500)
				}
			})
		</script>
	<?php endif; ?>

</body>
</html>