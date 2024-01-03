<?php
/**
 * Template name: Шаблон страницы Контакты
 */
?>

<?php get_header(); ?>

<?php 
get_template_part( 'template-parts/sections/section', 'contacts' );

get_template_part( 'template-parts/sections/section', 'report' );
?>

<?php get_footer();