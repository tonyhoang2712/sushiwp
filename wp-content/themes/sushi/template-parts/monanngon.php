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
    <ul class="nav nav-tabs justify-content-center menu-mon-ngon-son header_desktop" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="sushi-tab" data-toggle="tab" href="#sushi" role="tab" aria-controls="sushi" aria-selected="true"><span>Sushi</span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower.png"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="comcuon-tab" data-toggle="tab" href="#comcuon" role="tab" aria-controls="comcuon" aria-selected="false"><span>Cơm Cuộn</span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower.png"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="cacmonkhac-tab" data-toggle="tab" href="#cacmonkhac" role="tab" aria-controls="cacmonkhac" aria-selected="false"><span>Các Món khác</span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower.png"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="salad-tab" data-toggle="tab" href="#salad" role="tab" aria-controls="salad" aria-selected="false"><span>Salad</span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower.png"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="douong-tab" data-toggle="tab" href="#douong" role="tab" aria-controls="douong" aria-selected="false"><span>Đồ uống</span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower.png"></a>
      </li>
    </ul>
    <!-- <ul class="nav nav-tabs justify-content-center header block1024 menu-mon-ngon-son" id="myTab" role="tablist" style="display: none">
      <li class="nav-item">
        <a class="nav-link active" id="sushi-tab" data-toggle="tab" href="#sushi" role="tab" aria-controls="sushi" aria-selected="true"><span>Sushi</span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower.png"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="comcuon-tab" data-toggle="tab" href="#comcuon" role="tab" aria-controls="comcuon" aria-selected="false"><span>Cơm Cuộn</span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower.png"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="cacmonkhac-tab" data-toggle="tab" href="#cacmonkhac" role="tab" aria-controls="cacmonkhac" aria-selected="false"><span>Các Món khác</span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower.png"></a>
      </li>
      </ul> -->
  </div>
  <div class="clearfix"></div>
  <div class="container">
    <div class="tab-content" id="products">
      <div class="tab-pane fade show active" id="sushi" role="tabpanel" aria-labelledby="sushi-tab">
        <?php get_template_part( 'template-parts/content', 'monanngon-tabsushi' ); ?>
      </div>
      <div class="tab-pane fade" id="comcuon" role="tabpanel" aria-labelledby="comcuon-tab">...</div>
      <div class="tab-pane fade" id="cacmonkhac" role="tabpanel" aria-labelledby="cacmonkhac-tab">...</div>
      <div class="tab-pane fade" id="salad" role="tabpanel" aria-labelledby="salad-tab">...</div>
      <div class="tab-pane fade" id="douong" role="tabpanel" aria-labelledby="douong-tab">...</div>
    </div>
  </div>
</div>