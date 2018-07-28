<?php get_header(); ?>
<!-- main -->
<div class="container">
	
<div class="contenu col-sm-9">

<?php
if (have_posts()) {
	
	while (have_posts()) {
		the_post();
	    get_template_part( "content" );
	}
}


;; ?>
</div>
<div class="sidebar col-sm-3">
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
