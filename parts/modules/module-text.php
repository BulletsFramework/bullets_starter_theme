<?php
	$text = get_sub_field('text');

	if ($text) :
?>
<div class="container">
	<div class="row">
		<div class="column column-m-12">
			<?php echo $text; ?>
		</div>
	</div>
</div>
<?php endif; ?>