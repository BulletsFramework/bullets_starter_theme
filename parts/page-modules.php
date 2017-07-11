<?php
	// check if the flexible content field has rows of data
	if( have_rows('page_modules') ):
	    $page_modules = true;
	    
	    // loop through the rows of data
	    while ( have_rows('page_modules') ) : the_row();

	        if( get_row_layout() == 'content_with_image'  ) {
	        	include(locate_template('parts/modules/module-content-with-image.php'));

	        }   

	    endwhile;

	else :

	    $page_modules = false;

	endif;
?>