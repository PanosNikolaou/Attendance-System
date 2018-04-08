<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				
				$("button").click(function(){
				$.ajax({url: "serverinit.php", success: function(result){				
				var obj = jQuery.parseJSON(result);
				alert(result);
				$("#div1").html(result);
				alert(obj.data[0][0])
				}});
				});
				
			});
</script>
	</head>
	<body>
	<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

	<button>Get External Content</button>
	</body>
</html>