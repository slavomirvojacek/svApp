<div id="profilePictureHolder">
	<?php echo( (!empty($template["userData"]["ProfilePicture"]) ? '<img src="/temp/data/_avatars/avatar-512/' . $template["userData"]["ProfilePicture"] . '" alt="Profile picture" />' : '') ); ?>
</div>

<div id="updateFormHolder">
	<?php 
	if (isset($template["alertEditProfile"])) { echo $template["alertEditProfile"]; }

	echo $template["formEditProfile"];
	 ?>
</div>

<div class="clearfix"></div>