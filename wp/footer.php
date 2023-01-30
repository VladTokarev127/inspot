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

</body>
</html>