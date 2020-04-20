<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/all.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/admin.css'); ?>">
    <title>Customer</title>

</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <img id="logo" src="<?= base_url('assets/'); ?>img/Logo.png" height="70" width="70">
        <a id="pagetitle" class="navbar-brand" href="#">Customer</a>
        <div class="dropdown show ml-auto">
            <a id="profil" class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span>Nama Customer</span>
                <img id="profile" class="img-profile rounded-circle" src="yoriko.jpg" height="50" width="50">
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>My Profile</a>
                <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
            </div>
        </div>
    </nav>

    <!--SideBar-->
    <div class="row no-gutters">
        <div id="sidebar" class="col-md-2 bg-dark pr-3 pt-4 pb-4">
            <ul class="nav flex-column">
                <li class="nav-item ml-2">
                    <a class="nav-link active text-white" href="#">Home</a>
                    <hr class="bg-secondary">
                </li>
                <!-- <li class="nav-item ml-2">
                    <a class="nav-link text-white" href="#"><i class="fas fa-user-md mr-2"></i>Doctor</a>
                    <hr class="bg-secondary">
                </li> -->
                <li class="nav-item ml-2">
                    <a class="nav-link text-white" href="#"><i class=""></i>Appointment</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link text-white" href="#"></i>Customer Service</a>
                    <hr class="bg-secondary">
                </li>
                <!-- <li class="nav-item ml-2">
                    <a class="nav-link text-white" href="#">Appointment</a>
                    <hr class="bg-secondary">
                </li> -->
                <!-- <li class="nav-item ml-2">
                    <a class="nav-link text-white" href="#">Member</a>
                </li> -->
            </ul>
        </div>
        <!-- Main Page-->
        <div class="col-md-10">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= base_url('assets/img/Images.jpg') ?>" style="height:400px" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url('assets/img/Images.jpg') ?>" style="height:400px" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url('assets/img/Images.jpg') ?>" style="height:400px" alt="Third slide">
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
        </div>
    </div>
    <!-- Optional JavaScript -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
