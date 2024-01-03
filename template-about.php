<?php
/**
 * Template name: Шаблон страницы О компании
 */
?>

<?php get_header(); ?>

<?php



get_template_part( 'template-parts/sections/section', 'approach' ); 

get_template_part( 'template-parts/sections/section', 'founder' );
get_template_part( 'template-parts/sections/section', 'certificate' ); 
get_template_part( 'template-parts/sections/section', 'location' ); 
get_template_part( 'template-parts/sections/section', 'team' );
get_template_part( 'template-parts/sections/section', 'advantage' ); 
get_template_part( 'template-parts/sections/section', 'logosPage' ); 
get_template_part( 'template-parts/sections/section', 'reviews' ); 
get_template_part( 'template-parts/sections/section', 'logos' ); 
get_template_part( 'template-parts/sections/section', 'consultation' ); 


?>

<?php get_footer();