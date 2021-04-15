<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>five hundred</title>
    <style>
        body {
            background-color: rgb(173, 181, 187);

        }

        .card {
            background-color: rgb(51, 50, 53);
        }

        .card-title {
            font-size: x-large;
            color: wheat;
        }

        .card-text {
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
                    <input class="btn btn-outline-success" name="log" Value="Log out" type="submit"></input>
                </form>
            </div>
        </div>
    </nav>
	<form method="POST" action="shop.php">
    <div class="container my-4 mx-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-80">
                    <img src="HCL.jpg" height="300" width="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HCL Technology</h5>
                        <p class="card-text">HCL Technologies Limited, is an Indian multinational information technology
                            (IT) services and consulting company headquartered in Noida, Uttar Pradesh, India. It is a
                            subsidiary of HCL Enterprise..</p>
                    </div>
                    <div class="card-footer">

                        <button class="btn btn-primary" name="a" value="1" type="submit">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="BPCL.jpg" height="300" width="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bharat Petroleum Corporation Limited</h5>
                        <p class="card-text">Bharat Petroleum Corporation Limited (BPCL) is an Indian public sector oil
                            and gas company headquartered in Mumbai, Maharashtra.The Corporation operates two large
                            refineries of the country located in Kochi and Mumbai.[5] The company is India's 2nd largest
                            downstream oil company and is ranked 275th on the Fortune list of the world's biggest
                            corporations as of 2019.[6] BPCL ranked 672 in the Forbes 2018 list.
                        </p>
                    </div>
                    <div class="card-footer">
                         <button class="btn btn-primary" name="a" value="2" type="submit">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="HDFC.png" height="300" width="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HDFC Bank</h5>
                        <p class="card-text">HDFC Bank Limited is an Indian banking and financial services company
                            headquartered in Mumbai, Maharashtra. It has a base of 104,154 permanent employees as of 30
                            June 2019.[9] HDFC Bank is India’s largest private sector bank by assets.[10] It is the
                            largest bank in India by market capitalisation as of March 2020
                        </p>
                    </div>
                    <div class="card-footer">
                         <button class="btn btn-primary" name="a" value="3" type="submit">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="maruti_suzuki.jpg" height="300" width="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Maruti Suzuzki</h5>
                        <p class="card-text">Maruti Suzuki India Limited (MSIL), a subsidiary of Suzuki Motor
                            Corporation, Japan, is India’s largest passenger car maker. Maruti Suzuki is credited with
                            having ushered in the automobile revolution in the country.
                        </p>
                    </div>
                    <div class="card-footer">
                         <button class="btn btn-primary" name="a" value="4" type="submit">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="tech mahindra.jpg" height="300" width="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tech Mahindra</h5>
                        <p class="card-text">Tech Mahindra Limited is an Indian multinational technology company,
                            providing information technology (IT) and business process outsourcing (BPO) services. A
                            subsidiary of the Mahindra Group, the company is headquartered in Pune and has its
                            registered office in Mumbai.
                        </p>
                    </div>
                    <div class="card-footer">
                         <button class="btn btn-primary" name="a" value="5" type="submit">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="JSW.png" height="300" width="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">JSW</h5>
                        <p class="card-text">SW Group, is an Indian multinational conglomerate company based in Mumbai,
                            India. It is led by Sajjan Jindal and part of the Jindal Group.Now the group has footprints
                            across various sectors: Steel, Energy, Minerals, Port & Infrastructure, and Cement, across
                            India, the US, South America, and Africa. JSW Steel Ltd, JSW Energy, JSW Infrastructure, and
                            Ispat industries Ltd are subsidiaries of JSW Group.[3]
                        </p>
                    </div>
                    <div class="card-footer">
                         <button class="btn btn-primary" name="a" value="6" type="submit">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="oracle.jfif" height="300" width="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Oracle</h5>
                        <p class="card-text">Oracle Corporation is an American multinational computer technology
                            corporation headquartered in Austin, Texas.The company sells database software and
                            technology, cloud engineered systems, and enterprise software products—particularly its own
                            brands of database management systems.
                        </p>
                    </div>
                    <div class="card-footer">
                         <button class="btn btn-primary" name="a" value="7" type="submit">Buy</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 my-10 mx-auto">
                    <img src="eicher.png" height="300" width="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Eicher</h5>
                        <p class="card-text">Eicher Motors Limited (EML) is an is an Indian manufacturer of motorcycles
                            and commercial vehicles. Eicher is the parent company of Royal Enfield, a manufacturer of
                            middleweight motorcycles. In addition to motorcycles, Eicher has a joint venture with
                            Sweden’s Volvo Trucks - Volvo Eicher Commercial Vehicles Limited (VECV).</p>
                    </div>
                    <div class="card-footer">
                         <button class="btn btn-primary" name="a" value="8" type="submit">Buy</button>
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