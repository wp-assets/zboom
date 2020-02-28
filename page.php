<?php get_header(); ?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
				
				<?php while( have_posts() ): the_post(); ?>
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						
<div class="info">[By <?php the_author(); ?> on <?php the_time('F d Y'); ?> with <?php comments_popup_link('No Comments', '1 Comments', '% Comments', '', 'Comments Off');?>]</div>					<?php the_content(); ?>
						
						<h1>Our Custom Fields : <?php echo get_post_meta($post->ID, 'favorite', true)?></h1>
						
						<h1>Our Favorite Item : <?php echo get_post_meta(get_the_ID(),'naika', true); ?></h1>
						
						<h1>Our Favorite Item : <?php echo get_post_meta(get_the_ID(),'vilen', true); ?></h1>
						
						<h1>Our Favorite Item : <?php echo get_post_meta(get_the_ID(),'nayok', true); ?></h1>
						
						
						<h2 style="color:yellow">Onno Ekta Value : <?php echo get_post_meta(get_the_ID(),'onnoekta', true); ?></h2>
						
						
					</article>
				<?php endwhile; ?>	
				</div>
			</div>
			
			<div class="col-1-3">
				<div class="wrap-col">
                    <?php dynamic_sidebar('right-sidebar'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

