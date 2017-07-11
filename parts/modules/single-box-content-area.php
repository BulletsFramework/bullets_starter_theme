<?php
	// image fields
	$image_position = get_sub_field('image_position');
	$image = $image_position ? get_sub_field('image') : false;
	$image_orientation = $image_position ? get_sub_field('image_orientation') : false;

	// text fields
	$title = get_sub_field('title');
	$text = get_sub_field('text');

	// button fields
	$button_link = get_sub_field('button_link');
	$button_text = $button_link ? get_sub_field('button_text') : false;
	$button_url = $button_link == 'Internal' ? get_sub_field('page_link') : get_sub_field('external_link');

	// layout vars
	$row_class = $image_position == 'Right' ? ' row--reversed' : '';
	$column_class = $image_position && $image_position != 'Above' ? ' column-t-6' : '';


	// render HTML
	$html = "<div class='container'><div class='row{$row_class}'>";

	// display optional image in own column
	if ($image_position) {
		$html .= "<div class='column column-m-12'{$column_class}><figure>";

		$html .= "</figure></div>";
	}

	// display optional text with button in own column
	$html .= "<div class='column column-m-12{$column_class}'>";

	if ($title) {
			$html .= "<h3>{$title}</h3>";
		}

	if ($text) {
		$html .= $text;
	}

	// display optional button link
	if( $button_link && $button_text && $button_url ) {
		$button_attr = $button_link == "External" ? " target='_blank' rel='noopener noreferrer'" : "";
		$html .= "<a class='cta' href='{$button_url}'{$button_attr}>{$button_text}</a>";
	}

	$html .= "</div></div></div>";

	// close parent elements
	echo $html;
?>
