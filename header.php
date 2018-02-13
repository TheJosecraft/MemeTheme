<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
	<?php wp_head(); ?>
</head>
<body>
<header>
	<h1><?php bloginfo('name') ?></h1>
</header>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand"><?php bloginfo('name') ?></a>
		</div>
        <?php wp_nav_menu(array('container' => 'ul', 'menu_class' => 'nav navbar-nav', 'theme_location' => 'navigation')); ?>
  	</div>
</nav>
</header>
