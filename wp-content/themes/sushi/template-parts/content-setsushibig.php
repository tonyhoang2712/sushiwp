<?php
    $args = array(
        'posts_per_page' => 5,
        'post_type' => 'product',
        'post_status'    => 'publish',
        'paged' => 1,
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'set-sushi-big',
            )
        )
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) {
        $i = 0;
        while ($query->have_posts()) {
            $query->the_post();
            if($i == 4) {
                get_template_part( 'template-parts/content', 'sushisashimi-style-2' );
            } else {
                get_template_part( 'template-parts/content', 'sushisashimi-style-1' );
            }
            $i++;
        }

        $total = $query->max_num_pages;
    } else {
        // no content
    }
    wp_reset_postdata();
    ?>

