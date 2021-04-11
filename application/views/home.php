<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!Doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
        <style>
            .navbar {
                background-color: #242e4c;
            }

            .cover {
                background: url('');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;

            }

            .button-primary {
                background-color: #04a454!important;
            }

            .vh-80 {
                min-height: 84vh;
            }

            .sign__container {
                width: 60%;
            }

            @media (min-width: 1200px) {
                .sign__container {
                    width: 350px;
                }
                .subtitle-mb{
                    margin-bottom: 5.5rem!important;
                }
            }
        </style>
    </head>

    <body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIMS</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<body>
    <div class="center">
			<div class="clock_container">
				<div class="clock">
				<div class="hour clock_line"></div>
				<div class="mintue clock_line"></div>
				<div class="second clock_line"></div>
				<div class="clock_dot"></div>
				</div>
			</div>
			<div class="date"></div>
	</div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="<?php echo base_url()."assets/"; ?>logo/logo-temp1.svg" style="width: 200px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto ">
                    
                    <li class="nav-item ml-lg-3">
                        <a class="nav-link  text-light" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="http://localhost/BIMS/login-register.html">Login/Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container-fluid cover  ">

        <div class="row align-items-center justify-content-center justify-content-xl-start vh-80">
            <div class="col col-sm-7 text-center text-xl-left col-xl-4 offset-xl-2">
                <h1 class="mb-4">HELLO WORLD</h1>
                <!-- <p class="mb-5 subtitle-mb">Food, drinks and desserts available for delivery or pickup.</p>
                <div class="input-group mb-3 shadow">

                    <input type="text" class="form-control" placeholder="Enter delivery address" aria-label="Search" aria-describedby="basic-addon1">
                    <div class="input-group-prepend">
                        <button class="btn button-primary text-light text-uppercase p-3" type="button">Find projects</button>
                    </div>
                </div> -->

            </div>
        </div>
    </main>

    <footer class="page-footer font-small bg-light">

        <div>
            <div class="container-fluid">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-5 col-xl-4 text-center text-md-left  mb-md-0 small">
                        <nav class="nav justify-content-center justify-content-md-start">
                            <a class="nav-link text-muted" href="#">Terms of Privacy</a>
                            <a class="nav-link text-muted" href="#">Cookies</a>
                            <a class="nav-link text-muted" href="#">About</a>
                            <a class="nav-link text-muted" href="#">Contact</a>
                        </nav>
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-6 text-center text-md-left  mb-md-0 small">
                        <div class="footer-copyright text-center text-black-50 pt-3 pb-2">© 2020
                        </div>
                    </div>


                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-3 col-xl-2 text-center text-md-right">
                        <a href="#" class="text-dark">
                            <i class="fab fa-facebook-f white-text mx-2"> </i></a>
                        <a href="#" class="text-dark">
                            <i class="fab fa-twitter white-text mx-2"> </i></a>
                        <a href="#" class="text-dark">
                            <i class="fab fa-instagram white-text mx-2"> </i></a>



                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>
    </footer>
    
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    </body>

    </html>