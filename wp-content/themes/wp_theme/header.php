<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="HTML,CSS">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
<link rel="icon" type="image/png" href="<?php echo get_site_url(); ?>"/>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<div class="container">
<div class="row">
 	<div class="col-md-2">
		<div class="h-logo">
			<?php dynamic_sidebar('h-logo'); ?>			
		</div>
	</div>
	<div class="col-md-8">
		<div class="navigation">
			<?php include("navigation.php"); ?>					
		</div>
	</div>
	<div class="col-md-2">
		<div class="h-contact">
			<?php dynamic_sidebar('h-contact'); ?>			
		</div>
	</div>

</div><!--row-->
</div><!--container-->
</header>
<div class="container">
<?php //include("navigation.php"); ?>
<?php dynamic_sidebar('header1'); ?>