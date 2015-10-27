<?php get_header(); ?>
<div class="page-content">
	<div class="inner-content">
		<div class="page-title">
			<h1>Blog</h1>
		</div>
		<div class="blog">
			<?php if ( have_posts() ) : while( have_posts() ) :the_post(); ?>
				<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="author">
					Posted by 
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
					<?php the_author() ?>
					</a> 
					 on the <?php the_time('dS, F, Y'); ?></div>
				<p><?php the_content(); ?></p>	 

			<?php endwhile; else: ?>
			No posts found.
		<?php endif; ?>


		</div>
	</div>
<?php get_footer(); ?>
