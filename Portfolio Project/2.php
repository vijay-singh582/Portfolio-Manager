<?php
error_reporting(E_ERROR|E_PARSE);
		$con = mysqli_connect('localhost','root','');
		if(!$con)
		{
			echo 'Not connected To Server';
		}
		if(!mysqli_select_db($con,'stock'))
		{
			echo 'Database Not Selected';
		}
		if(isset($_POST['insert']))
		{
              $name = $_POST['fname'];
              $lname = $_POST['lname'];
			  $name.=" ".$lname;
              $username = $_POST['username'];
              $email = $_POST['email'];
              $address = $_POST['address'];
              $passw = $_POST['passw'];
              $passw1 = $_POST['repassw'];
			  $gender = $_POST['Gender'];
			  $country = $_POST['country'];
              $state = $_POST['state'];
              $mobile = $_POST['mobile'];
              $adhar = $_POST['adhar'];
              $pan = $_POST['PAN'];
			  if($name && $username && $email && $address && $passw && $passw1 && $gender && $country && $state && $mobile && $adhar && $pan)
			  {
			  if($passw == $passw1)
			  {
			  if(preg_match('/^[0-9]*$/',$mobile) && strlen($mobile)==10) 
			  {
			  if(preg_match('/^[0-9]*$/',$adhar) && strlen($adhar)==12)
			  {
			  if(strlen($pan)==10)
			  {
				  $query = mysqli_query($con,"SELECT * FROM register where Email='$email'");
				  if(mysqli_num_rows($query)>0)
				  {
					 echo '<script type="text/javaScript">alert("Already email is exist")</script>'; 
				  }
				  else
				  {
			$INSERT="INSERT INTO register (Name, User_name, Email, Address, Password, Gender, Country, State, Mobile, Aadhar_Card, PAN_Number ) VALUES ('$name','$username','$email','$address','$passw', '$gender', '$country','$state','$mobile','$adhar','$pan')";
			if(!mysqli_query($con,$INSERT))
			{
				echo '<script type="text/javaScript">alert("Try Again")</script>';
			}
			else
			{
				echo '<script type="text/javaScript">alert("Successfully Registered")</script>';
				header("Location:signinto.php");
			}
			  }
			}
			else{echo '<script type="text/javaScript">alert("Invalid PAN number ")</script>';}
			}
			else
			{echo '<script type="text/javaScript">alert("Incorrect Aadhar Number")</script>';}
			}
			else
			{echo '<script type="text/javaScript">alert("Incorrect mobile number")</script>';}
			}
			else
			{echo '<script type="text/javaScript">alert("Password mismatch")</script>';}
			}
			else
			{echo '<script type="text/javaScript">alert("Please fill required details")</script>';}
		 header("Location:signinto.php");
	    }
?>
