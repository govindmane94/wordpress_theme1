<!doctype>
<html>
	<head>
		<meta charset="utf-8">
		<title>Best Theme</title>
	<?php wp_head();?>
	</head>
	<?php if(is_home()):
	$besttheme_classes = array('besttheme-class','my-class');
	else:
	$besttheme_classes = array('no-besttheme-class');
	endif;
	?>
	<body <?php body_class($besttheme_classes); ?>>
	<?php wp_nav_menu(array('theme_location'=>'primary')); 
		var_dump(get_custom_header());
	?>
	
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo 
	get_custom_header()->width; ?>" alt="" />
	<nav class="site-nav">
	<ul>
	<li><a href="#">Home</li>
	<li><a href="#">Blog</li>
	<li><a href="#">About</li>
	<li><a href="#">Contacts</li>
	</ul>
	</nav>