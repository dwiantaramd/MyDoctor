    <!-- Main Page-->
    <div class="col-md-10 p-5 pt-2">
        <h2><i class="fas fa-user-md mr-2"></i>Doctor List</h2>
        <hr>
        <a href="" class="btn btn-primary mb-3 addDoctorbtn" data-toggle="modal" data-target="#DoctorModal"><i class="fas fa-plus mr-2"></i>Add Doctor</a>
        <?= $this->session->flashdata('message'); ?>
        <?= form_error('doc_name', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= form_error('specialist', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= form_error('doc_gender', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= form_error('hospital_name', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= form_error('doc_image', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <table id="DoctorTable" class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width: 6%">Image</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Specialist</th>
                    <th scope="col">Hospital Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col" style="width: 18%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($doctor as $d) : ?>
                    <tr>
                        <th scope="row" style="vertical-align: middle"><?= $i ?> </th>
                        <td style="vertical-align: middle"><img src="<?= base_url('assets/img/doctor/') . $d['doc_image']; ?>" style="width:50px;height:50px"></td>
                        <td style="vertical-align: middle"><?= $d['doc_name']; ?></td>
                        <td style="vertical-align: middle"><?= $d['specialist']; ?></td>
                        <td style="vertical-align: middle"><?= $d['hospital_name']; ?></td>
                        <td style="vertical-align: middle"><?= $d['doc_gender']; ?></td>
                        <td style="vertical-align: middle">
                            <button type="button" class="btn btn-info EditDoctorbtn" data-toggle="modal" data-target="#DoctorModal" data-doc_id="<?= $d['doctor_id'] ?>"><i class="fas fa-edit mr-1"></i>Edit</button>
                            <a href="<?= base_url('Doctor/delDoctor/') . $d['doctor_id']; ?>" type="button" class="btn btn-danger delDoctorbtn"><i class="fas fa-trash mr-1"></i>Delete</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>

    <!-- Modal -->
    <!-- Modal Add/Edit Doctor -->
    <div class="modal fade" id="DoctorModal" tabindex="-1" role="dialog" aria-labelledby="DoctorModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="LabelDoctorModal">Add Doctor Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" enctype="multipart/form-data" id="DoctorForm" action="<?= base_url('Doctor/addDoctor'); ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="doctor_id" id="doctor_id">
                            <label>Full Name</label>
                            <input type="text" class="form-control" id="doc_name" name="doc_name">
                        </div>
                        <div class="form-group">
                            <label>Specialist</label>
                            <input type="text" class="form-control" id="specialist" name="specialist">
                        </div>
                        <div class="form-group">
                            <label>Hospital</label>
                            <select id="hospital_name" name="hospital_name" class="form-control">
                                <option disabled selected hidden>Select ...</option>
                                <?php foreach ($hospital as $h) : ?>
                                    <option value="<?= $h['hospital_id']; ?>"><?= $h['hos_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select id="doc_gender" name="doc_gender" class="form-control">
                                <option disabled selected hidden>Select ...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" id="doc_image" name="doc_image">
                        </div>
                    </div>
                    <div class="modal-footer footer-doctor">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>