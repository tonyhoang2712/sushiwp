<div class="menu-mon-ngon">
  <div class="may-1"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/may-1.png" class="img-fluid"></div>
  <div class="may-2"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/may-2.png" class="img-fluid"></div>
  <div class="may-3"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/may-3.png" class="img-fluid"></div>
  <div class="may-4"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/may-4.png" class="img-fluid"></div>
  <div class="container">
    <div class="img-title">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/title-menu-mon-an.png" class="img-fluid">
    </div>
  </div>
  <div class="container">
    <ul class="nav nav-tabs justify-content-center menu-mon-ngon-son" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="sushi-tab" data-toggle="tab" href="#sushi" role="tab" aria-controls="sushi" aria-selected="true"><span>Sushi</span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower.png"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="com-cuon-tab" data-toggle="tab" href="#com-cuon" role="tab" aria-controls="com-cuon" aria-selected="false"><span>Cơm Cuộn</span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower.png"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="cac-mon-khac-tab" data-toggle="tab" href="#cac-mon-khac" role="tab" aria-controls="cac-mon-khac" aria-selected="false"><span>Các Món khác</span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower.png"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="salad-tab" data-toggle="tab" href="#salad" role="tab" aria-controls="salad" aria-selected="false"><span>Salad</span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower.png"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="do-uong-tab" data-toggle="tab" href="#do-uong" role="tab" aria-controls="do-uong" aria-selected="false"><span>Đồ uống</span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower.png"></a>
      </li>
    </ul>
  </div>
  <div class="clearfix"></div>
  <div class="container">
    <div class="tab-content" id="products">
      <div class="tab-pane fade show active" id="sushi" role="tabpanel" aria-labelledby="sushi-tab">
        <?php get_template_part( 'template-parts/content', 'monanngon-tabsushi' ); ?>
      </div>
      <div class="tab-pane fade" id="com-cuon" role="tabpanel" aria-labelledby="com-cuon-tab">
      	<?php get_template_part( 'template-parts/content', 'monanngon-tabcomcuon' ); ?>
      </div>
      <div class="tab-pane fade" id="cac-mon-khac" role="tabpanel" aria-labelledby="cac-mon-khac-tab">
      	<?php get_template_part( 'template-parts/content', 'monanngon-cacmonankhac' ); ?>
      </div>
      <div class="tab-pane fade" id="salad" role="tabpanel" aria-labelledby="salad-tab">
      	<?php get_template_part( 'template-parts/content', 'monanngon-sald' ); ?>
      </div>
      <div class="tab-pane fade" id="do-uong" role="tabpanel" aria-labelledby="do-uong-tab">
      	<?php get_template_part( 'template-parts/content', 'monanngon-douong' ); ?>
      </div>
    </div>
  </div>
</div>