<?php get_header(); ?>


<div class="container-fluid single">
	<img src="<?php bloginfo( 'template_url' ); ?>/images/post-header.jpg" class="post-img" alt="post-img"></div>

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<h6><?php previous_post_link('< %link') ?></h4>

	<h6><?php next_post_link(' %link >') ?></h6>

	<blockquote>
		<h2><?php the_title(); ?></h2>
	</blockquote>

	<h5><?php the_date(); ?> by <?php the_author(); ?> <?php the_category(", "); ?> </h5>

		<?php the_post_thumbnail(); ?>

		<?php the_content(); ?>

		<?php endwhile; else: ?>
		<?php _e('Sorry, no posts matched your criteria.'); ?>
	<?php endif; ?>


<?php get_footer(); ?>