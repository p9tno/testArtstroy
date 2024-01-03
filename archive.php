<?php 

get_header();

// echo get_post_type();
// $cat = get_the_category($post->ID);
// get_pr($cat);

// $categories = get_terms(
//     'portfolio-cat',
//     array(
//         'orderby'    => 'name',
//         'hierarchical' => true,
//         'hide_empty' => 1,
//         'parent' => 0
//     ) 
// );
// get_pr($categories);


if( has_term('stroitelstvo-domov', 'portfolio-cat') ){
	echo "Запись имеет термин `stroitelstvo-domov` в таксономии `portfolio-cat`";

    // $categories = get_terms(
    //     'portfolio-cat',
    //     array(
    //         'orderby'    => 'name',
    //         'hierarchical' => true,
    //         'hide_empty' => 1,
    //         'parent' => 0
    //     ) 
    // );
    // get_pr($categories);
}
$obj = get_queried_object();
get_pr($obj);


get_template_part( 'template-parts/archive/content', get_post_type() ); 


// if ( is_tax() ) {
//     get_template_part( 'template-parts/archive/content', 'portfolio' ); 
// }


get_footer();