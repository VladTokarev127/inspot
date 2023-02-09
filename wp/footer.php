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