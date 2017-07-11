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
	$row_class = $image_position == 'Right' ? 'row--reversed' : '';
	$column_class = $image_position && $image_position != 'Above' ? 'column-t-6' : '';
?>
<style type="text/css">
	.row--reversed {
		flex-direction: row-reverse;
	}
</style>

<div class="container">
	<div class="row <?php echo $row_class; ?>">
		<?php if($image_position) : ?>
			<div class="column column-m-12 <?php echo $column_class; ?>">
				<figure>
					<img src="<?php echo $image['sizes']['thumbnail']; ?>">
				</figure>
			</div>
		<?php endif; ?>
		<div class="column column-m-12 <?php echo $column_class; ?>">
			<?php if($title) : ?>
				<h3><?php echo $title; ?></h3>
			<?php endif; ?>
			<?php if ($text) { echo $text; } ?>
			<?php if($button_link && $button_text && $button_url) : ?>
				<a href="<?php echo $button_url; ?>" <?php if($button_link == "External") : ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>><?php echo $button_text; ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>
