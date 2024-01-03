<?php
/**
 * Template name: Шаблон страницы Вакансии
 */
?>

<?php get_header(); ?>

<?php
get_template_part( 'template-parts/sections/section', 'partOfTeam' );
get_template_part( 'template-parts/sections/section', 'teamSliders' );
get_template_part( 'template-parts/sections/section', 'vacancies' );
?>

<?php get_footer();