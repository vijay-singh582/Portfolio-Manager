<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>heaven for programmers</title>
</head>

<body oncontextmenu="return false">

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
                  <!--  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
                    <input class="btn btn-outline-success" name="log" Value="Log out" type="submit"></input>
                </form>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="back.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color:black;">Welcome</h5>
                    <p style="color:black;">glad to see you hear</p>
                    <button class="btn btn-primary">invest</button>
                    <button class="btn btn-danger">invest</button>
                    <button class="btn btn-success">invest</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="com.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color:black;">Welcome</h5>
                    <p style="color:black;">glad to see you hear</p>
                    <button class="btn btn-primary">invest</button>
                    <button class="btn btn-danger">invest</button>
                    <button class="btn btn-success">invest</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="sea.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color:black;">Welcome</h5>
                    <p style="color:black;">glad to see you hear</p>
                    <button class="btn btn-primary">invest</button>
                    <button class="btn btn-danger">invest</button>
                    <button class="btn btn-success">invest</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">BAJAJ FINANANCE LIMITED</h3>
                        <div class="mb-1 text-muted"></div>
                        <p class="card-text mb-auto">Originally incorporated as Bajaj Auto Finance Limited on March 25,
                            1987, the non-bank singularly focused on providing two and three wheeler finance. After 11
                            years in the auto finance market, Bajaj Auto Finance Ltd launched its initial public issue
                            of equity share and was listed on the BSE and NSE .</p>
                        <a href="/bajaj.html" class="stretched-link">know
                            more</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="bajaj finance.jpg" class="bd-placeholder-img" width="200" height="250" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">HCL</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">HCL Technologies Limited, is an Indian multinational information technology
                            (IT) services and consulting company headquartered in Noida, Uttar Pradesh, India. It is a
                            subsidiary of HCL Enterprise.</p>
                        <a href="--" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="HCL.jpg" class="bd-placeholder-img" width="200" height="250" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">BPCL</h3>
                        <div class="mb-1 text-muted"></div>
                        <p class="card-text mb-auto">
                            Bharat Petroleum |Oil & Gas Companies in India |Top ...
                            www.bharatpetroleum.com
                            Bharat Petroleum Corporation Limited ... Memorandum (PIM), issued on 7th March, 2020, for
                            inviting expression of interest for strategic disinvestment of BPCL..</p>
                        <a href="https://www.moneycontrol.com/india/stockpricequote/refineries/bharatpetroleumcorporation/BPC"
                            class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="BPCL.jpg" class="bd-placeholder-img" width="200" height="250" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">EICHER </h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="" class="stretched-link">know more</a>
                    </div>
                    <div
                        class="col-auto d-nonehttps://www.tickertape.in/stocks/eicher-motors-EICH?ref=gads_spages&gclid=EAIaIQobChMIkemnk-bI7QIVVBwrCh232AU9EAAYASAAEgJBA_D_BwE d-lg-block">
                        <img src="eicher.png" class="bd-placeholder-img" width="200" height="250" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">INDUSLAND BANK SHARES UPDATE</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Showing results for indusind bank
                            Search instead for indus bak

                            IndusInd Bank: Personal Banking, NRI Banking, Personal ...
                            www.indusind.com
                            Indusind Bank offers you instant Telegraphic Transfer facilities through our correspondent
                            banks abroad for you to send money to your loved ones..</p>
                        <a href="https://economictimes.indiatimes.com/indusind-bank-ltd/stocks/companyid-9196.cms"
                            class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="indusland_bank.jpg" class="bd-placeholder-img" width="200" height="250" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">HDFC</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">HDFC Bank Limited is an Indian banking and financial services company
                            headquartered in Mumbai, Maharashtra.
                            HDFC Bank is India's largest private sector bank by assets. It is the largest bank in India
                            by market capitalisation as of March 2020.
                        </p>
                        <a href="https://www.moneycontrol.com/india/stockpricequote/finance-housing/housingdevelopmentfinancecorporation/HDF"
                            class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="HDFC.png" class="bd-placeholder-img" width="200" height="250" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>


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
