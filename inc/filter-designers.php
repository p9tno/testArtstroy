<?php
function filter_designers() {
    $catSlug = $_POST['category'];

    if (is_null($catSlug)) {
        // echo 'null';
        $ajaxposts = new WP_Query([
            'post_type' => 'designer',
            'posts_per_page' => -1,
        ]);
    } else {
        // echo 'array';
        $ajaxposts = new WP_Query([
            'post_type' => 'designer',
            'posts_per_page' => -1,
      
            'tax_query' => array(
                  array(
                      'taxonomy' => 'level',
                      'field'    => 'slug',
                      'terms'    => $catSlug,
                  )
              )
      
        ]);
    }

  
    if($ajaxposts->have_posts()) {
      while($ajaxposts->have_posts()) : $ajaxposts->the_post();

        get_template_part( 'template-parts/parts/content', 'levelDesign' );
      endwhile;

    } else {
      $response = 'empty';
    }
  
    exit;
  }
  add_action('wp_ajax_filter_designers', 'filter_designers');
  add_action('wp_ajax_nopriv_filter_designers', 'filter_designers');