<html>
<head>
 
   <script>
		function name(n){
		alert("Calle me "+n);
	
}
	</script>
   

</head>
<body>



<?php
   include 'details.php';
   echo "$name"; 
   echo " <script type='text/javascript'>name('$name');</script>";
   ?>
  



</body>
</html>