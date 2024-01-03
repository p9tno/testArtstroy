<?php
// Filter
function my_custom_filter(){
	$query_data = $_GET;
  // get_pr($query_data);
	
  $paged = (isset($query_data['paged']) ) ? intval($query_data['paged']) : 1;
  // $orderby = 'date';
  // $orderby = $query_data['order'];
  $posts_per_page = 6;

  //filter by category id параметр в аякс дата
	$cats = ($query_data['category']) ? explode(',',$query_data['category']) : false;
	$floors = ($query_data['floor']) ? explode(',',$query_data['floor']) : false;

  $tax_query_cat = ($cats) ? array( array(
      'taxonomy' => 'houses-cat',
      'field' => 'id',
      'terms' => $cats
  ) ) : false;

  $tax_query_floor = ($floors) ? array( array(
      'taxonomy' => 'houses-floor',
      'field' => 'id',
      'terms' => $floors
  ) ) : false;

  $args = array(
        'post_type' => 'portfolio',
        'paged' => $paged,
        'posts_per_page' => $posts_per_page,
        // 'posts_per_page' => -1,
        'post_status' => 'publish',

        'tax_query' => array(
          'relation' => 'AND',
          $tax_query_cat,
          $tax_query_floor,
          array(
            'taxonomy' => 'portfolio-cat',
            'field'    => 'slug',
            'terms'    => 'stroitelstvo-domov',
          ),
        ),
        
        'meta_query' => array(
          array(
              'key' => 'project_house_price',
              'value' => array($query_data['min'], $query_data['max']),
              'compare' => 'BETWEEN',
              'type' => 'NUMERIC'
          ),
          array(
            'key' => 'house_square',
            'value' => array($query_data['squareMin'], $query_data['squareMax']),
            'compare' => 'BETWEEN',
            'type' => 'NUMERIC'
          ),
            
        ),
	);

  // get_pr($args);

	// echo '<pre>';
	// print_r($args);
	// echo '</pre>';


  $loop = new WP_Query( $args );

  if($loop->have_posts()) {
    while($loop->have_posts()) : $loop->the_post();
      get_template_part( 'template-parts/project/content', 'house' );
    endwhile;

  } else {
    echo 'Проект не найден';
  }
  wp_reset_postdata(); ?>

  <?php if($loop->max_num_pages > 1){ ?>
    <nav class="pagination pagination_filter">
      <?php
          //Вывод стандартной пагинации
          $big = 999999999; // need an unlikely integer
    
          echo paginate_links( array(
              'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, $paged ),
              'prev_text' => '<i class="icon_arrow_left"></i>',
              'next_text' => '<i class="icon_arrow_right"></i>',
              'total' => $loop->max_num_pages,
              'end_size' => 1,
              'mid_size' => 1
          ) );
        ?>
      </nav>
    <?php } ?>

  <?php die();
}

add_action('wp_ajax_my_custom_filter', 'my_custom_filter');
add_action('wp_ajax_nopriv_my_custom_filter', 'my_custom_filter');


// reset Filter
// function my_custom_reset_filter(){

//   $args = array(
//     'post_type' => 'portfolio',
//     'orderby' => 'rand',
//     'order'    => 'ASC',
//     'posts_per_page' => -1,
//     // вывода постов из нескольких произвольных таксономий:
//     'tax_query' => array(
//         array(
//             'taxonomy' => 'portfolio-cat',
//             'field'    => 'slug',
//             'terms'    => 'stroitelstvo-domov',
//         )
//     )
// 	);

//   // get_pr($args);

//   $resetLoop = new WP_Query( $args );

//   if($resetLoop->have_posts()) {
//     while($resetLoop->have_posts()) : $resetLoop->the_post();
//       get_template_part( 'template-parts/project/content', 'house' );
//     endwhile;

//   } else {
//     echo 'Проект не найден';
//   }
//   wp_reset_postdata();

//   die();
// }

// add_action('wp_ajax_my_custom_reset_filter', 'my_custom_reset_filter');
// add_action('wp_ajax_nopriv_my_custom_reset_filter', 'my_custom_reset_filter');
