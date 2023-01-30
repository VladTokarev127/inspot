<?php
get_header();
?>

	<!-- start section club -->
	<section class="club">
		<div class="container">

			<div class="text">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
				endwhile; else: ?>
				<?php endif; ?>
			</div>

		</div>
	</section>
	<!-- end section club -->

<?php get_footer(); ?>