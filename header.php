<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand"><?php bloginfo('name') ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<?php wp_nav_menu(array('container' => 'ul', 'menu_class' => 'nav navbar-nav mr-auto', 'theme_location' => 'navigation', 'menu_id' => 'menuPrincipal')); ?>
			</div>
</nav>
</header>
</header>
