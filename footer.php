		<?php // get_template_part( 'template-parts/parts/content', 'clip' ); ?>
		<?php // get_template_part( 'template-parts/parts/content', 'lowerpanel' ); ?>
		<?php get_template_part( 'template-parts/parts/content', 'toTop' ); ?>
		
		<?php get_template_part( 'template-parts/content', 'footer' ); ?>

		<?php wp_footer(); ?>

		<?php if (get_field('footer_scripts', 'option')) { ?>
			<?php the_field('footer_scripts', 'option'); ?>
		<?php } ?>

	</body>
</html>