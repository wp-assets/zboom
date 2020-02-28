<?php get_header(); ?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
				
				<h1 style="font-size:80px;">404 Not Found</h1>
				<p> may be you are looking for somthing else</p>
				you may visit the <a href="<?php esc_url(bloginfo('home'))?>">Homepage</a>
				
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>