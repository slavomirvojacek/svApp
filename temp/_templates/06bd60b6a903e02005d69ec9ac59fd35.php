<footer class="container">

	<p>&copy; <?php echo( date("Y") ); ?>, <a href="<?php echo Template\Url::href( array(""), true ); ?>"><?php echo( $template["app"]["siteName"] ); ?></a></p>

</footer>

<?php  if (GRID && DEBUG) {  ?>
  <script>
		$(document).ready(function() {
			$('body').prepend($('<div id="debug-grid" style="height: ' + $('body').outerHeight() + 'px"></div>'));

			$('body').dblclick(function() {
				$('#debug-grid').toggleClass("show");
			});
		});
  </script>
<?php  }  ?>