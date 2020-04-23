    <!-- Main Page-->
    <div class="col-md-10 p-5 pt-2">
        <h2><i class="fas fa-notes-medical mr-2"></i>Appointment List</h2>
        <hr>
        <?= $this->session->flashdata('message'); ?>
        <table id="appointmentTable" class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Hospital</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($appointment as $ap) : ?>
                    <tr>
                        <th scope="row" style="vertical-align: middle"><?= $i ?> </th>
                        <td><?= $ap['name'] ?></td>
                        <td><?= $ap['hospital_name'] ?></td>
                        <td><?= $ap['doctor_name']; ?></td>
                        <td><?= $ap['appointment_date']; ?></td>
                        <td>
                            <button type="button" class="btn btn-info appDetailBtn" data-toggle="modal" data-target="#appointModal" data-appointment_id="<?= $ap['appointment_id']; ?>"><i class="fas fa-edit mr-1"></i>Details</button>
                            <a href="<?= base_url('Appointment/delAppointment/') . $ap['appointment_id']; ?>" type="button" class="btn btn-danger appDeleteBtn"><i class="fas fa-trash mr-1"></i>Delete</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>


    <!-- MODAL DETAILS -->
    <div class="modal fade" id="appointModal" tabindex="-1" role="dialog" aria-labelledby="appointModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="LabelAppointModal">Appointment Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Customer Name</label>
                            <input type="text" class="form-control" id="cus_name" name="cus_name" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Hospital</label>
                            <input type="text" class="form-control" id="hosp_name" name="hosp_name" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Doctor Name</label>
                            <input type="text" class="form-control" id="doct_name" name="doct_name" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Specialist</label>
                            <input type="text" class="form-control" id="spec" name="spec" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Date</label>
                            <input type="date" class="form-control" id="app_date" name="app_date" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Complaints</label>
                            <input type="text" class="form-control" id="complaints" name="complaints" readonly>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>