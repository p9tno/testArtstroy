<?php
/**
 * Template name: Шаблон страницы Дизайнерам, архитекторам
 */
?>

<?php get_header(); ?>

<?php

get_template_part( 'template-parts/heads/head', 'designers' ); 
get_template_part( 'template-parts/forms/form', 'request' ); 
get_template_part( 'template-parts/sections/section', 'levelDesign' );
get_template_part( 'template-parts/sections/section', 'teamSliders' );

?>

<?php get_footer();