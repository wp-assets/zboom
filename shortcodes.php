<?php
//Main Short Code System Running
function zboom_shortcode( $atts, $content ){
	
	$new_short = extract(shortcode_atts(array(
		'position' => 'center',
	), $atts ) );
	
	
	return "<h2 align=".$position.">".$content."</h2>";
}
add_shortcode('head', 'zboom_shortcode');

//another shortcode

function image_shortcode( $atts, $content ){
	
	$imaging = extract(shortcode_atts(array(
		'width' => '90px',
		'height' => '90px',
	), $atts ) );
	
	
	return '<img width="'.$width.'" height="'.$height.'" src="'.$content.'"/>';
}
add_shortcode('img', 'image_shortcode');

//For big Short Code

function zboom_block_shortcode($atts, $content){
ob_start(); 

$blockattr = extract(shortcode_atts(array(
	'number' => '3',
), $atts ) );

?>
	<?php 
		$service = new WP_query(array(
		'post_type' => 'service',
		'posts_per_page' => $number
		));
	?>
	<?php while( $service-> have_posts()): $service-> the_post();?>		
		<div class="col-1-3">
			<div class="wrap-col box">
				<a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
				<?php readmore('10'); ?>
				<div class="more"><a href="<?php the_permalink(); ?>">[...]</a></div>
			</div>
		</div>
	<?php endwhile; ?>		
	
<?php $block = ob_get_clean();
return $block;	
}
add_shortcode('block', 'zboom_block_shortcode');


function zboom_slider_shortcode($atts, $content ){
	ob_start() ?>
	
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

	<?php $slider_shortcode = ob_get_clean();
	return $slider_shortcode;
}
add_shortcode('slider', 'zboom_slider_shortcode');


//Shortcode of Category
function zboom_category_shortcode(){
ob_start(); ?>
<h2>Left Category</h2>
	<div class="one_half">	
		<?php
		$national = new WP_Query(array(
		'post_type' => 'post',
		'posts_per_page' => 4,
		'category_name' => $leftcategoryname,
		'default' => '1',
		));
		?>		
		<?php while( $national -> have_posts() ): $national -> the_post(); ?>		
			<h1><?php the_title(); ?></h1>
			<p><?php readmore('6');?></p>
			<?php the_post_thumbnail();?>
		<?php endwhile; ?>
	</div>
	
	<h2>Right Category</h2>
	<div class="one_half">
		<?php
			$international = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => 2,
			'category_name' => $rightcategoryname,
			'default' => '1',
			));
		?>
		<?php while( $international -> have_posts() ): $international -> the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<p><?php readmore('6');?></p>
			<?php the_post_thumbnail();?>	
		<?php endwhile; ?>
	</div>
	
<?php $category = ob_get_clean();
return $category;	
};
add_shortcode('category', 'zboom_category_shortcode');







/**
function zboom_headeing_sortcode( $atts, $content ){
	return "<h1>".$content."</h1>";
}
add_shortcode('heading', 'zboom_headeing_sortcode');

**/
/**
function zboom_headeing_sortcode( $atts, $content ){
	
	$headdings = shortcode_atts(array(
		'position'=> 'left',
	), $atts );
	
	return "<h1 align='".$headdings['position']."'>".$content."</h1>";
	
	
}
add_shortcode('heading', 'zboom_headeing_sortcode');
*/






?>