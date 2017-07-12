<?php
	// background fields
	$hero_background_colour = get_field('hero_background_colour');
	$hero_background_image = get_field('hero_background_image');
	$hero_background_video = get_field('hero_background_video');

	// text fields
	$hero_title = get_field('hero_title');
	$hero_lead_text = get_field('hero_lead_text');

	// button fields
	$button_link = get_field('hero_button_link');
	$button_text = get_field('hero_button_text');
	$button_url = $button_link == 'Internal' ? get_field('hero_page_link') : get_field('hero_external_link');

	// background styles
	$hero_styles = "";

	if ($hero_background_colour) {
		$hero_styles .= "background-color:{$hero_background_colour};";
	}

	if ($hero_background_image) {
		$hero_styles .= "background-image:url({$hero_background_image['sizes']['medium']});";
	}
?>

<section<?php if($hero_styles) { echo " style='{$hero_styles}'"; } ?>>
	<div class="container">
		<div class="row">
			<div class="column column-m-12">
				<?php if($hero_title) : ?>
					<h1><?php echo $hero_title; ?></h1>
				<?php endif; ?>
				<?php if($hero_lead_text) : ?>
					<p><?php echo $hero_lead_text; ?></p>
				<?php endif; ?>
				<?php if($button_text && $button_url) : ?>
					<a href="<?php echo $button_url; ?>" <?php if($button_link == "External") : ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>><?php echo $button_text; ?></a>
				<?php endif; ?>	
				<?php if($hero_background_video) : ?>
					<div class="embed">
						<?php echo $hero_background_video; ?>
					</div>
				<?php endif; ?>			
			</div>
		</div>
	</div>
</section>