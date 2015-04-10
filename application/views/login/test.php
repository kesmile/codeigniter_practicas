<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>login</title>
</head>
<body>
	<button id="mybutton">Ajax</button>
<div id="container">
</div>
<script src="<?php echo base_url();?>public/js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#mybutton").click(function(){
			$.ajax({
						url: "<?php echo site_url("login/ajax") ?>",
						type: 'GET',
						data: {"data":"ok"},
						success:function(data){
							$("#container").html(data);
						}
				});
		});
	});
</script>
</body>
</html>
