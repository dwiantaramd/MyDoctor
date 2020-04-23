    <!-- Main Page-->
    <div class="col-md-10 p-5 pt-2 bg-white">
        <h2><i class="fas fa-home mr-2"></i>Home</h2>
        <hr>
        <!-- Carousel -->
        <div class="row-md-10">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url('assets/img/banneradmin1.jpg'); ?>" class="d-block w-100" alt="Banner 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4"></h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/img/banneradmin1.jpg'); ?>" class="d-block w-100" alt="Banner 2">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/img/banneradmin1.jpg'); ?>" class="d-block w-100" alt="...">
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

        <div class="row p-3 pt-4 text-white">
            <div class="card bg-success mx-auto" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total Hospital</h5>
                    <div class="display-4"><?= $hospital ?><i class="fas fa-hospital ml-5 bgcard" style="opacity:0.4"></i></div>
                </div>
            </div>

            <div class="card bg-danger mx-auto" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total Doctor</h5>
                    <div class="display-4"><?= $doctor ?><i class="fas fa-user-md ml-5 bgcard" style="opacity:0.4"></i></div>
                </div>
            </div>

            <div class="card bg-info mx-auto" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total Appointment</h5>
                    <div class="display-4"><?= $appointment ?><i class="fas fa-notes-medical ml-5 bgcard" style="opacity:0.4"></i></div>
                </div>
            </div>

            <div class="card bg-warning mx-auto" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total User</h5>
                    <div class="display-4"><?= $num_user ?><i class="fas fa-users ml-4" style="opacity:0.4"></i></div>
                </div>
            </div>
        </div>
    </div>
    </div>