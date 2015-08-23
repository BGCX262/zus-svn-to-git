<div id="sidebar2">
	<div class="orange-box-side">
		<h2>Contacts</h2>
		<p>Info on Zus at <a href="http://livinginazoo.com/zus/">Livinginazoo.com</a></p>
	</div>

<ul>


	
	<?php if (is_home()) { ?>
	<?php
	$my_query = new WP_Query('cat=4&showposts=10');

	 if( $my_query->have_posts() ) : ?>

	<li><h2>Altri articoli</h2>
	 <ul class="bor">

	<?

	while ($my_query->have_posts()) : $my_query->the_post();

	?>



 	<li id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link a <?php the_title(); ?>"><b><?php the_title(); ?></b></a> <?php the_excerpt_reloaded(10, '', 'none', TRUE, '', FALSE, 2); ?> </li>

 	<?php endwhile; ?>
 	</ul></li>
 	<?php endif; ?>

	<?php }	?>






   	<!-- commenti su rovato -->

 	<li><h2>Ultimi commenti</h2>
  	<ul class="bor">
  			<?php get_recent_comments(); ?>
	</ul>
	</li>

	<? if (is_home()) {

       echo "<ul>";
		wp_list_pages('title_li=<h2>Pagine</h2>&depth=1'); 
       echo "</ul>";
} ?>

	</ul>


<?php if (is_category()) {
        
         echo "<ul>";
       wp_list_pages('title_li=<h2>Pagine</h2>&depth=1');
        echo "</ul>";
} elseif (is_single()) {
 echo "<ul>";
        wp_list_pages('title_li=<h2>Pagine</h2>');
        echo "</ul>";

} elseif (is_page()) {
         echo "<ul>";
        wp_list_pages('title_li=<h2>Pagine</h2>');
        echo "</ul>";
} 
?>

<?php if (is_home()) { ?>

<?php
$my_query_ed = new WP_Query('cat=5&showposts=1');

 if( $my_query_ed->have_posts() ) : ?>


<div class="orange-box-side">
		<h2>Editoriale</h2>


 <?$my_query_ed->the_post();?>


<ul>
 <li id="post-<?php the_ID(); ?>"><h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3> <?php the_excerpt_reloaded(60, '', 'none', TRUE, '', FALSE, 2); ?> </li>

</ul>
 
</div>
 <?php endif; ?>


   

	
			

<?php
$my_query_lib = new WP_Query('cat=6&showposts=1');

 if( $my_query_lib->have_posts() ) : ?>


<div class="orange-box-side">
		<h2>Free Books</h2>


 <?$my_query_lib->the_post();?>


<ul>
 <li id="post-<?php the_ID(); ?>"><h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3> <?php the_excerpt_reloaded(30, '', 'none', TRUE, '<small>continua &raquo;</small>', FALSE, 2); ?> </li>
</ul>

 
</div>
 <?php endif; ?>	





<?php } ?>




















<ul>
<li><h2>Accedi</h2>
				<ul class="bor">
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
				</li>


<li><h2>Siti amici</h2>
				<ul class="bor">
<li><a href="http://www.bedandbreakfastbrescia.com" target="_blank" title="Bed and Breakfast e Case Vacanze in provincia di Brescia, sul Lago d'Iseo, in Franciacorta">Bed and Breakfast Brescia.com</a></li>
<li><a href="http://www.cealf.com/" target="_blank" title="CEALF - Cooperativa edificatrice abitazioni lavoratori della Franciacorta ">Cooperativa CEALF</a></li>
<li><a href="http://www.ristrutturazioniedili.eu/" target="_blank" title="Edilizia e ristrutturazioni a Brescia Bergamo e Milano">Edilizia e Ristrutturazioni</a></li>
<li><a href="http://www.bebconcaverde.it/" target="_blank" title="B&B in Franciacorta">Bed and Breakfast Conca Verde</a></li>
</ul>
				</li>
	</ul>
</div>
	</div>





