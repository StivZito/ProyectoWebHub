<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once('layouts/header_sr.php'); ?>
	</head>
<body>
	<iframe src="https://www.google.com/maps/d/embed?mid=1xMk881zHMC2-0G3k_Xo0x8wmf5p2sQ41" onload="autoResize(this)" height="500" width="100%"></iframe>	

	<script>
	   function autoResize(i) {
	     var iframeHeight=
	     (i).contentWindow.document.body.scrollHeight;
	     (i).height=iframeHeight+20;
	   } 
	</script>
	
</body>
	<?php 
		require_once('layouts/footer.php');
 	?>
</html>