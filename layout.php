<?php
/*
Template Name: Site Layout
*/
get_header(); ?>
<?php global $zboom; ?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
	
		<?php if($zboom['website-layout'] == 1 ) : ?>
			<div class="wrap-col">
			<?php while( have_posts() ): the_post(); ?>
				<article>
					<?php the_post_thumbnail(); ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="info">[By <?php the_author(); ?> on <?php the_time('F d Y'); ?> with <?php comments_popup_link('No Comments', '1 Comments', '% Comments', '', 'Comments Off');?>]</div>
					<?php the_content(); ?>
					
					<div class="comment">
						Your email address will not be published. Required fields are marked *
					<?php comments_template(); ?>
					</div>
				</article>
			<?php endwhile; ?>	
			</div>
		<?php endif; ?>	
		
		<?php if($zboom ['website-layout'] == 2) : ?>
		<div class="col-1-3">
			<div class="wrap-col">
				<?php dynamic_sidebar('contact-widgets'); ?>
			</div>
		</div>
		
		<div class="col-2-3">
			<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
					</div>
			

			</div>
		</div>
		
		<?php endif; ?>


		<?php if($zboom ['website-layout'] == 3) : ?>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>	
			
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		
		
		
		
		
		<ul>
		
		
			<?php if($zboom['social-icons']['1']) : ?>
				<li><a href="<?php echo $zboom['social-icons']['1']?>"><i class="fa fa-facebook"></i></a></li>
			<?php endif;?>
			<?php if($zboom['social-icons']['2']) : ?>
				<li><a href="<?php echo $zboom['social-icons']['2']?>"><i class="fa fa-twitter"></i></a></li>
			<?php endif;?>
			<?php if($zboom['social-icons']['3']) : ?>
				<li><a href="<?php echo $zboom['social-icons']['3']?>"><i class="fa fa-linkedin"></i></a></li>
			<?php endif;?>
			<?php if($zboom['social-icons']['4']) : ?>
				<li><a href="<?php echo $zboom['social-icons']['4']?>"><i class="fa fa-google-plus"></i></a></li>
			<?php endif;?>
			

		</ul>
		
		</div>
	</div>
</section>









<?php get_footer(); ?>
