<?php get_header(); ?>
				<?php include (TEMPLATEPATH . '/menu.php'); ?>

	<div id="content">


				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		
		  <?php
$my_query_cen = new WP_Query('cat=1&showposts=10');

$my_query_cen->the_post();

?>	
			


	
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link a <?php the_title(); ?>"><?php the_title(); ?></a></h2>


					<p class="postmetadata"><?php edit_post_link('Edit', '', ' | '); ?> <?php the_time('F jS, Y') ?> | <!-- by <?php the_author() ?> --> <?php comments_popup_link('Nessun Commento &#187;', '1 Commento &#187;', '% Commenti &#187;'); ?> | <?php if(function_exists('wp_email')) { email_link(); } ?></p>
			
				
				<div class="entry">
					<?php the_excerpt_reloaded(180, '<img><a><object><param><p><embed><center><strong><br>', 'none', TRUE, '<small>continua &raquo;</small>', FALSE, 2); ?>
				</div>
		
		</div>
<!-- secondo post grande -->
<?php $my_query_cen->the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link a <?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<p class="postmetadata"><?php edit_post_link('Edit', '', ' | '); ?> <?php the_time('F jS, Y') ?> | <!-- by <?php the_author() ?> --> <?php comments_popup_link('Nessun Commento &#187;', '1 Commento &#187;', '% Commenti &#187;'); ?> | <?php if(function_exists('wp_email')) { email_link(); } ?></p>
			
				
				<div class="entry">
					<?php the_excerpt_reloaded(150, '<img><a><object><param><embed><center>', 'none', TRUE, '<small>continua &raquo;</small>', FALSE, 2); ?>
				</div>
		
		</div>

<!-- fine secondo post grande -->


	<?php
$my_query_seg = new WP_Query('cat=2&showposts=7');

 if( $my_query_seg->have_posts() ) : ?>


<div id="col-l">
		<h2>Si dice...</h2>


 <?while ($my_query_seg->have_posts()) : $my_query_seg->the_post();?>



 <div><h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3> <?php the_excerpt_reloaded(40, '', 'none', TRUE, '<small>continua &raquo;</small>', FALSE, 2); ?> </div>

		<?php endwhile; ?>		
</div>
 <?php endif; ?>

<div id="content2">

		
		<?php while ($my_query_cen->have_posts()) : $my_query_cen->the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<p class="postmetadata"><?php edit_post_link('Edit', '', ' | '); ?> <?php the_time('F jS, Y') ?> | <!-- by <?php the_author() ?> --> <?php comments_popup_link('Nessun Commento &#187;', '1 Commento &#187;', '% Commenti &#187;'); ?> | <?php if(function_exists('wp_email')) { email_link(); } ?></p>
			
				
				<div class="entry">
					<?php the_excerpt_reloaded(50, '', 'none', TRUE, '<small>continua &raquo;</small>', FALSE, 2); ?>
				</div>
		
		</div>
	
		<?php endwhile; ?>		
		</div>

	
<div id="bottombar">
	<?php
$my_query_vid = new WP_Query('cat=3&showposts=2');

 if( $my_query_vid->have_posts() ) : ?>


<div id="video">
		<h2>Video</h2>


 <?$my_query_vid->the_post();?>



<div><h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3> <?php the_content(); ?> </div>


 
</div>
 <?php endif; ?>

</div>

	
</div>

<?php get_sidebar(); ?>

		
<?php get_footer(); ?>





