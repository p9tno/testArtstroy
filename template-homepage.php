<?php
/**
 * Template name: Шаблон главной страницы
 */
?>

<?php get_header(); ?>

<?php

get_template_part( 'template-parts/sections/section', 'firstScreen' );
// get_template_part( 'template-parts/quiz/content');
// get_template_part( 'template-parts/sections/section', 'founder' ); 
// get_template_part( 'template-parts/sections/section', 'certificate' ); 
get_template_part( 'template-parts/sections/section', 'task' ); 

// get_template_part( 'template-parts/sections/section', 'presentation' ); 

// get_template_part( 'template-parts/sections/section', 'projects' ); 
// get_template_part( 'template-parts/sections/section', 'honest' ); 
// get_template_part( 'template-parts/sections/section', 'advantage' ); 
// get_template_part( 'template-parts/sections/section', 'location' ); 
// get_template_part( 'template-parts/sections/section', 'reviews' ); 
// get_template_part( 'template-parts/sections/section', 'logos' ); 
// get_template_part( 'template-parts/sections/section', 'news' ); 
// get_template_part( 'template-parts/sections/section', 'consultation' ); 
get_template_part( 'template-parts/sections/section', 'content' ); 

?>

<?php get_footer();
