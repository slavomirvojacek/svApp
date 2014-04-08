<?php 
global $app;
 ?>

<div class="container">
	<a title="Log out" class="close" href="<?php echo( Template\Url::href(array($app["logoutPage"])) ); ?>">&times;</a>

	<h1>Hello, <?php echo( $template["userData"]["Name"] ); ?></h1>
	<p>
		<a href="<?php echo( Template\Url::href(array($app["userPage"], "settings")) ); ?>">Try editing your profile</a> OR <a href="<?php echo( Template\Url::href(array($app["userPage"], $template["randomProfile"])) ); ?>">visit someone else's profile!</a>
	</p>

	<hr>

	<?php 
	if (isset($template["userRemoteData"]) && $template["userRemoteData"] !== false) {
		var_dump($template["userRemoteData"]);
	}
	 ?>

	<?php Template\Template::getLayout(" param "); ?>
</div>
