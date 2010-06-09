<!-- generated with index.php -->
<?php

    // calling the header.php
    get_header(); 

?> 
  
<!-- begin post --> 
    
<?php 	if (! empty($display_stats) ) { 		get_stats(1); 		echo "<br />"; 	} 	else if (($posts & empty($display_stats)) ) : foreach ($posts as $post) : the_post(); ?>   

<div class="entry">   
	<div class="pages">
<h2 class="pagetitle"><?php the_title(); ?></h2>
<!-- START PREVIOUS/NEXT BUTTONS --> 

<!--Removing Previous/Next until ticket 380 is fixed http://dev.eyebeam.org/projects/wpfolio/ticket/380 
<div class="prevnext">
<?php next_post_link('%link', 'newer', TRUE); ?> <?php previous_post_link('%link', 'older', TRUE); ?>
</div> .prevnext -->

<!-- END PREVIOUS/NEXT BUTTONS -->    

<?php the_content(); ?>   
</div> <!-- .entry --> 		    

<div class="posted">   
<!-- got rid of menu below gallery //danielwiener -->

<?php edit_post_link('edit this', '<br /><br /><span class="edit-link">', '</span>'); ?> <!--USER EDIT LINK-->
</div><!-- .posted -->
     
<?php comments_template(); ?> 	  

<?php wp_link_pages(); ?>
 
</div><!-- .pages -->

<!-- <?php trackback_rdf(); ?> -->    
<?php endforeach; else: ?> <?php _e('Sorry, no posts matched your criteria.'); ?>
<?php endif; ?>    

<!-- end post-->     

<?php     

	// calling footer.php
    get_footer();

?>