<!doctype html>
<html lang="en">
<?php global $wp; ?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php wp_title(''); ?>></title>
	<?php the_content(); ?>
</head>
<?php
//$bodyClasses = ($args['body_classes'] ?? '');
?>
<body>
<?php //body_class($bodyClasses); ?>
</body>
</html>