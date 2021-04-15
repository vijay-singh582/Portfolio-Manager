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
<body class="bg-light" data-new-gr-c-s-check-loaded="14.983.0" oncontextmenu="return false">
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="logo1.png" alt="" width="72"
                height="72">
							      <a style="align:right;" href="login.php">Log in</a>
            <h2>Sign up Form</h2>

            <p class="lead">Welcome to Portfolio Manager, Kindly provide the details .</p>
        </div>
        <div class="row">
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Account details</h4>
                <form class="needs-validation" novalidate=""  method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="fname">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" name="lname">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="username" placeholder="Username" required="" name="username">
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com" required="" name="email">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" name="address">
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Password</label>
                        <input type="password" class="form-control" id="address2" placeholder=" Password" required="" name="passw">
                    </div>
					<div class="mb-3">
                        <label for="address2">Re-Type Password</label>
                        <input type="password" class="form-control" id="address2" placeholder="Re-Type Password" required="" name="repassw">
                    </div>
                    <div class="d-block my-3">
						                 <label >Gender</label>
                        <div class="custom-control custom-radio">
                            <input id="credit" name="Gender" type="radio" class="custom-control-input" 
                                required="" value="male">
                            <label class="custom-control-label" for="credit">Male</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="Gender" type="radio" class="custom-control-input"
                                required="" value="Female">
                            <label class="custom-control-label" for="debit">Female</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" id="country" required="" name="country">
                                <option selected hidden value="">Choose...</option>
                                <option value="India">India</option>
								<option value="United States">United states</option>
								<option value="china">China</option>
								<option value="Bangladesh">Bangladesh</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100" id="state" required="" name="state">
                                <option selected hidden value="">Choose...</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
								<option value="Himanchal Pradesh">Himanchal Pradesh</option>
								<option value="Rajasthan">Rajasthan</option>
								<option value="Chattisgarh">Chattisgarh</option>
								<option value="Kerala">Kerala</option>
								<option value="Goa">Goa</option>
								<option value="Andhra Pradesh">Andhra Pradesh</option>
								<option value="Tamil Nadu">Tamil Nadu</option>
								<option value="Gujarat">Gujarat</option>
								<option value="Maharashtra">Maharashtra</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Mobile no.</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required="" name="mobile">
                            <div class="invalid-feedback">
                                Mobile number required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Adhar Number</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required="" name="adhar">
                            <div class="invalid-feedback">
                                Adhar number is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">PAN Number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required="" name="PAN">
                            <div class="invalid-feedback">
                                PAN number is required
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="insert" value="insert data">Continue to Login</button>
                <script type="text/javaScript">
				/*function mess()
				{
					alert("Registered Successfully");
					return true;
				}*/
				</script>
				</form>
            </div>
        </div>
        <hr>
        <h6 style="text-align:center">Portfolio Manager Technologies Private Limited
            #51, 3rd Floor, Le Parc Richmonde,
            Richmond Road, Shanthala Nagar,
            Richmond Town, Bangalore - 560025</h6>
        <p class="mt-5 mb-3 text-muted">© 2017-2020</p>

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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
</html>
<?php
//error_reporting(E_ERROR|E_PARSE);
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
		// header("Location:signinto.php");
	    }
?>
