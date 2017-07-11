<?php
	$quote_text = get_sub_field('quote_text');

	if($quote_text) :
?>

<div class="container">
	<div class="row">
		<div class="column column-m-12">
			<blockquote>
				<cite><?php echo $quote_text; ?></cite>
			</blockquote>
		</div>
	</div>
</div>

<?php endif; ?>