<?php if (is_sticky()): ?>
<h1 style="color:red"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h1>	
<p class="jumbotron"> 
	<?php the_content(); ?>
</p>
<?php elseif (is_page()): ?>
    	<div class="col-sm-12">
	<h1><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h1>	

<p > <?php the_content(); ?></p>
<h5><?php the_date(); ?> par  / <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></h5>	
</div>
<?php else: ?>

	<div class="<?php if(is_single()) echo "col-sm-12";else echo "col-sm-6" ?>">
	<h1><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h1>	

<p > <?php the_content(); ?></p>
<h5><?php the_date(); ?> par  / <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></h5>	
</div>
<?php endif ?>


