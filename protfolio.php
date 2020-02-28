<?php
/*
Template Name: Protfolio Template
*/
get_header(); ?>
<!--------------Content--------------->
<section id="content">


	<div class="google_map">
		<?php echo $zboom['google-maps']['street_number']?>
		<?php echo $zboom['google-maps']['route']?>
		<?php echo $zboom['google-maps']['locality']?>
		<?php echo $zboom['google-maps']['country']?>
		<?php echo $zboom['google-maps']['latitude']?>
		<?php echo $zboom['google-maps']['longitude']?>
		<?php echo $zboom['google-maps']['marker_info']?>

	</div>


<!-- For Crop feature Image and calling-->
	<div class="wrap-content zerogrid">
	</div>
</section>


<div class="container" style="height: 150px;margin: 0 auto;width: 930px; background:#222; padding:15px;">
	<h1>This Is Favorite Food List</h1>
	<ul>
	
	<?php if($zboom['item-checkbox']['mango'] == 1) :?>
		<li>Mango</li>	
	<?php endif;?>
		
	<?php if($zboom['item-checkbox']['orange'] == 1) :?>
		<li>Orange</li>	
	<?php endif;?>
		
	<?php if($zboom['item-checkbox']['alu'] == 1) :?>
		<li>Alu</li>	
	<?php endif;?>
		
	<?php if($zboom['item-checkbox']['potol'] == 1) :?>
		<li>Potol</li>	
	<?php endif;?>

	</ul>
	
	
	Gender Is :
	<h3>
	<?php if($zboom['gender-select'] == 1 ) : ?>
	Male
	<?php else : ?>
	Female
	<?php endif;?>
	</h3>
	
	<h2>
	<?php 
	$category_id = $zboom['select-option'];
	echo get_the_category_by_id($category_id); ?>
	</h2>
	
	<h2>
		<?php echo $zboom['select-menu']; ?>
	</h2>
	<h2>
		Price Is Now :<?php echo $zboom['select-slider']; ?>
	</h2>
	
</div>


<!--------------Footer--------------->
<?php get_footer(); ?>