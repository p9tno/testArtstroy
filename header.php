<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php if (get_field('header_scripts', 'option')) { ?>
		<?php the_field('header_scripts', 'option'); ?>
	<?php } ?>
</head>

<body <?php body_class(); ?>>

	<?php get_template_part( 'template-parts/parts/content', 'preloader' ); ?>

	<?php wp_body_open(); ?>

	<?php get_template_part( 'template-parts/content', 'header' ); ?>


	<?php 
	if ( !is_page_template(['template-homepage.php']) ) { 
	
		$reverse_class = '';

		if ( 
			is_page_template(['template-about.php']) ||
			is_page_template(['template-designers.php']) ||
			is_page_template(['template-thanks.php']) ||
			is_page_template(['template-leadmagnet.php']) ||
			is_page_template(['template-apartments.php']) ||
			is_page_template(['template-remont.php']) ||
			is_page_template(['template-design.php']) ||
			is_page_template(['template-construction.php']) ||
			is_page_template(['template-homepage.php']) ||
			is_404()
			
		) {
			$reverse_class = 'breadcrumbs_reverse';
		} 
		
		
	?>
	 	<?php if (!is_page_template(['template-leadmagnet.php']) && !is_page_template(['template-quiz.php'])) { ?>
			<!-- begin breadcrumbs-->
			<div class="breadcrumbs section <?php echo $reverse_class; ?>">
				<div class="container_center container_center_sm">
					<?php kama_breadcrumbs(''); ?>
				</div>
			</div>
			<!-- end breadcrumbs-->
		<?php } ?>
	<?php } ?>



	

