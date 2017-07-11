<?php
	// check if the flexible content field has rows of data
	if( have_rows('page_modules') ):
	    $page_modules = true;
	    
	    // loop through the rows of data
	    while ( have_rows('page_modules') ) : the_row();

	        if( get_row_layout() == 'image_with_text'  ) {
	        	include(locate_template('parts/modules/module-image-with-text.php'));

	        } elseif( get_row_layout() == 'images'  ) {
	        	include(locate_template('parts/modules/module-images.php'));

	        } elseif( get_row_layout() == 'text'  ) {
	        	include(locate_template('parts/modules/module-text.php'));

	        }  

	    endwhile;

	else :

	    $page_modules = false;

	endif;
?>