<div class="container">
	<h1><?php echo( $template["page"]["title"] ); ?></h1>

	<?php Template\Template::getModule(" nav "); ?>

	<?php 
  if (isset($template["alertSignIn"])) { echo $template["alertSignIn"]; }

  echo $template["formSignIn"];
   ?>
</div>