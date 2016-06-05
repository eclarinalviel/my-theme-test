<?php 
/*
	Template Name: Page No Title
*/

get_header(); ?>
<div class="row">
   <div class="col-xs-12 col-sm-8 text-center">
	<?php 

	if( have_posts() ):
		while( have_posts() ): the_post(); ?>
		<h1> <?php bloginfo( 'name' ); ?> </h1>
		<p><?php the_content(); ?></p>

	<?php endwhile;
	endif;
	?>
	</div>
		<div class="col-xs-12 col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
