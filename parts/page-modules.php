<?php
	// check if the flexible content field has rows of data
	if( have_rows('page_modules') ):
	    $page_modules = true;

	    echo "<div class='modules paddingends--half'>";
	    
	    // loop through the rows of data
	    while ( have_rows('page_modules') ) : the_row();

	        if( get_row_layout() == 'single_box_content_area'  ) {
	        	include(locate_template('parts/modules/single-box-content-area.php'));

	        }   

	    endwhile;

	    echo "</div>";

	else :

	    $page_modules = false;

	endif;
?>