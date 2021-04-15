
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    
    
        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }
          element {
}
.lead {
    font-size: 1.25rem;
    font-weight: 300;
    color: #f8f9fa;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}
*, ::after, ::before {
    box-sizing: border-box;
}
.bg-dark {
    background-color: #212529 !important;
}
.text-white {
    color: #fff !important;
}
.text-center {
    text-align: center !important;
}
body {
    text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
}
body {
    font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    -webkit-text-size-adjust: 100%;
}
:root {
    --bs-blue: #0d6efd;
    --bs-indigo: #6610f2;
    --bs-purple: #6f42c1;
    --bs-pink: #d63384;
    --bs-red: #dc3545;
    --bs-orange: #fd7e14;
    --bs-yellow: #ffc107;
    --bs-green: #198754;
    --bs-teal: #20c997;
    --bs-cyan: #0dcaf0;
    --bs-white: #fff;
    --bs-gray: #6c757d;
    --bs-gray-dark: #343a40;
    --bs-primary: #0d6efd;
    --bs-secondary: #6c757d;
    --bs-success: #198754;
    --bs-info: #0dcaf0;
    --bs-warning: #ffc107;
    --bs-danger: #dc3545;
    --bs-light: #f8f9fa;
    --bs-dark: #212529;
    --bs-font-sans-serif: system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    --bs-font-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
    --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
}

a{
    color: aliceblue;
}
          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }
        </style>
    
         
        <!-- Custom styles for this template -->
        <link href="cover.css" rel="stylesheet">
      </head>
</head>

    
<body class="d-flex h-100 text-center text-dark" style="background-color:cornflowerBlue;">
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
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
						error_reporting(E_ERROR|E_PARSE);
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
      </header>
    
      <main class="px-3">
        <h1>Glad To See You Here</h1>
        <h1>YOU CAN CHOOSE THE AMOUNT ACCORDING TO YOUR PREFERANCE</h1>
        <p class="lead">Protecting investors is an important part of our mission. We cannot tell you what investments to make, but this website provides unbiased information to help you ..</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white" style="color:black;">START INVESTMENT FROM HEAR</a><br>
          <button type="button" class="btn btn-primary btn-lg">invest</button>
          
        </p>
      </main>
      <div class="input-group mb-3">
      &emsp; &emsp;  &emsp;&emsp;  &emsp; &emsp;  &emsp;&emsp;  &emsp; &emsp;  &emsp;&emsp;  &emsp;&emsp;   &emsp; &emsp;  
	  &emsp;&emsp; &emsp; &emsp;  &emsp;&emsp;  &emsp; &emsp;  &emsp;&emsp;    <ul  class="list-group">
          <li><a class="list-group-item" style="color:black;" href="Five.php">500-10000</a></li>
          <li><a class="list-group-item" style="color:black;" href="ten_thousand.html">10000-100000</a></li>
          <li><a class="list-group-item"style="color:black;" href="one_lakh.html">100000-1000000</a></li>
        
          <li><a class="list-group-item" style="color:black;"href="fivr_lakh.html">1000000-10000000</a></li>
        </ul>
        
      </div>
    
      <footer class="mt-auto text-white-50">
           
      </footer>
    </div>
    
    
        
      
    
    </body>
</html>