<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/user.css'); ?>">
    <title><?= $title ?></title>
</head>

<body id="Home" data-spy="scroll" data-target="#navbarscroll" data-offset="100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="font-family: Poppins;" id="navbarscroll">
        <div class="container">
            <a class="navbar-brand" href="#" style="color:#1761a0;"><img class="mr-2" id="logo" src="<?= base_url('assets/'); ?>img/Logo.png" height="55" width="55">MyDoctor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-pills ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="#Home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#AboutUs">About Us</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#Appointment">Appointment</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $user['username'] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><i class="fas fa-edit mr-2"></i>Edit Profile</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-key mr-2"></i>Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('Auth/logout'); ?>"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="6000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/banner1.jpg'); ?>" class="d-block w-100" alt="Banner 1">
                <div class="carousel-caption">
                    <h2 class="display-4">WE <span>CARE</span> ABOUT<br>YOUR <span>HEALTH</span></h2>
                    <hr>
                    <p>Book Your Appointment Avoid Dissapointment</p>
                    <a type="button" href="<?= base_url('User/viewRequest'); ?>" class="btn btn-info">Book Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/banner2.jpg'); ?>" class="d-block w-100" alt="Banner 2">
                <div class="carousel-caption">
                    <h2 class="display-4">Medical <span>Devices </span>For<br>Shapeless <span>Future</span></h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/banner3.jpg'); ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h2 class="display-4">#<span>COVID-19</span></h2>
                    <hr>
                    <p>Coronavirus Disease</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- About Us -->
    <section id="AboutUs" data-spy="scroll" data-target="#navbarscroll" data-offset="100">
        <div class="jumbotron jumbotron-fluid bg-light justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <img class="mr-2" id="logo" src="<?= base_url('assets/'); ?>img/Logo.png" height="200" width="200">
                    </div>
                    <div class="col-lg-9">
                        <h1 class="display-4">About Us</h1>
                        <hr>
                        <p class="lead">We connect qualified Doctors, quality pharmacies and laboratories,
                            reputed hospitals with the aim of transforming the science and delivery of
                            integrated healthcare and home based solution delivery. Our ever growing digital
                            network is our unique and distinct feature that sets us apart from our competitors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment -->
    <section id="Appointment" data-spy="scroll" data-target="#navbarscroll" data-offset="100">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="display-4">Appointment</div>
                    <hr>
                    <a type="button" href="<?= base_url('User/viewRequest'); ?>" class="btn btn-info mt-2 text-white"><i class="fas fa-plus mr-2"></i>Book Appointment</a> <br>
                    <a type="button" href="<?= base_url('User/viewAppoint'); ?>" class="btn btn-info mt-4"><i class="fas fa-notes-medical mr-2"></i>My Appointment</a>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/img/hospitalhome.jpg') ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Total Hospital</h5>
                            <div class="display-4">1.000<i class="fas fa-hospital ml-5 bgcard" style="opacity:0.4"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/img/doctorhome.jpg') ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Total Doctor</h5>
                            <div class="display-4">1.000<i class="fas fa-user-md ml-5 bgcard" style="opacity:0.4"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark mt-5">
        <div class="container">
            <div class="row text-center text-white">
                <div class="col mt-3">
                    <div class="display-4">Contact Us</div>
                    <hr class="bg-light" style="width:50%">
                    <p>123-456-789</p>
                    <p>myDoctor@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>