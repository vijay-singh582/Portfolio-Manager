<!doctype html>
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
                <form class="d-flex" action="in.php" method="POSt">
                  &emsp; &emsp;  &emsp;&emsp;   &emsp; &emsp;  &emsp;&emsp;     <input class="btn btn-outline-success" name="log" Value="Log out" type="submit"></input>
                </form>
            </div>
        </div>
    </nav>
<div class="container">
<div class="row">
<div class="col">
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
		if(isset($_POST['a']))
		{
			$cid=$_POST['a'];
			//echo $cid;
			SESSION_START();
			$uid=$_SESSION['id'];
			$_SESSION['cid']=$cid;
			$query1= mysqli_query($con,"SELECT * FROM invest where User_id='$uid'");
			if($query1)
		{
			while($row1=mysqli_fetch_array($query1))
			{
				if($cid==$row1['C_id'])
				{
					echo <<<HTML
					<h5 style="color:red;"><i>YOU ALREADY PURCHASE!</i></h5>
					HTML;
				}
			}
		}
		}
		SESSION_start();
		$cid=$_SESSION['cid'];
		$query= mysqli_query($con,"SELECT * FROM Company where Sno='$cid'");
		if($query)
		{
					$row=mysqli_fetch_array($query);
					$pic=$row['Photo'];
					echo <<<HTML
					<h2 style="">{$row['C_Name']}</h2>
					<h3>Amount:{$row['Price']}</h3>
					<img style="height:400px; width:400px;" src="$pic">
					HTML;
		}
		  else
		         {echo '<script type="text/javaScript">alert("NO Company Found")</script>';}
			 
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
				echo '<script type="text/javaScript">alert("successfully Buy")</script>';
			}	
					}
					else
					{
						echo '<script type="text/javaScript">alert("Enter correct CVV number")</script>';
					}
				 }
				 else
				 {echo '<script type="text/javaScript">alert("Enter credit card number")</script>';}
				 }
				 else
				 {echo '<script type="text/javaScript">alert("Enter correct card name")</script>';}
			  }
			  else
			  {echo '<script type="text/javaScript">alert("Please fill required details")</script>';}	  
		}
?>
</div>
<div class="col">
<form action=" " method="POST">
                    <h4 class="mb-3">Payment</h4>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"
                                required="" value="Credit card">
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                required="" value="Debit Card">
                            <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input"
                                required="" value="paypal">
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required="" name="noc">
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required="" name="ccn">
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="" name="exp">
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="" name="cvv">
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg" style="display:block; margin-left:auto; margin-right:auto;" name="check" type="submit">Pay now</button>
                </form>
            </div>
        </div>
		</div>
		</div>
        <hr>
        <h6 style="text-align:center">Portfolio Manager Technologies Private Limited
            #51, 3rd Floor, Le Parc Richmonde,
            Richmond Road, Shanthala Nagar,
            Richmond Town, Bangalore - 560025</h6>
        <p class="mt-5 mb-3 text-muted">©      2017-2020</p>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2020 Portfolio Manager</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="/docs/4.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="form-validation.js"></script>
