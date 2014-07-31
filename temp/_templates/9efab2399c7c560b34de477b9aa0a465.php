<!DOCTYPE html>
<html lang="<?php echo( $template["app"]["lang"] ); ?>">
  <head>

	<meta charset="<?php echo( $template["app"]["encoding"] ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="<?php echo( $template["app"]["description"] ); ?>">
	<meta name="keywords" content="<?php echo( $template["app"]["keywords"] ); ?>">

	<title><?php echo( $template["page"]["title"] ); ?> / <?php echo( $template["app"]["siteName"] ); ?></title>

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Karma:400,300' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="/assets/css/screen.css">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="/screenIcon.png">

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

  </head>

  <body class="page-<?php echo( $template["page"]["url"]["template"] ); ?> <?php echo( $template["app"]["lang"] ); ?>">

	<noscript>
		<div id="warning">
			<p>To be able to experience <?php echo( $template["app"]["siteName"] ); ?> with all its features, you need a browser that supports JavaScript, and it <strong>needs to be enabled.</strong></p>
		</div>
	</noscript>

	<?php Template\Template::getLayout(" template "); ?>

	<?php Template\Template::getModule(" footer "); ?>

	<?php echo( DEBUG ? Utilities\Debug::getStats() : "" ); ?>

	<?php echo( (isset($template["page"]["scripts"]) && is_array($template["page"]["scripts"])) ? Template\jsCompile::compile($template["page"]["scripts"]) : "" ); ?>
	</body>
</html>