<div class="container">
	<h1><?php echo( $template["page"]["title"] ); ?>?</h1>

	<?php Template\Template::getModule(" nav "); ?>

	<hr>

	<?php 
	if (isset($template["alertResetPassword"])) { echo $template["alertResetPassword"]; }

	echo $template["formResetPassword"];
	 ?>
</div>