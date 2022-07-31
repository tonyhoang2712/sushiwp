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
			<ul class="nav nav-tabs sushi-sashimi-content-right-tabs" id="sushisashimi" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="setsushismall-tab" data-toggle="tab" href="#setsushismall" role="tab" aria-controls="setsushismall" aria-selected="true">Set Sushi Nhỏ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" id="setsushibig-tab" data-toggle="tab" href="#setsushibig" role="tab" aria-controls="setsushibig" aria-selected="false">Set Sushi lớn</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="setsashimi-tab" data-toggle="tab" href="#setsashimi" role="tab" aria-controls="setsashimi" aria-selected="false">Set Shasimi</a>
				</li>
			</ul>

			<div class="tab-content" id="sushisashimiContent">
				<div class="tab-pane fade show active" id="setsushibig" role="tabpanel" aria-labelledby="setsushibig-tab">
					<ul class="sushi-sashimi-content-right-list">
						<?php get_template_part( 'template-parts/content', 'setsushibig'); ?>
					</ul>
				</div>
				<div class="tab-pane fade" id="setsushismall" role="tabpanel" aria-labelledby="setsushismall-tab">
					<ul class="sushi-sashimi-content-right-list">
						<?php get_template_part( 'template-parts/content', 'setsushismall'); ?>
					</ul>
				</div>
				<div class="tab-pane fade" id="setsashimi" role="tabpanel" aria-labelledby="setsashimi-tab">
					<ul class="sushi-sashimi-content-right-list">
						<?php get_template_part( 'template-parts/content', 'setsashimi'); ?>
					</ul>
				</div>
			</div>
		</div>

		<div class="sushi-sashimi-content-left-2">
			<svg xmlns="http://www.w3.org/2000/svg" width="350" height="328" viewBox="0 0 350 328" fill="none">
				<g class="group-tab-sushisashimi setsushibig active" tab="setsushibig">
					<circle cx="159" cy="161" r="10" fill="#B63241"/>
				</g>
				<g class="group-tab-sushisashimi setsushismall" tab="setsushismall">
					<circle cx="107.5" cy="42" r="7.5" fill="#B63241"/>
				</g>
				<g class="group-tab-sushisashimi setsashimi" tab="setsashimi">
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