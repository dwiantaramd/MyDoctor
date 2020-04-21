<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/all.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/admin.css'); ?>">
    <title><?= $title ?></title>

</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <img id="logo" src="<?= base_url('assets/'); ?>img/Logo.png" height="70" width="70">
        <a id="pagetitle" class="navbar-brand" href="<?= base_url('Admin'); ?>">Administrator Dashboard</a>
        <div class="dropdown show ml-auto">
            <a id="profil" class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span><?= $user['name']; ?></span>
                <img id="profile" class="img-profile rounded-circle" src="<?= base_url('assets/img/') . $user['image']; ?>" height="50" width="50">
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                <a class="dropdown-item" href=""><i class="fas fa-user mr-2"></i>My Profile</a>
                <a class="dropdown-item" href="<?= base_url('Auth/logout'); ?>"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
            </div>
        </div>
    </nav>

    <!--SideBar-->
    <div class="row no-gutters">
        <div id="sidebar" class="col-md-2 bg-dark pr-3 pt-4 pb-4">
            <ul class="nav flex-column">
                <li class="nav-item ml-2">
                    <a id="navlink" class="nav-link text-white" href="<?= base_url('Admin'); ?>"><i class="fas fa-home mr-2"></i>Home</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item ml-2">
                    <a id="navlink" class="nav-link text-white" href="<?= base_url('Hospital'); ?>"><i class="fas fa-hospital mr-2"></i>Hospital</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item ml-2">
                    <a id="navlink" class="nav-link text-white" href="<?= base_url('Doctor'); ?>"><i class="fas fa-user-md mr-2"></i>Doctor</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item ml-2">
                    <a id="navlink" class="nav-link text-white" href="#"><i class="fas fa-notes-medical mr-2"></i>Appointment</a>
                    <hr class="bg-secondary">
                </li>
                <li id="navlink" class="nav-item ml-2">
                    <a class="nav-link text-white" href="<?= base_url('User/viewMember'); ?>"><i class="fas fa-users mr-2"></i>User</a>
                </li>
            </ul>
        </div>