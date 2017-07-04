<?php
/* Template name: Outro template */
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post() ?>
	<div class="container" style="background:#f00; color:#fff;">
		Este é outro tipo de template<br><br><br>
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>