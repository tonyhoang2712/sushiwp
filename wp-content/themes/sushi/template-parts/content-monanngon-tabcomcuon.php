 <div class="row tab-comcuon-replace">
    <?php
    $total = 0;
    $paged = 1;
    $args = array(
        'posts_per_page' => 9,
        'post_type' => 'product',
        'post_status'    => 'publish',
        'paged' => $paged,
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'com-cuon',
            )
        )
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) {
        $i = 0;
        while ($query->have_posts()) {
            $query->the_post();
            if($i == 8) {
                get_template_part( 'template-parts/content', 'monanngon-style-2' );
            } else {
                get_template_part( 'template-parts/content', 'monanngon-style-1' );
            }
            $i++;
        }

        $total = $query->max_num_pages;
    } else {
        // no content
    }
    wp_reset_postdata();
    ?>
</div>
<?php if($total > 0) { ?>

    <nav class="main-pagination monanngon-comcuon">
        <ul class="pagination">

            <li class="page-item monanngon-comcuon-page-item" index="1">
                <a class="page-link page-previuos" href="javascript:void(0)">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/next.png" class="previous">
                </a>
            </li>

            <?php for($i = 0; $i < $total; $i++) { ?>
                <li class="page-item monanngon-comcuon-page-item monanngon-comcuon-page-item-<?php echo $i + 1 ?> <?php if($i==0) {echo "active";} ?>"
                    index="<?php echo $i + 1 ?>">
                    <a class="page-link" href="javascript:void(0)"><?php echo $i+1 ?></a></li>
                <?php } ?>

                <li class="page-item monanngon-comcuon-page-item" 
                index="<?php echo $total ?>">
                <a class="page-link page-next" href="javascript:void(0)">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/next.png" class="next"></a>
                </li>
            </ul>
        </nav>
    <?php } ?>
