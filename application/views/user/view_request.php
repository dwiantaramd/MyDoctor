<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" style="color:#1761a0;"><img class="mr-2" id="logo" src="<?= base_url('assets/'); ?>img/Logo.png" height="55" width="55">MyDoctor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="<?= base_url('User'); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="<?= base_url('User/viewAppoint'); ?>">My Appointment</a>
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

    <!-- Main Table -->
    <div class="container">
        <div class="row mt-5">
            <div class="col text-center">
                <h2><i class="fas fa-hospital mr-2"></i>Hospital List</h2>
                <hr>
            </div>
        </div>
        <?= form_error('Doctor_id', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= form_error('app_date', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <div class="col-md mt-3">
            <table id="hospitalTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Hospital Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($hospital as $h) : ?>
                        <tr>
                            <th scope="row" style="vertical-align: middle"><?= $i ?> </th>
                            <td style="vertical-align: middle"><img src="<?= base_url('assets/img/hospital/') . $h['hos_image']; ?>" style="width:100px;height:70px"></td>
                            <td style="vertical-align: middle"><?= $h['hos_name']; ?></td>
                            <td style="vertical-align: middle"><?= $h['hos_address']; ?></td>
                            <td class="text-center" style="vertical-align: middle">
                                <button type="button" class="btn btn-info addAppointmentBtn" data-toggle="modal" data-target="#AppointModal" data-hos_id="<?= $h['hospital_id'] ?>"><i class="fas fa-edit mr-1"></i>Book Now</button>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Add Appointment -->
    <div class="modal fade" id="AppointModal" tabindex="-1" role="dialog" aria-labelledby="AppointModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="LabelAppointModal">Book Appointment Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" id="AppointForm" action="<?= base_url('Appointment/addAppointment'); ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="hospital_id" id="hospital_id">
                            <input type="hidden" name="user_id" id="user_id" value="<?= $user['id'] ?>">
                            <label>Doctor</label>
                            <select id="Doctor_id" name="Doctor_id" class="form-control">
                                <option disabled selected hidden>Select ...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Date</label>
                            <input type="date" class="form-control" id="app_date" name="app_date">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Complaints(Optional)</label>
                            <input type="text" class="form-control" id="app_comp" name="app_comp">
                        </div>
                    </div>
                    <div class="modal-footer footer-hospital">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>