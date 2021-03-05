<!DOCTYPE html>
<html>
	<head>
	</head><br>
	<p>Hello, {{$name}}</p>
	<?php if($status=='publish'){ ?>
	<p style="text-align: center;">Your Content Published successfully</p>
	 <?php }else{ ?>
	<p style="text-align: center;">Your Content is Rejected</p>
	<?php } ?>
	<body style="">
		<!-- User Id:<p style="text-align: center;"></p>-->
	</body>
</html>