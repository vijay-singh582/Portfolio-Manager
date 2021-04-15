<?php
$con = mysqli_connect('localhost','root','');
		if(!$con)
		{
			echo 'Not connected To Server';
		}
		if(!mysqli_select_db($con,'stock'))
		{
			echo 'Database Not Selected';
		}
		if(isset($_POST['check']))
		{
		 //$pm = $_POST['payMethod'];
              $no = $_POST['noc'];
              $cc = $_POST['ccn'];
			  $ex = $_POST['exp'];
			  $cv = $_POST['cvv'];
			   if( $no && $cc && $ex && $cv)
			  {
				 if(preg_match('/^[a-z]*$/',$no))
				 {					 
				 if(preg_match('/^[0-9]*$/',$cc) && strlen($cc)==16)
				 {
					if(preg_match('/^[0-9]*$/',$cv) && strlen($cv)==3)
					{
						SESSION_start();
						$cid=$_SESSION['cid'];
						$id=$_SESSION['id'];
					$INSERT="INSERT INTO invest(C_id, User_id) VALUES ('$cid','$id')";
			if(!mysqli_query($con,$INSERT))
			{
				echo '<script type="text/javaScript">alert("Try Again")</script>';
			}
			else
			{
				echo "Successfully Buy";
			}	
					}
					else
					{
						echo '<script type="text/javaScript">alert("Enter correct CVV number")</script>';
					}
				 }
				 else
				 {echo '<script type="text/javaScript">alert("Enter correct credit number")</script>';}
				 }
				 else
				 {echo '<script type="text/javaScript">alert("Enter correct card name")</script>';}
			  }
			  else
			  {echo '<script type="text/javaScript">alert("Please fill required details")</script>';}	  
		}
?>