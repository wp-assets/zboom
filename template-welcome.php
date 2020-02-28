<?php 
/*
Template Name: Welcome Template
*/

get_header(); ?>
<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
				<?php 
					$zboom_slider = new WP_query(array(
					'post_type' => 'slider',
					'posts_per_page' => -1
					));
				
				?>			
				<?php
					while( $zboom_slider -> have_posts()): $zboom_slider ->the_post();
					?>
					<li><?php the_post_thumbnail('slider-thumb'); ?></li>
				<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
		<?php 
		$service = new WP_query(array(
		'post_type' => 'service',
		'posts_per_page' => 3
		));
		?>	
		<?php while( $service-> have_posts()): $service-> the_post();?>
		
			<div class="col-1-3">
				<div class="wrap-col box">
					<a href="<?php the_permalink(); ?>"><h2><?php the_title();?></h2></a>
					<?php readmore('10'); ?>
					<div class="more"><a href="<?php the_permalink(); ?>">[...]</a></div>
				</div>
			</div>	
		<?php endwhile; ?>	
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
					<?php $qqq = new WP_query(array(
					'post_type' => 'post',
					'posts_per_page' => 5
					)); ?>
					<?php while( $qqq-> have_posts()): $qqq-> the_post();?>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
<div class="info">On <?php the_time('F d Y g:i A'); ?> with <?php comments_popup_link('No Comments', '1 Comments', '% Comments', '', 'Comments Off'); ?></div>
<?php readmore('25'); ?> <a href="<?php the_permalink(); ?>">Read More</a>
							</div>
						</div>
					</article>
					<?php endwhile; ?>
                    
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>