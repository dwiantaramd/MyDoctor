<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="font-family: Poppins;" id="navbarscroll">
        <div class="container">
            <a class="navbar-brand" href="#" style="color:#1761a0;"><img class="mr-2" id="logo" src="<?= base_url('assets/'); ?>img/Logo.png" height="55" width="55">MyDoctor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="<?= base_url('User'); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="<?= base_url('User/viewAppoint') ?>">My Appointment</a>
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

    <div class="container">
        <div class="row mt-5">
            <div class="col text-center">
                <h2><i class="fas fa-notes-medical mr-2"></i>My Appointment List</h2>
                <hr>
                <a class="btn btn-info" href="<?= base_url('User/viewRequest'); ?>"><i class="fas fa-plus mr-2"></i>Book Appointment</a>
            </div>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="col-md mt-3">
            <table id="appointTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Hospital</th>
                        <th scope="col">Doctor</th>
                        <th scope="col">Specialist</th>
                        <th scope="col">Date</th>
                        <th scope="col">Complaints</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($appointment as $ap) : ?>
                        <tr>
                            <th scope="row" style="vertical-align: middle"><?= $i ?> </th>
                            <td><?= $ap['hospital_name'] ?></td>
                            <td><?= $ap['doctor_name']; ?></td>
                            <td><?= $ap['specialist']; ?></td>
                            <td><?= $ap['appointment_date']; ?></td>
                            <td><?= $ap['complaints']; ?></td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>