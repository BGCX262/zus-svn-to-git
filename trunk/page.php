<?php get_header(); ?>
	<?php include (TEMPLATEPATH . '/menu.php'); ?>
	<div id="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entrytext">
				<?php the_content('<p class="serif">continua &raquo;</p>'); ?>
	
				<?php link_pages('<p><strong>Pagine:</strong> ', '</p>', 'number'); ?>
	
			</div>
		</div>


          <div id="page-box"><p>Per inviare materiale da inserire in questa sezione scrivici ad <b>info@rovato.org</b><br /><br /></p><ul>
        <?php wp_list_pages("title_li=<h2>Materiale in questa sezione</h2>&child_of=$post->ID");?>
         </ul>
         </div>
	  <?php endwhile; endif; ?>


	<?php edit_post_link('Modifica.', '<p>', '</p>'); ?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
