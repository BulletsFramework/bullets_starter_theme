<?php
	$text = get_sub_field('text');
	$button_link = get_sub_field('button_link');
	$button_text = $button_link ? get_sub_field('button_text') : false;
	$button_url = $button_link == 'Internal' ? get_sub_field('page_link') : get_sub_field('external_link');

	if ($text) :
?>
<div class="container">
	<div class="row">
		<div class="column column-m-12">
			<?php echo $text; ?>
			<?php if($button_link && $button_text && $button_url) : ?>
				<a href="<?php echo $button_url; ?>" <?php if($button_link == "External") : ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>><?php echo $button_text; ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>