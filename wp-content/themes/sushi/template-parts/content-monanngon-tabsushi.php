 <div class="row tab-sushi-replace">
 	<?php
 	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
 	$args = array(
 		'posts_per_page' => 9,
 		'post_type' => 'product',
 		'paged' => $paged,
 		'tax_query' => array(
 			array(
 				'taxonomy' => 'product_cat',
 				'field' => 'slug',
 				'terms' => 'sushi',
 			)
 		)
 	);

 	$query = new WP_Query($args);
 	if ($query->have_posts()) {
 		$i = 0;
 		while ($query->have_posts()) {
 			$query->the_post();
 			if($i == 8) {
 				get_template_part( 'template-parts/content', 'monanngon-tabsushi-2' );
                echo '</div>';
 			} else {
 				get_template_part( 'template-parts/content', 'monanngon-tabsushi-1' );
 			}
 			$i++;
 		}

        $total = $query->max_num_pages;
        ?>
        <nav class="main-pagination monanngon-tabsushi">
            <ul class="pagination">
                <?php if($total > 0) { ?>
                <li class="page-item monanngon-tabsushi-page-item" index="<?php echo $i + 1 ?>">
                    <a class="page-link page-previuos" href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/next.png" class="previous">
                    </a>
                </li>
                <?php } ?>
                
                <?php for($i = 0; $i < $total; $i++) { ?>
                <li class="page-item monanngon-tabsushi-page-item <?php if($i==0) {echo "active";} ?>"
                    index="<?php echo $i + 1 ?>">
                    <a class="page-link" href="#"><?php echo $i+1 ?></a></li>
                <?php } ?>

                <?php if($total > 0) { ?>
                <li class="page-item monanngon-tabsushi-page-item" 
                    index="<?php echo $i + 1 ?>">
                    <a class="page-link page-next" href="#">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/next.png" class="next"></a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <?php
 	}
    wp_reset_postdata();
 	?>
