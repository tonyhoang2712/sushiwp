<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Oregano&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/carousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/carousel/dist/assets/owl.theme.default.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/mycss/main.css">
		<title>Jiro Sushi</title>
	</head>
	<body>
		<?php get_template_part( 'template-parts/content', 'header' ); ?>
		<?php get_template_part( 'template-parts/content', 'banner' ); ?>


		<main>
			<?php get_template_part( 'template-parts/monanngon'); ?>

  <div class="sushi-sashimi">
  	<div class="may-5"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/may-5.png" class="img-fluid"></div>
  	<div class="may-5-2"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/may-5-2.png" class="img-fluid"></div>
  	<div class="container">
  		<div class="img-title">
  			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/title-2.png" class="img-fluid">
  		</div>
  	</div>

  	<div class="sushi-sashimi-content clearfix">
  		<div class="sushi-sashimi-content-left">
  			<svg xmlns="http://www.w3.org/2000/svg" width="350" height="328" viewBox="0 0 350 328" fill="none">
  				<g class="group-tab-sushisashimi setsushibig active">
  					<circle cx="159" cy="161" r="10" fill="#B63241"/>
  					<text x="180" y="165" fill="#C0C0C0" >Set Sushi lớn</text>
  				</g>
  				<g class="group-tab-sushisashimi setsushismall">
  					<circle cx="107.5" cy="42" r="7.5" fill="#B63241"/>
  					<text x="125" y="45" fill="#C0C0C0" >Set Sushi Nhỏ</text>
  				</g>
  				<g class="group-tab-sushisashimi setsashimi">
  					<circle cx="107.5" cy="280" r="7.5" fill="#B63241"/>
  					<text x="125" y="290" fill="#C0C0C0" >Set Sashimi</text>
  				</g>
  				<g clip-path="url(#clip0_132_8050)">
  					<circle cx="3.5" cy="159.5" r="157" stroke="#B63241" stroke-width="3"/>
  					<circle cx="-30" cy="193" r="125" fill="#B63241"/>
  				</g>
  				<defs>
  					<clipPath id="clip0_132_8050">
  						<rect width="169" height="328" fill="white"/>
  					</clipPath>
  				</defs>
  			</svg>
  		</div>

  		<div class="sushi-sashimi-content-right clearfix">

  			<ul class="nav nav-tabs sushi-sashimi-content-right-tabs" id="myTab2" role="tablist">
  				<li class="nav-item">
  					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Set Sushi Nhỏ</a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Set Sushi lớn</a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Set Shasimi</a>
  				</li>
  			</ul>

  			<div class="tab-content" id="myTabContent2">
  				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  					<ul class="sushi-sashimi-content-right-list">
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  					</ul>
  				</div>
  				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  					<ul class="sushi-sashimi-content-right-list">
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  					</ul>
  				</div>
  				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  					<ul class="sushi-sashimi-content-right-list">
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  						<li class="item">
  							<div class="product product-horizontal">
  								<div class="product-item-horizontal">
  									<div class="product-img">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
  									</div>

  									<div class="product-name">
  										<h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
  										<div class="product-price product-price-horizontal">
  											12.000đ/ 1ps
  										</div>
  									</div>

  									<div class="product-cart-hozirontal">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
  										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
  									</div>

  								</div>
  							</div>
  						</li>
  					</ul>
  				</div>
  			</div>

              <!-- <ul class="sushi-sashimi-content-right-list">
                <li class="item">
                  <div class="product product-horizontal">
                    <div class="product-item-horizontal">
                      <div class="product-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
                      </div>

                      <div class="product-name">
                        <h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
                        <div class="product-price product-price-horizontal">
                          12.000đ/ 1ps
                        </div>
                      </div>

                      <div class="product-cart-hozirontal">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
                      </div>

                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="product product-horizontal">
                    <div class="product-item-horizontal">
                      <div class="product-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
                      </div>

                      <div class="product-name">
                        <h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
                        <div class="product-price product-price-horizontal">
                          12.000đ/ 1ps
                        </div>
                      </div>

                      <div class="product-cart-hozirontal">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
                      </div>

                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="product product-horizontal">
                    <div class="product-item-horizontal">
                      <div class="product-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
                      </div>

                      <div class="product-name">
                        <h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
                        <div class="product-price product-price-horizontal">
                          12.000đ/ 1ps
                        </div>
                      </div>

                      <div class="product-cart-hozirontal">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
                      </div>

                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="product product-horizontal">
                    <div class="product-item-horizontal">
                      <div class="product-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
                      </div>

                      <div class="product-name">
                        <h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
                        <div class="product-price product-price-horizontal">
                          12.000đ/ 1ps
                        </div>
                      </div>

                      <div class="product-cart-hozirontal">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
                      </div>

                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="product product-horizontal">
                    <div class="product-item-horizontal">
                      <div class="product-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Samol-Aburi.png" class="img-fluid">
                      </div>

                      <div class="product-name">
                        <h3 class="product-name-big product-name-big-custom">Samol Aburi</h3>
                        <div class="product-price product-price-horizontal">
                          12.000đ/ 1ps
                        </div>
                      </div>

                      <div class="product-cart-hozirontal">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
                      </div>

                    </div>
                  </div>
                </li>
            </ul> -->
        </div>

        <div class="sushi-sashimi-content-left-2">
        	<svg xmlns="http://www.w3.org/2000/svg" width="350" height="328" viewBox="0 0 350 328" fill="none">
        		<g class="group-tab-sushisashimi setsushibig active">
        			<circle cx="159" cy="161" r="10" fill="#B63241"/>
        		</g>
        		<g class="group-tab-sushisashimi setsushismall">
        			<circle cx="107.5" cy="42" r="7.5" fill="#B63241"/>
        		</g>
        		<g class="group-tab-sushisashimi setsashimi">
        			<circle cx="107.5" cy="280" r="7.5" fill="#B63241"/>
        		</g>
        		<g clip-path="url(#clip0_132_8050)">
        			<circle cx="3.5" cy="159.5" r="157" stroke="#B63241" stroke-width="3"/>
        			<circle cx="-30" cy="193" r="125" fill="#B63241"/>
        		</g>
        		<defs>
        			<clipPath id="clip0_132_8050">
        				<rect width="169" height="328" fill="white"/>
        			</clipPath>
        		</defs>
        	</svg>
        </div>


    </div>
</div>
<!-- nhận xét của khách hàng -->
<div class="comment-of-customer">
	<div class="container custome-container">
		<div class="comment-of-customer-title">
			<span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower-2.png"></span>
			<h3 class="mb-0">Nhận Xét Của Khách Hàng</h3>
			<span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower-2.png"></span>
		</div>

		<div class="comment-of-customer-content owl-carousel owl-theme">
			<div class="item">
				<div class="comment-of-customer-item clearfix">
					<div class="customer-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/customer-1.png"></div>
					<div class="customer-text">
						<span class="qoute-up"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/quote-up.png" class="img-fluid"></span>
						<div class="customer-message">
							Cơm dẻo , gà ăn cùng nước sốt hợp,<br>
							,không gian nhà hàng lịch sự, phục vụ nhanh.
						</div>
						<div class="customer-bottom">
							<div class="customer-name">
								Đặng Huy
							</div>
							<div class="customer-start">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="comment-of-customer-item clearfix">
					<div class="customer-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/customer-1.png"></div>
					<div class="customer-text">
						<span class="qoute-up"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/quote-up.png" class="img-fluid"></span>
						<div class="customer-message">
							Cơm dẻo , gà ăn cùng nước sốt hợp,<br>
							,không gian nhà hàng lịch sự, phục vụ nhanh.
						</div>
						<div class="customer-bottom">
							<div class="customer-name">
								Đặng Huy
							</div>
							<div class="customer-start">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="comment-of-customer-item clearfix">
					<div class="customer-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/customer-1.png"></div>
					<div class="customer-text">
						<span class="qoute-up"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/quote-up.png" class="img-fluid"></span>
						<div class="customer-message">
							Cơm dẻo , gà ăn cùng nước sốt hợp,<br>
							,không gian nhà hàng lịch sự, phục vụ nhanh.
						</div>
						<div class="customer-bottom">
							<div class="customer-name">
								Đặng Huy
							</div>
							<div class="customer-start">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="comment-of-customer-item clearfix">
					<div class="customer-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/customer-1.png"></div>
					<div class="customer-text">
						<span class="qoute-up"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/quote-up.png" class="img-fluid"></span>
						<div class="customer-message">
							Cơm dẻo , gà ăn cùng nước sốt hợp,<br>
							,không gian nhà hàng lịch sự, phục vụ nhanh.
						</div>
						<div class="customer-bottom">
							<div class="customer-name">
								Đặng Huy
							</div>
							<div class="customer-start">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="comment-of-customer-item clearfix">
					<div class="customer-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/customer-1.png"></div>
					<div class="customer-text">
						<span class="qoute-up"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/quote-up.png" class="img-fluid"></span>
						<div class="customer-message">
							Cơm dẻo , gà ăn cùng nước sốt hợp,<br>
							,không gian nhà hàng lịch sự, phục vụ nhanh.
						</div>
						<div class="customer-bottom">
							<div class="customer-name">
								Đặng Huy
							</div>
							<div class="customer-start">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="comment-of-customer-item clearfix">
					<div class="customer-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/customer-1.png"></div>
					<div class="customer-text">
						<span class="qoute-up"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/quote-up.png" class="img-fluid"></span>
						<div class="customer-message">
							Cơm dẻo , gà ăn cùng nước sốt hợp,<br>
							,không gian nhà hàng lịch sự, phục vụ nhanh.
						</div>
						<div class="customer-bottom">
							<div class="customer-name">
								Đặng Huy
							</div>
							<div class="customer-start">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- contact from -->
<div class="main-contact">
	<div class="main-contact-left"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/tre.png" class="img-fluid"></div>
	<div class="main-contact-right"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/tre-2.png" class="img-fluid"></div>
	<div class="main-contact-form">
		<div class="inner">
			<h3 class="title">
				QUÝ KHÁCH HÀNG ĐẶT BÀN BẰNG CÁCH GỌI QUA HOTLINE CỦA JIRO SUSHI HOẶC ĐẶT BÀN TẠI ĐÂY
			</h3>
			<form class="main-contact-form-content">
				<div class="form-group form-group-custom">
					<input type="text" name="" class="form-control" placeholder="Họ và Tên">
					<input type="text" name="" class="form-control" placeholder="Số người">
				</div>
				<div class="form-group form-group-custom">
					<input type="text" name="" class="form-control" placeholder="Số điện thoại">
					<input type="text" name="" class="form-control" placeholder="Thời gian / Ngày tháng">
				</div>
				<div class="form-group">
					<textarea class="form-control" placeholder="Để lại lời nhắn cho Jiro Sushi"></textarea>
				</div>
				<div class="form-group mb-0">
					<a href="" class="order-now-form">
						<span>Đặt Bàn Ngay</span>
						<svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1.5 5.25C1.08579 5.25 0.75 5.58579 0.75 6C0.75 6.41422 1.08579 6.75 1.5 6.75L1.5 5.25ZM17.5 6.75C17.9142 6.75 18.25 6.41421 18.25 6C18.25 5.58579 17.9142 5.25 17.5 5.25V6.75ZM14.028 0.467309C13.7338 0.175726 13.2589 0.177844 12.9673 0.472041C12.6757 0.766238 12.6778 1.24111 12.972 1.53269L14.028 0.467309ZM15.263 2.74731L14.735 3.28L15.263 2.74731ZM15.263 9.25269L15.7909 9.78538L15.263 9.25269ZM12.972 10.4673C12.6778 10.7589 12.6757 11.2338 12.9673 11.528C13.2589 11.8222 13.7338 11.8243 14.028 11.5327L12.972 10.4673ZM17.4801 5.68667L18.2241 5.59184V5.59184L17.4801 5.68667ZM17.4801 6.31333L18.2241 6.40816V6.40816L17.4801 6.31333ZM1.5 6.75L17.5 6.75V5.25L1.5 5.25L1.5 6.75ZM12.972 1.53269L14.735 3.28L15.7909 2.21462L14.028 0.467309L12.972 1.53269ZM14.735 8.72L12.972 10.4673L14.028 11.5327L15.7909 9.78538L14.735 8.72ZM14.735 3.28C15.4505 3.98914 15.9413 4.47718 16.2734 4.8907C16.596 5.2924 16.7067 5.55042 16.7361 5.7815L18.2241 5.59184C18.1453 4.97372 17.8504 4.45878 17.4429 3.95146C17.045 3.45597 16.4814 2.89892 15.7909 2.21462L14.735 3.28ZM15.7909 9.78538C16.4814 9.10108 17.045 8.54403 17.4429 8.04854C17.8504 7.54121 18.1453 7.02628 18.2241 6.40816L16.7361 6.2185C16.7067 6.44958 16.596 6.7076 16.2734 7.10929C15.9413 7.52282 15.4505 8.01086 14.735 8.72L15.7909 9.78538ZM16.7361 5.7815C16.7546 5.92659 16.7546 6.07341 16.7361 6.2185L18.2241 6.40816C18.2586 6.13714 18.2586 5.86286 18.2241 5.59184L16.7361 5.7815Z" fill="#B63241"/>
						</svg>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
</main>

<?php get_template_part('template-parts/content', 'footer'); ?>
      <!-- <div class="sm_menu_outer">
        <ul class="mobile_menu">
          <li><a href="./index.html" title="Trang chủ">Trang chủ</a></li>
          <li><a href="./mon-an.html" title="Món ăn">Thực đơn</a></li>
          <li><a href="./shopping-cart.html" title="Đặt bàn">Đặt bàn</a></li>
        </ul>
    </div> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/carousel/dist/owl.carousel.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/myjs/main.js"></script>
    <script type="text/javascript">
          jQuery(document).ready(function($) {
            
            const AJAX_URL = '<?php echo admin_url('admin-ajax.php'); ?>';
            jQuery('.monanngon-tabsushi-page-item').click(function (e) {
		    e.preventDefault();
		    alert(1);
		    var page = $(this).attr('index') || 1;
			    $.ajax({
			        type: "post",
			        url: AJAX_URL,
			        data: {
			            action:'get_sushi_tab_content',
			            page: page
			        },
			        success: function(msg){
			            console.log(msg);
			        }
			    });
			})
          }); 

    </script>
    
</body>
</html>