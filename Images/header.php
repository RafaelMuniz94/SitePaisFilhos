<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="BIREME/OPAS/OMS">
	<meta name="generator" content="Wordpress">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=1" /> 
	<?php wp_head(); ?>
</head>

<div id="wrapperTop">
	<div class="container">
		<div class="row">
			<div id="headerPhone" class="col-md-6">
				11 3567-4048 | 11 98363-7717 | 11 98323-5346
			</div>
			<div id="headerSocial" class="col-md-6">
				<a href="https://www.facebook.com/bemcasadospaisefilhos/" target="_blank"><i class="fab fa-facebook"></i></a>
				<a href="https://www.instagram.com/docespaisefilhos/" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="https://api.whatsapp.com/send?phone=5511983637717&text=Estava%20navegando%20no%20site,%20e%20gostaria%20de%20saber%20mais%20sobre:%20" target="_blank"><i class="fab fa-whatsapp"></i></a>
			</div>
		</div>
	</div>
</div>
<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="" class="img-fluid"></a>
			</div>
			<nav id="nav" class="col-md-8 ">
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'principal',
					'depth'             => 2,
					'container'         => 'ul',
					'container_class'   => '',
					'container_id'      => '',
					'menu_class'        => ''
				) );
				?>
			</nav>

		</div>
		<!-- <nav id="navMobile" class="navbar navbar-expand-lg navbar-light  d-sm-block d-lg-none">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<?php
						wp_nav_menu( array(
							'theme_location'    => 'principal',
							'depth'             => 2,
							'container'         => 'ul',
							'container_class'   => '',
							'container_id'      => '',
							'menu_class'        => ''
						) );
						?>
					</ul>
				</div>
			</nav> -->
	</div>
</header>
