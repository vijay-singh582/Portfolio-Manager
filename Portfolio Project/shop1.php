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
		if(isset($_POST['a']))
		{
			$cid=$_POST['a'];
			echo $cid;
		$query= mysqli_query($con,"SELECT * FROM Company where Sno='$cid'");
		if($query)
		{
					$row=mysqli_fetch_array($query);
					$pic=$row['Photo'];
					echo <<<HTML
					<h1 style="">{$row['C_Name']}</h1>
					<h3>Amount:{$row['Price']}</h3>
					<img style="height:400px; width:400px;" src="$pic">
					HTML;
		}
		  else
		         {echo '<script type="text/javaScript">alert("NO Company Found")</script>';}
		}
	//	echo "hello";
?>