<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/all.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/user.css'); ?>">
    <title><?= $title ?></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
		<img id="logo" src="<?= base_url('assets/'); ?>img/Logo.png" height="70" width="70">
		<a class="navbar-brand" href="#"> Welcome to MyDoctor</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

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

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search your appointment.." aria-label="Search">
		      <button class="btn btn-sm btn-outline-secondary" type="button">Search</button>
		    </form>
		</div>
	</nav>