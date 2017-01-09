 <?php
 error_reporting(0);
		session_start();
	 $name = $_REQUEST['name'];
	 $email = $_REQUEST['email'];
	 $_SESSION['email'] = $email;
     $_SESSION['name'] = $name; 
	 $done = true;
	 echo $done;
     $_SESSION['id'] = session_status();
	
	
	 
 ?>
  