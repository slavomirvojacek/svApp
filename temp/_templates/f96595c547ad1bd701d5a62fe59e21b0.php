<?php 
global $app;
 ?>

<h1>Ooops! An error must have occurred.</h1>

<h2>The page you requested could not be found :-(</h2>

<p><a href="<?php echo Template\Url::href( array($app["welcomePage"]) ); ?>" class="button buttonPrimary inverted">Go to homepage</a></p>