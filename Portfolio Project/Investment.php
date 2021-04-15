<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Sign u</title>
</head>
<body class="bg-light" data-new-gr-c-s-check-loaded="14.983.0">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
		 <a class="navbar-brand" href="#"><img src="logo1.png" height="50px"
            <a class="navbar-brand" href="#" style="font-size:20px;" >Portfolio Manager User</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"  href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Investment.php">Investments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact us.php">Contact us</a>
						</li>
          
                  <li class="nav-item">
                        <a class="nav-link" href="invest.php">Invest Now</a>
						</li>
              &emsp; &emsp;  &emsp;&emsp;   <li class="navbar-right" class="nav-item">
                        <?php 
						SESSION_START();
						echo $_SESSION['username'];        
					    ?>
				   </li>
                </ul>
               &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <form class="d-flex" action="in.php" method="POSt">
                  <!--  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
                    <input class="btn btn-outline-success" name="log" Value="Log out" type="submit"></input>
                </form>
            </div>
        </div>
    </nav>
	</body>
	</HTML>
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
		//SESSION_START();
		$uid=$_SESSION['id'];
			$query= mysqli_query($con,"SELECT * FROM invest where User_id='$uid'");
			if($query)
		    {
				if(mysqli_num_rows($query)>0)
				{
				while($row=mysqli_fetch_array($query))
				{
					$id=$row['C_id'];
				$query1= mysqli_query($con,"SELECT * FROM Company where Sno='$id'");
				$row1=mysqli_fetch_array($query1);
				$pic=$row1['Photo'];
					echo <<<HTML
					<h2 style="">{$row1['C_Name']}</h2>
					<h3>Amount:{$row1['Price']}</h3>
					<img style="height:400px; width:400px;" src="$pic">
					HTML;
				}
				}
				else
				{
					echo "NO Company You Purchased";
				}
		    }
			
?>