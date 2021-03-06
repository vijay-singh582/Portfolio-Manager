<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
    <!-- Image and text -->

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
                        <a class="nav-link active" href="index.php">Dashboard</a>
                    </l>
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
                 &emsp; &emsp;   &emsp;&emsp;&emsp; &emsp;  &emsp;&emsp;&emsp; &emsp;  &emsp;&emsp;   <input class="btn btn-outline-success" name="log" Value="Log out" type="submit"></input>
                </form>
            </div>
        </div>
    </nav>
    <hr>

    

    


      


      



      
      
        

          <img src="C:\Users\Neeraj Kumar\Desktop\New folder\back.png" alt="">
          <div class='text-center lg font-weight-bold'>Portfolio Manager serves as platforms & investment products to invest better in Indian equities.
            A Portfolio Manager is a basket of stocks/ETFs weighted intelligently to reflect an idea.</div>

            <hr>

            <div class='text-center lg font-weight-bold'>
              We are on a mission to change how India invests
              <br>
              Portfolio Manager is a fintech company building a trusted financial <br>
              ecosystem together with investors, advisors, brokers and other <br>
              market participants.From individual investors to big AMCs, <br>
              our products are used every day across India's capital markets. <br>
        
            </div>



            <form>
              <div class="col align-self-start">
                <label for="exampleInputEmail1" class="form-label" aria-placeholder="Reach us ">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				<br>
               <center> <button type="submit" style="align:center;" class="btn btn-primary ">Subscribe</button></center>
              </div>
                  
            </form>

            <div class='text-center lg font-weight-bold'>
              Mail us at portfolio123@gmail <br>
              Contact us at :  0751 14*** , 9425****** 
            </div>
          
    <footer class="my-5 pt-5 text-muted text-center text-small">
      <hr>
      Portfolio Manager Technologies Private Limited
      #51, 3rd Floor, Le Parc Richmonde,
      Richmond Road, Shanthala Nagar,
      Richmond Town, Bangalore - 560025

      <p>
          <h6 style="text-align:center">Copyright Reserved</h6>
      </p>
      
  </footer>
    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>