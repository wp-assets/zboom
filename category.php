<?php 

/*
Template Name: News Template
*/

get_header(); ?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-1-1">
				<div class="one_half">	
					<?php
					$leftcategoryname = get_the_category_by_id($zboom['left-category']);
					$national = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 4,
					'category_name' => $leftcategoryname,
					'default' => '1',
					));
					?>		
					<?php while( $national -> have_posts() ): $national -> the_post(); ?>		
						<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
						<?php readmore('25'); ?> <a href="<?php the_permalink();?>">Read More</a>
					<?php endwhile; ?>
				</div>
				<div class="one_half">
					<?php
					$rightcategoryname = get_the_category_by_id($zboom['right-category']);
						$international = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 4,
						'category_name' => $rightcategoryname,
						'default' => '1',
						));
					?>
					<?php while( $international -> have_posts() ): $international -> the_post(); ?>
						<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
						<?php readmore('25'); ?> <a href="<?php the_permalink();?>">Read More</a>
					<?php endwhile; ?>
				</div>
			</div>
			
		</div>
	</div>
</section>

<?php get_footer(); ?>

