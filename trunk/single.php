<?php get_header(); ?>
	<?php include (TEMPLATEPATH . '/menu.php'); ?>
	<div id="content">
				
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

	<p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php the_time('l, F jS, Y') ?> | <?php comments_popup_link('Nessun commento &#187;', '1 Commento &#187;', '% Commenti &#187;'); ?> <a href="<?php trackback_url(true); ?> " rel="trackback">Trackback</a></p> 
			


		
			<div class="entrytext">
				<?php the_content('<p class="serif">continua &raquo;</p>'); ?>
	
				<?php link_pages('<p><strong>Pagine:</strong> ', '</p>', 'number'); ?>
	
	
			</div>
		</div>

		
	<?php comments_template(); ?>
	
	<?php endwhile; else: ?>


	

		<p>Scusa ma non abbiamo trovato nulla che corrisponda ai tuoi criteri</p>
	
<?php endif; ?>
	
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
