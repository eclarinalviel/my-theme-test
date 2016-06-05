<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="col-xs-offset-1 entry-header">
		<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
		<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
	</header>
	
	<div class="row">
		
		<?php if( has_post_thumbnail() ): ?>
		
			<div class="col-xs-offset-2 col-xs-10 col-sm-10">
				<div class="thumbnail"><?php the_post_thumbnail('full'); ?></div>
			</div>
			<div class="col-xs-offset-2 col-xs-10 col-sm-10">
				<?php the_excerpt('..more'); ?>
			</div>
		
		<?php else: ?>
		
			<div class="col-xs-offset-2 col-xs-10">
				<?php the_excerpt('..more'); ?>
			</div>
		
		<?php endif; ?>
	</div>

</article>