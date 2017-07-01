<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php wp_head(); ?>
</head>
<body>
	<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post() ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	<?php get_footer(); ?>
</body>
</html>