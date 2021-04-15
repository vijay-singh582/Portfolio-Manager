<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>five lakh</title>
    <style>
        body {
         background-color: rgb(173, 181, 187);
         
        }
        .card{
            background-color: rgb(51, 50, 53);
        }
        .card-title
        {
            font-size: x-large;
            color: wheat;
        }
        .card-text{
            font-size: medium;
            color: whitesmoke;
            font-style: normal;
        }
    </style>
</head>

<body>
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
                        <a class="nav-link" href="Contact us.php>Contact us</a>
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
                    <input class="btn btn-outline-success" name="log" Value="Log out" type="submit"></input>
                </form>
            </div>
        </div>
    </nav>
	<form action="shop.php" method="POST">
    <div class="container my-10">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="xerox.jfif" height="300" width="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Xerox</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">

                         <button class="btn btn-primary" name="a" value="25" type="submit">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="vodaphone.jfif" height="300" width="300"class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vodaphone</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" name="a" value="26" type="submit">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="uniliver.jfif"height="300" width="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Uniliver</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.
                        </p>
                    </div>
                    <div class="card-footer">
                         <button class="btn btn-primary" name="a" value="27" type="submit">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="tata motors.jfif"height="300" width="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tata Motors</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.
                        </p>
                    </div>
                    <div class="card-footer">
                         <button class="btn btn-primary" name="a" value="28" type="submit">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="sony.jfif" height="300" width="300"class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sony</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.
                        </p>
                    </div>
                    <div class="card-footer">
                         <button class="btn btn-primary" name="a" value="29" type="submit">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="phizer.jfif"height="300" width="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Phizer</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.
                        </p>
                    </div>
                    <div class="card-footer">
                         <button class="btn btn-primary" name="a" value="30" type="submit">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="tata chemical.jpg"height="300" width="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tata Chemical</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.
                        </p>
                    </div>
                    <div class="card-footer">
                         <button class="btn btn-primary" name="a" value="31" type="submit">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 my-10 mx-auto">
                    <img src="samsung.jfif"height="300" width="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Samsung</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height
                            action.</p>
                    </div>
                    <div class="card-footer">
                         <button class="btn btn-primary" name="a" value="32" type="submit">Buy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>