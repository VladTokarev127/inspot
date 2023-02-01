	</main>

		<footer class="footer">
			<div class="container">

				<div class="footer__grid">
					<?php while( the_repeater_field('footer_list', 'options') ): ?>
						<div class="footer__item"><?php the_sub_field('text'); ?></div>
					<?php endwhile; ?>
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